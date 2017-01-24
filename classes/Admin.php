<?php

/**
 * Created by PhpStorm.
 * User: dotun
 * Date: 1/20/17
 * Time: 11:07 AM
 */

class Admin implements User
{
    public static $countMethodCalls;
    private $noOfMethods;

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
        return "admin login";
    }

    /**
     * @return string for testing
     */
    public function logout()
    {
        return "admin logout";
    }

    /**
     * @return string for testing
     */
    public function view_report()
    {
        self::$countMethodCalls++;
        return "admin view_report";
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
}