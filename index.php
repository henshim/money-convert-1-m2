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
<form action="" method="post">
    <p>Form</p>
    <select name="from" id="">
        <option value="1">USD</option>
        <option value="23000">VND</option>
    </select>
    <p>To</p>
    <select name="to" id="">
        <option value="23000">VND</option>
        <option value="1">USD</option>
    </select>
    <input type="number" placeholder="enter number" name="inp">
    <input type="submit">
</form>
</body>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $from=$_POST['from'];
    $to=$_POST['to'];
    $in=$_POST['inp'];
    $result=$to*($in/$from);
    echo $result;
}
?>
</html>
