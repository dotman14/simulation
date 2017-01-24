<?php

/**
 * Created by PhpStorm.
 * User: dotun
 * Date: 1/20/17
 * Time: 11:00 AM
 */

class Student implements User
{
    private $noOfMethods;
    public static $countMethodCalls;
    public $name;

    public function __construct()
    {
        $this->noOfMethods = count(self::get_methods());
    }

    public function get_method_count()
    {
        return count($this->get_methods());
    }

    /**
     * @return string for testing
     */
    public function login()
    {
        return "student login";
    }

    /**
     * @return string for testing
     */
    public function logout()
    {
        return "student logout";
    }

    /**
     * @return string for testing
     */
    public function complete_survey()
    {
        self::$countMethodCalls++;
        return "student complete_survey";
    }

    /**
     * @return string for testing
     */
    public function view_survey()
    {
        self::$countMethodCalls++;
        return "student view_survey";
    }

    /**
     * @return array of methods available in a class;
     */
    public function get_methods()
    {
        $allMethods    = array();
        $removeMethods = array('get_method_count','get_methods', '__construct', 'login', 'logout');

        foreach (get_class_methods($this) as $method)
            $allMethods[] = $method;

        $methods = array_diff_key(array_flip($allMethods), array_flip($removeMethods));

        return array_values(array_flip($methods));
    }

//    public function __destruct()
//    {
//        echo self::logout().PHP_EOL;
//    }
}