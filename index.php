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

    spl_autoload_register(function($class_name){
         include $class_name. '.php';
    });


    $allura = new Allura;
//    $coran = new Coran;

    $allura->sayHello();
//    $coran->sayHello();



    $shiro = new paladin("Shiro");
    echo $shiro->get_name() . " is Space Dad." . '</br>';

    $black = new lion("Black Lion");
    echo $shiro->get_name() . " pilots the " . $black->get_name() . '</br>';

    echo paladin::$maxLionNumber. '</br>';;

    $hunk = new Hunk();
    $hunk->name = 'Hunk';
    $hunk->color = 'yellow';

    echo $hunk->describe();
    echo $hunk->makeSound();

$pidge = new Pidge();
$pidge->name = 'Pidge';
$pidge->color = 'green';

echo $pidge->describe();
echo $pidge->makeSound();

$shiro2 = new Shiro();
$shiro2->name = 'Shiro';
$shiro2->color = 'black';

echo $shiro2->describe();
echo $shiro2->makeSound();

$paladins = new Paladin3();

foreach($paladins as $key => $value){
    print "key => $value\n" . '</br>';
}
?>



</html>