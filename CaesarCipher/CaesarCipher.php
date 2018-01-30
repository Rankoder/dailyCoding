<?php
class CaesarCipher { 
    public $ile;
    private $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    
    public function __construct($lenght = 5)
    {
        $this->ile = $lenght;
    }
    
    function encode($str)
    {  
        return strtr(strtoupper($str), $this->alphabet, $this->createAlphabet());
    }
    
    function decode($str)
    {        
       return strtr(strtoupper($str), $this->createAlphabet(), $this->alphabet);
    }
    
    function createAlphabet()
    {
        return substr($this->alphabet, $this->ile, strlen($this->alphabet) - $this->ile).substr($this->alphabet, 0, $this->ile);
    }    
}
