<?php
class Runner
{
    public function getRunner($runners)
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