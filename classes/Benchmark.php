<?php

class Benchmark
{
    public $start;
    public $end;

    public function start()
    {
        $this->start = microtime(true);
    }

    public function end()
    {
        $this->end = microtime(true);
    }
    public function elapsedTime()
    {
        return $form->format_period((microtime(true))  - $this->start)
    }
    public function totalTime()
    {
        return $form->format_period($this->end - $this->start);
    }
    
	function format_period($seconds_input) {
		$hours = (int) ($minutes = (int) ($seconds = (int) ($milliseconds = (int) ($seconds_input * 1000)) / 1000) / 60) / 60;
		return  (int) $hours . ':' . ($minutes % 60) . ':' . ($seconds % 60) . (($milliseconds === 0) ? '' : '.' . rtrim($milliseconds % 1000, '0'));
	}
}
