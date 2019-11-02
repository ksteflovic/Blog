@include('head')
@include('navigate')

<div id="parent">
    <h3>Formulár pre zadávavanie vstupných hodnôt</h3>
    <br>
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Dáta boli <strong>úspešne</strong> aktualizované!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form method="post" action="{{ action('UserController@editAction') }}" >
        <br>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Meno a priezvisko</span>
            </div>
            <input type="text" name="firstname" id="firstname" class="form-control" required>
            <input type="text" name="lastname" id="lastname"  class="form-control" required>
        </div>
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Email: </span>
            </div>
            <input type="email" class="form-control" aria-label="email"
                   aria-describedby="basic-addon1" name="email" id="email" required>
        </div>

        <br>
        Dátum narodenia: <br>
        <input type="date" name="birthday" class="form-control" id="birthday" min="1950-01-01" required max="2019-12-31">
        <br><br>
        <div style="text-align: center">
            <input type="submit" value="Odoslať" class="btn btn-primary">
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