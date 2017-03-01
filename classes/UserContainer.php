<?php

/**
 * Created by PhpStorm.
 * User: dotun
 * Date: 1/20/17
 * Time: 6:10 PM
 */

require_once('Student.php');
require_once('Admin.php');
require_once('Faculty.php');

class UserContainer
{
    /**
     * @var int Number of potential student objects we insert into $usersArray
     */
    private $noOfStudent;

    /**
     * @var int Number of potential faculty objects we insert into $usersArray
     */
    private $noOfFaculty;

    /**
     * @var int Number of potential admin objects we insert into $usersArray
     */
    private $noOfAdmin;

    public function __construct($noOfStudent, $noOfFaculty, $noOfAdmin)
    {
        $this->noOfStudent  = $noOfStudent;
        $this->noOfFaculty  = $noOfFaculty;
        $this->noOfAdmin    = $noOfAdmin;
    }

    /**
     * @var array all
     */
    private static $users = array();


    public static function compare($a, $b)
    {
        return $a->interArrivalTime > $b->interArrivalTime;
    }

    public function insert_users()
    {

        $studentArrivalTime = 0;
        //$facultyArrivalTime = 0;
       // $adminArrivalTime = 0;
        while(true)
        {
            $studentArrivalTime += 3;
            $student = new Student();
            $student->name = "student".$studentArrivalTime;
            self::$users[] = $student;
            $student->interArrivalTime = $studentArrivalTime;
            sleep(3);
        }
//        for ($i = 0; $i < $this->noOfStudent; $i++)
//        {
//            $student = new Student();
//            $student->name = "student".$i;
//            $student->interArrivalTime = rand(0, 5);
//            self::$users[] = $student;
//        }

//        for ($j = 0; $j < $this->noOfFaculty; $j++)
//        {
//            $faculty = new Faculty();
//            $faculty->name = "faculty".$j;
//            $faculty->interArrivalTime = rand(0, 5);
//            self::$users[] = $faculty;
//        }
//
//        for ($k = 0; $k < $this->noOfAdmin; $k++)
//        {
//            $admin = new Admin();
//            $admin->name = "admin".$k;
//            $admin->interArrivalTime = rand(0, 5);
//            self::$users[] = $admin;
//        }

        usort(self::$users, array('UserContainer','compare'));
    }

    /**
     * @return array
     */
    public function getUsersArray(): array
    {
        return self::$users;
    }
}