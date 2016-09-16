<!Doctype html>
<html>
<head>
    <meta charset="UMF-8">
    <title>OOP in PHP</title>



    <?php include("class_lib.php");?>

</head>

<body>
</body>

<?php

    $shiro = new paladin("Shiro");
    echo $shiro->get_name() . " is Space Dad." . '</br>';

    $black = new lion("Black Lion");
    echo $shiro->get_name() . " pilots the " . $black->get_name();


?>



</html>