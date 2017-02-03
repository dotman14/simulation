<?php

/**
 * Created by PhpStorm.
 * User: dotun
 * Date: 1/20/17
 * Time: 11:00 AM
 */

//$start = microtime(true);
//for ($x=0;$x<10000;$x++) {}
//$end = microtime(true);
//echo 'It took ' . ($end-$start) . ' seconds!';

class Student implements User
{
    private $noOfMethods;
    public static $countMethodCalls;
    public $name;
    public $interArrivalTime;
    public static $metrics = array();

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
        //return "student complete_survey";
        $arr  = array();
        $arr[0] = "cpu-value";
        $arr[1] = "io-value";
        //return "student view_survey";
        return $arr;
    }

    /**
     * @return string for testing
     */
    public function view_survey()
    {
        self::$countMethodCalls++;
        $arr  = array();
        $arr[0] = "cpu-value";
        $arr[1] = "io-value";
        //return "student view_survey";
        return $arr;
    }

    public function get_metrics()
    {
        return self::$metrics;
    }

    /**
     * @return array of methods available in a class;
     */
    public function get_methods()
    {
        $allMethods    = array();
        $removeMethods = array('get_method_count','get_methods', '__construct', 'login', 'logout', 'get_metrics');

        foreach (get_class_methods($this) as $method)
            $allMethods[] = $method;

        $methods = array_diff_key(array_flip($allMethods), array_flip($removeMethods));

        return array_values(array_flip($methods));
    }
}