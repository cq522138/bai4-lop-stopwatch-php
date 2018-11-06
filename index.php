<?php

class StopWatch
{
    //
    //const abc = 1;
    private $startTime;
    private $endTime;

    public function start()
    {
        $this->startTime = date('Y-M-d h:m:s');
    }

    public function getStart()
    {
        return $this->startTime;
    }

    public function stop()
    {
        $this->endTime = date('Y-M-d h:m:s');
    }
    public function getStop()
    {
        return $this->endTime;
    }

    public function getElapsedTime(){
        return strtotime($this->endTime) - strtotime($this->startTime);
    }
}

$stopWatch = new StopWatch();
//echo $stopWatch->getStart();
$stopWatch->start();
sleep(1);
$stopWatch->stop();
echo $stopWatch->getElapsedTime();

echo $stopWatch->getStart();


