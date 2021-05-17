
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convert Decimal to Binary</title>
    <style>
        button {
            padding: 20px 14px;
            border-radius: 9px;
            background-color: white;
            color: black;
            border: 2px solid #e7e7e7;
        }
        button:hover {
            background-color: #e7e7e7;
        }
    </style>
</head>
<body>

<table style="border: 1px solid black" width="190" >
    <tr>
        <th colspan="2"><h2>Convert Decimal to Binary</h2></th>
    </tr>
    <tr>
        <form method="get">

            <td><label>Decimal:</label><input type="text" name="input" inputmode="numeric" required autofocus></td>
            <td rowspan="4"><button type="submit">Convert</button></td>
        </form>
    </tr>

<?php

include_once "app/Stack.php";

$test = new Stack();
$number = $_GET['input'];
$test->convert($number);

?>
    <tr>
        <td><label>Binary:</label></td>
    </tr>
    <tr>
        <td><?php echo $test->toString();?></td>
    </tr>
</table>
</body>
</html>
