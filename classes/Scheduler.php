<?php

/**
 * Created by PhpStorm.
 * User: dotun
 * Date: 1/25/17
 * Time: 8:19 PM
 */


class Scheduler extends SplStack
{
    public $openWindows = array("window-1", "window-2","window-3", "window-4", "window-5", "window-6", "window-7");
    public $closeWindows = array();
    public static $waitTime;

    /**
     * @param  $objects
     */
    public function schedule_jobs($objects)
    {
        if(count($this->openWindows) > 0)
        {
            $windowIndex = rand(0, count($this->openWindows) - 1);
            $windowInUse = $this->openWindows[$windowIndex];
            echo $windowInUse . " serving " . $objects->name . " for " . $objects->interArrivalTime . " secs ";
            if($windowInUse !== false) {
                unset($this->openWindows[$windowIndex]);
            }
            foreach ($this->openWindows as $window)
                echo $window . " ";
            echo PHP_EOL;

            sleep($objects->interArrivalTime);
            $this->openWindows = array_values($this->openWindows);
            array_push($this->openWindows, $windowInUse);
        }
        else
            echo "Delay..\n";
    }
}