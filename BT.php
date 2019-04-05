<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legent>Calculator</legent>
        First operand :<input type="text" name="first"><br><br>
        Operator :<select name="add"><br><br>
            <option value="addtion">addition</option>
            <option value="subtruction">subtruction</option>
            <br><br>
        </select><br><br>
        Second : <input type="text" name="second"><br><br>
        <input type="submit" name="Calculator">
    </fieldset>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $first = $_POST["first"];
    $last = $_POST["second"];
    $add = $_POST["add"];

    if ($add == "addtion") {
        $result = $first + $last;
        echo "result : " . $result;
    }
    if ($add == "subtruction") {
        echo "result : " . ($first - $last);
    }
}
?>
</body>
</html>