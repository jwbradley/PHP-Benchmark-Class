<?php

class Benchmark
{
    __construct() {
	$this->start = microtime(true);	    
    }
	
    public function elapsedTime()
    {
        return $this->format_period((microtime(true))  - $this->start);
    }
    
    function format_period($seconds_input) {
	$hours = (int) ($minutes = (int) ($seconds = (int) ($milliseconds = (int) ($seconds_input * 1000)) / 1000) / 60) / 60;
	return  (int) $hours . ':' . ($minutes % 60) . ':' . ($seconds % 60) . (($milliseconds === 0) ? '' : '.' . rtrim($milliseconds % 1000, '0'));
    }
}
