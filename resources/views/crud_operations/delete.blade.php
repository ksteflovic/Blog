@include('head')
@include('navigate')

<div class="jumbotron">
    <h1 class="display-4">Vymazanie údajov z tabuľky</h1>
    <p class="lead">Určite chcete vymazať nasledujúce údaje z tabuľky?</p>
    <p><strong>Meno: </strong></p>
    <p><strong>Priezvisko: </strong></p>
    <p><strong>Email: </strong></p>
    <p><strong>D8tum narodenia: </strong></p>
    <hr class="my-4">
    <p>Táto akcia je nevratná!</p>
    <p class="lead">
        <a class="btn btn-danger btn-sm" role="button">Áno, vymazať</a>
    </p>
</div>

<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#delete').addClass('active');
    });
</script>
@include('foot');