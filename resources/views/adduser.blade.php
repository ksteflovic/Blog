<form method="post" action="{{ action('UserController@insertAction') }}">
    Meno: <br>
    <input type="text" name="firstname" value="Mickey">
    <br>
    Priezvisko: <br>
    <input type="text" name="firstname" value="Mouse">
    <br>
    Email: <br>
    <input type="email" name="email" value="@">
    <br>
    Vek: <br>
    <input type="date" name="birthday" value="21.12.2012">
    <br><br>
    <input type="submit" value="Odoslať">
</form>