<?php
class CaesarCipher { 
    public $shift;
    private $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    
    public function __construct($lenght ) {
        $this->shift = $lenght;
    }
    
    function encode($str) {  
        return strtr(strtoupper($str), $this->alphabet, $this->createAlphabet());
    }
    
    function decode($str) {        
       return strtr(strtoupper($str), $this->createAlphabet(), $this->alphabet);
    }
    
    function createAlphabet() {
        return substr($this->alphabet, $this->shift, strlen($this->alphabet) - $this->shift).substr($this->alphabet, 0, $this->shift);
    }    
}