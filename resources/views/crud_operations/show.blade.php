@include('head')
@include('navigate')

<div id="parent">

    <table class="table table-striped table-dark">
        <thead>
        <tr class="bg-primary">
            <th scope="col" style="color:white;">ID</th>
            <th scope="col" style="color:white;">Meno a priezvisko</th>
            <th scope="col" style="color:white;">E-mail</th>
            <th scope="col" style="color:white;">Dátum narodenia</th>
            <th scope="col" style="color:white;">Akcia</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->firstname }} {{$user->lastname}}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->birthday }}</td>
                <td>
                    <div class="btn-toolbar" role="toolbar" aria-label="Button action group">
                        <div class="btn-group mr-2" role="group" aria-label="Action group">
                            <a href="{{ action("UserController@edit_page", ['id' => $user->id]) }}"
                               class="btn btn-outline-warning" role="button">Editovať</a>
                            <a href="{{ action("UserController@delete_page", ['id' => $user->id]) }}"
                               class="btn btn-outline-danger" role="button">Vymazať</a>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


</div>

<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#show').addClass('active');
    });
</script>
@include('foot')