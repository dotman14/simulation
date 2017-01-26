<?php

/**
 * Created by PhpStorm.
 * User: dotun
 * Date: 1/25/17
 * Time: 12:47 PM
 */
class Metrics
{
    private $cpu;
    private $network;
    private $thinking;
    private $io;
    private $display;
    private $objectName;
    private $methodName;

    public function __construct($objectName, $methodName, $cpu, $io, $network, $thinking, $display)
    {
        $this->objectName = $objectName;
        $this->methodName = $methodName;
        $this->cpu = $cpu;
        $this->io = $io;
        $this->network = $network;
        $this->thinking = $thinking;
        $this->display = $display;
    }
}

{
//    /**
//     * @return mixed
//     */
//    public function getCpu()
//    {
//        return $this->cpu;
//    }
//
//    /**
//     * @param mixed $cpu
//     */
//    public function setCpu($cpu)
//    {
//        $this->cpu = $cpu;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getNetwork()
//    {
//        return $this->network;
//    }
//
//    /**
//     * @param mixed $network
//     */
//    public function setNetwork($network)
//    {
//        $this->network = $network;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getThinking()
//    {
//        return $this->thinking;
//    }
//
//    /**
//     * @param mixed $thinking
//     */
//    public function setThinking($thinking)
//    {
//        $this->thinking = $thinking;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getIo()
//    {
//        return $this->io;
//    }
//
//    /**
//     * @param mixed $io
//     */
//    public function setIo($io)
//    {
//        $this->io = $io;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getDisplay()
//    {
//        return $this->display;
//    }
//
//    /**
//     * @param mixed $display
//     */
//    public function setDisplay($display)
//    {
//        $this->display = $display;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getObjectName()
//    {
//        return $this->objectName;
//    }
//
//    /**
//     * @param mixed $objectName
//     */
//    public function setObjectName($objectName)
//    {
//        $this->objectName = $objectName;
//    }
}