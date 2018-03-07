<?php
namespace classes\Route;

class Route 
{
    public function getTime($runner, $road = 2000):float
    {
        $time = 0;
        while($road > $runner['maxSpeed'] * 1000 / 60)
        {
            $road -= $runner['maxSpeed'] * 1000 / 60;
            if($runner['condition'] > 10){
               $runner['condition']--;
               $runner['maxSpeed'] -= $runner['speedDecrise'];             
            }
            $time += 60;
        } 
        
        while($road > $runner['maxSpeed'] * 1000 / 3600)
        {
            $road -= $runner['maxSpeed'] * 1000 / 3600;
            $time++;
        }
        
        while($road > $runner['maxSpeed'] * 1000 / 360000)
        {
            $road -= $runner['maxSpeed'] * 1000 / 360000;
            $time += 0.01;
        }
        
        return $time;
    }
}