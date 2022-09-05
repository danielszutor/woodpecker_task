<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <form method="POST" name="Form" action="add" onsubmit="return validateForm()">
    {{ csrf_field() }}
            <h2>Új felhasználó létrehozása</h2>
        <label for="username">Felhasználó név:*</label><br>
        <input type="text" id="username" name="username"><br>
        <label>Jelszó:*</label><br>
        <input type="password" name="password" id="password"/>
        <br>
        <br>
        <input type="submit" name="submit" value="Létrehoz">
    </form>
    <br>
    <br>
    <input type="button" onclick="location.href = '/users'" name="users" value="Felhasználók">
<script>

function validateForm() {
    var a = document.forms["Form"]["username"].value;
    var b = document.forms["Form"]["password"].value;
    if (!a || !b) {
      alert("Nem töltötte ki a mezőket!");
      return false;
    }
  }
</script>
</html>
