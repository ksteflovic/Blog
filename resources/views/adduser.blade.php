<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form method="post" action="{{ action('UserController@insertAction') }}">
    <br>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="">Meno a priezvisko</span>
        </div>
        <input type="text" name="firstname" value="Mickey" class="form-control">
        <input type="text" name="firstname" value="Mouse" class="form-control">
    </div>
    Email: <br>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">@</span>
        </div>
        <input type="email" class="form-control" placeholder="E-mail" aria-label="email" aria-describedby="basic-addon1" name="email" value="@">
    </div>

    <br>
    Dátum narodenia: <br>
    <input type="date" name="birthday" value="21.12.2012">
    <br><br>
    <input type="submit" value="Odoslať">
</form>
</body>
</html>