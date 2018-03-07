<?php
namespace classes\Runner;

class Runner
{
    public function getRunner($runners, $idRunner):array
    {
        foreach($runners as $oneRunner)
        {       
            if($oneRunner['id'] == $idRunner)
            {
                return $oneRunner;
            }  
        }
    }
    
    public function showRunners($runners)
    {
        foreach($runners as $oneRunner)
        {      
            foreach($oneRunner as $key => $statsRunner)
            {
                echo "$key: $statsRunner <br>";
            } 
            echo "<br>";
        }
    }
}