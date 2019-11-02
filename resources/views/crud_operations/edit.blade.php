@include('head')
@include('navigate')

<div id="parent">
    <h3>Formulár pre úpravu existujúcich hodnôt</h3>
    <br>
    <form method="post" action="{{ action('UserController@editAction', ['id' => $user->id]) }}" >
        <br>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Meno a priezvisko</span>
            </div>
            <input type="text" name="firstname" id="firstname" class="form-control" value="{{ $user->firstname }}" required>
            <input type="text" name="lastname" id="lastname"  class="form-control" value="{{ $user->lastname }}" required>
        </div>
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Email: </span>
            </div>
            <input type="email" class="form-control" aria-label="email"
                   aria-describedby="basic-addon1" name="email" id="email" value="{{ $user->email }}" required>
        </div>

        <br>
        Dátum narodenia: <br>
        <input type="date" name="birthday" class="form-control" id="birthday" min="1950-01-01" value="{{ $user->birthday }}" required max="2019-12-31">
        <br><br>
        <div style="text-align: center">
            <input type="submit" value="Upraviť" class="btn btn-primary">
        </div>
    </form>
</div>

<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#edit').addClass('active');
    });
</script>
@include('foot')