<?php




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Exo01</title>
    <script src="Exo01/exo01.js"></script>
</head>
<body>

<form name="allumettes" method="POST" action="Model/GameState.php">
    <input type="checkbox" name="number[]" value="1">1<br>
    <input type="checkbox" name="number[]" value="2">2<br>
    <input type="checkbox" name="number[]" value="3">3<br>
    <input type="checkbox" name="number[]" value="4">4<br>
    <input type="checkbox" name="number[]" value="5">5<br>
    <input type="checkbox" name="number[]" value="6">6<br>
    <input type="checkbox" name="number[]" value="7">7<br>
    <input type="checkbox" name="number[]" value="8">8<br>
    <input type="checkbox" name="number[]" value="9">9<br>
    <input type="checkbox" name="number[]" value="10">10<br>
    <input type="checkbox" name="number[]" value="11">11<br>
    <input type="checkbox" name="number[]" value="12">12<br>
    <input type="checkbox" name="number[]" value="13">13<br>

    <input type="submit" value="tirer">

</form>

<div id="error-message" class="error-message"></div>
<div id="success-message" class="success-message"></div>

</body>
</html>