<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <label>Name</label>
    <input type="text" name="txtname">
    <input type="Submit" name="btnAdd">

</form>
    
</body>
</html>
<?php

if(isset($_POST["btnAdd"])){
    $a=$_POST[" txtname"];
    echo $a;
}





?>