<?php

/**
 * Created by PhpStorm.
 * User: dotun
 * Date: 1/20/17
 * Time: 1:27 PM
 */

/**
 * This class is used to perform all random functions for User super class and other subclasses.
 */
declare(strict_types=1);
require_once('Student.php');
require_once('Admin.php');
require_once('Faculty.php');
require_once('User.php');
require_once('Metrics.php');

class Randomize
{
    /**
     * @param $object
     * @param $runMethod
     * @method Randomize runs a random method from a list of methods generated from get_methods class
     * We get a random index from the array returned for the specific class...(Each class has varying number of methods/actions user can perform)
     * Then we call the method corresponding to the index returned by rand(), using the class object and PHP's call_user_function.
     * This in turn execute the method.
     */
    public function run_class_methods($object, int $runMethod)
    {
        if ($object instanceof Student)
        {
            echo $object->login().PHP_EOL;
            for($i = 0; $i < $runMethod; $i++)
            {
                $methodIndex = mt_rand(0, count($object->get_methods()) - 1);
                print_r(call_user_func([$object, $object->get_methods()[$methodIndex]]));
                $metrics = new Metrics($object->name, $object->get_methods()[$methodIndex], "cpu value", "io value", "network value", "thinking value", "display value");
                Student::$metrics[] = $metrics;
            }
            echo $object->logout().PHP_EOL;
        }

        if ($object instanceof Admin)
        {
            echo $object->login().PHP_EOL;
            for($i = 0; $i < $runMethod; $i++)
            {
                $methodIndex = mt_rand(0, count($object->get_methods()) - 1);
                echo call_user_func([$object, $object->get_methods()[$methodIndex]]) . PHP_EOL;
                $metrics = new Metrics($object->name, $object->get_methods()[$methodIndex], "cpu value", "io value", "network value", "thinking value", "display value");
                Admin::$metrics[] = $metrics;
            }
            echo $object->logout().PHP_EOL;
        }

        if ($object instanceof Faculty)
        {
            echo $object->login().PHP_EOL;
            for($i = 0; $i < $runMethod; $i++)
            {
                $methodIndex = mt_rand(0, count($object->get_methods()) - 1);
                echo call_user_func([$object, $object->get_methods()[$methodIndex]]) . PHP_EOL;
                $metrics = new Metrics($object->name, $object->get_methods()[$methodIndex], "cpu value", "io value", "network value", "thinking value", "display value");
                Faculty::$metrics[] = $metrics;
            }
            echo $object->logout().PHP_EOL;
        }
    }
}