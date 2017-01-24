<?php
/**
 * Created by PhpStorm.
 * User: dotun
 * Date: 1/20/17
 * Time: 11:09 AM
 */

require_once ('classes/User.php');
require_once ('classes/Student.php');
require_once ('classes/Faculty.php');
require_once ('classes/Admin.php');
require_once ('classes/UserContainer.php');
require_once ('classes/Randomize.php');

$student = new Student();
$admin   = new Admin();
$faculty = new Faculty();

echo "I'm a " . get_class($student) . " and I have " . $student->get_method_count() . " methods" . "\n";

$stu = rand(1, 5);
$fac = rand(1, 5);
$adm = rand(1, 5);



$sum = $stu + $fac + $adm;

$random   = new Randomize();

$container    = new UserContainer($stu, $fac, $adm);
$container->insert_users();
$userArray = $container->getUsersArray();

//print_r($student->get_methods());
//print_r($faculty->get_methods());
//print_r($admin->get_methods());

for ($i = 0; $i < $sum; $i++) {
    $getUser = array_pop($userArray);
    //echo $getUser->name.PHP_EOL;
    $run = rand(0, 4);
    $random->run_class_methods($getUser, $run);
}
//print_r(($container->getUsersArray()));
//$userArray = $container->getUsersArray();


//unset($student);