<?php

/**
 * Created by PhpStorm.
 * User: dotun
 * Date: 1/20/17
 * Time: 10:58 AM
 *
 * This is an interface for all users in the system.
 */

interface User
{
    /**
     * @return string for testing
     */
    public function login();

    /**
     * @return string for testing
     */
    public function logout();

    /**
     * @return array of methods available in a class;
     */
    public function get_methods();
}