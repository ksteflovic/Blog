@include('head')
@include('navigate')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4" style="color: darkred;"><strong>Vymazanie údajov z tabuľky</strong></h1>
        <br>
        <p class="lead">Určite chcete vymazať nasledujúce údaje z tabuľky?</p>
        <p><strong>Meno: </strong>{{ $user->firstname }}</p>
        <p><strong>Priezvisko: </strong>{{ $user->lastname }}</p>
        <p><strong>Email: </strong>{{ $user->email }}</p>
        <p><strong>Dátum narodenia: </strong>{{ $user->birthday }}</p>
        <hr class="my-4">
        <p>Táto akcia je nevratná!</p>
        <p class="lead">
            <a class="btn btn-danger btn-bg" role="button" href="{{ action("UserController@deleteAction", ['id' => $user->id]) }}">Áno, vymazať</a>
        </p>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#delete').addClass('active');
    });
</script>
@include('foot');