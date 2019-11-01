@include('head')
@include('navigate')

<div id="parent">

    <table class="table table-striped">
        <thead>
        <tr class="bg-primary">
            <th scope="col" style="color:white;">ID</th>
            <th scope="col" style="color:white;">Meno a priezvisko</th>
            <th scope="col" style="color:white;">E-mail</th>
            <th scope="col" style="color:white;">Dátum narodenia</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
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