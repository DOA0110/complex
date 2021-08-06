class Complex
{
    public  $d,$im;
    public $errors = array();
    
    function  __construct($d,$im)
    {
        if(!$this->checkPartNumber($d) || !$this->checkPartNumber($im))
        {
            $this->showErrors();
        }
        
        $this->d = (float)$d;
        $this->im = (float)$im;
    }
    
    
    public function show()
    {
        echo  '{'.$this->d.", ".$this->im."i}";
    }
    
    public function plus($d, $im)
    {
       
        if(!$this->checkPartNumber($d) || !$this->checkPartNumber($im))
        {
            $this->showErrors();
        }
        else
        {
            return  "{".($this->d+floatVal($d)).", ".($this->im+floatVal($im))."i}";
        }
         
        
    }
   
    public function minus($d, $im)
    {
        
        if(!$this->checkPartNumber($d) || !$this->checkPartNumber($im))
        {
            $this->showErrors();
        }
        else
        {
          return  "{".($this->d - floatVal($d)).", ".($this->im - floatVal($im))."i}";
        }
        
        
    }
   
    public function multi($d, $im)
    {
        
        if(!$this->checkPartNumber($d) || !$this->checkPartNumber($im))
        {
            $this->showErrors();
        }
        else
        {
            return  "{".(($this->d*floatVal($d))-($this->im*floatVal($im))).", ".(($this->d*floatVal($im)+$this->im*floatVal($d)))."i}";
        }
    }
    
    function div($d, $im)
    {
        if(!$this->checkPartNumber($d) || !$this->checkPartNumber($im))
        {
            $this->showErrors();
        }
        else
        {
            return  "{".((($this->d*floatVal($d))+($this->im*floatVal($im)))/($d*$d + $im*$im)).", ".(($this->im*floatVal($d) - ($this->d*floatVal($im)))/($d*$d + $im*$im))."i}";
        }
    }
    
    private function checkPartNumber($a)
    {
        
        if(is_numeric($a))
        {
            return true;
        }
        else
        {
            $this->errors[] =  "Не корректно задан параметр комплексного числа $a";
            return false;
        }
    }
    
    public function showErrors()
    {
        echo implode($this->errors,"<br />");
        return false;
    }
}
