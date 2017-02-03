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
require_once ('classes/Scheduler.php');

$student = new Student();
$admin   = new Admin();
$faculty = new Faculty();

$stu = random_int(4, 15);
$fac = random_int(2, 10);
$adm = random_int(2, 5);

$sum = $stu + $fac + $adm;

$random   = new Randomize();
$schedule = new Scheduler();

$container    = new UserContainer($stu, $fac, $adm);
$container->insert_users();
$userArray = array_reverse($container->getUsersArray());

for ($i = 0; $i < $sum; $i++)
{
    $getUser = array_pop($userArray);
    //echo $getUser->name . " " . $getUser->interArrivalTime.PHP_EOL;
    $schedule->schedule_jobs($getUser);
    //$random->run_class_methods($getUser, random_int(0, 5));
    //echo $getUser->name.PHP_EOL;
    //$random->run_class_methods($getUser, random_int(0, 5));
    //print_r($getUser->metrics);
}


//$schedule->schedule_jobs($userArray);
//print_r($userArray);

//print_r($schedule->pop());
//print_r($schedule);
//print_r($student->get_metrics());
//print_r($faculty->get_metrics());
//print_r($admin->get_metrics());


