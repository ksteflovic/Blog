@include('head')
@include('navigate')
<div id="parent">
    <h3>Formulár pre zadávavanie vstupných hodnôt</h3>
    <br>
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Vami zadané dáta boli <strong>úspešne</strong> vložené!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form method="post" action="{{ action('UserController@insertAction') }}" >
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
            <input type="submit" value="Odoslať" class="btn btn-primary"> <input type="button" value="Generovať" onclick="generate()" class="btn btn-secondary">
        </div>
    </form>
</div>
<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#insert').addClass('active');
    });
    function generate() {
        var name = chance.name();
        var pom = name.split(" ");
        document.getElementById("firstname").value = pom[0];
        document.getElementById("lastname").value = pom[1];
        document.getElementById("email").value = chance.email();
        document.getElementById("birthday").value = randomDate(new Date(1960, 0, 1), new Date());
    }
    function randomDate(start, end) {
        var d = new Date(start.getTime() + Math.random() * (end.getTime() - start.getTime())),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();

        if (month.length < 2) month = '0' + month;
        if (day.length < 2) day = '0' + day;

        return [year, month, day].join('-');
    }
</script>
@include('foot')