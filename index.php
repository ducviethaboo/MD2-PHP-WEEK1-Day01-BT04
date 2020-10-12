<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php include 'Caculate.php' ?>
<style>
    fieldset {
        width: 300px;
    }

    select {
        width: 70px;
    }
</style>
<body>
<form method="post">
    <h2>Simple Calculator</h2>
    <fieldset>
        <legend>Calculator</legend>
        <table border="0px">
            <tr>
                <td>First operand:</td>
                <td><input type="text" name="num1"></td>
            </tr>
            <tr>
                <td>Operator:</td>
                <td>
                    <select name="add">
                        <option>+</option>
                        <option>-</option>
                        <option>x</option>
                        <option>/</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Second operand:</td>
                <td><input type="text" name="num2"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Calculate"></td>
            </tr>
        </table>
    </fieldset>
    <h2>Result:</h2>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numA = $_REQUEST['num1'];
    $numB = $_REQUEST['num2'];
    $ckeck = $_REQUEST['add'];
    $result = new Caculate($numA,$numB);
    if($ckeck === '+') {
      echo $result->caculateAdd();
    }
    if($ckeck === '-') {
        echo $result->calculateSub();
    }
    if($ckeck === 'x') {
        echo $result->calculateMulti();
    }
    if($ckeck === '/') {
        echo $result->calculateDiv();
    }

}
?>
</body>
</html>