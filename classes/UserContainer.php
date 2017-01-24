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

    public function insert_users()
    {
        for ($i = 0; $i < $this->noOfStudent; $i++)
        {
            $student = new Student();
            $student->name = "student".$i;
            self::$users[] = $student;
        }

        for ($j = 0; $j < $this->noOfFaculty; $j++)
        {
            $faculty = new Faculty();
            $faculty->name = "faculty".$j;
            self::$users[] = $faculty;
        }

        for ($k = 0; $k < $this->noOfAdmin; $k++)
        {
            $admin = new Faculty();
            $admin->name = "admin".$k;
            self::$users[] = $admin;
        }

        shuffle(self::$users);
    }

    /**
     * @return array
     */
    public function getUsersArray(): array
    {
        return self::$users;
    }
}