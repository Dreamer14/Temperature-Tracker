<?php 
class TempTracker{
    private $tempratureHolder = array();
    private $minTemp;
    private $maxTemp;
    private $avgTemp;
    
    public function insert($temprature) {
  
    $this->tempratureHolder[] = $temprature;
    
    $this->maxTemp = max($this->tempratureHolder);
   
    $this->minTemp = min($this->tempratureHolder);
       
    $this->avgTemp = array_sum($this->tempratureHolder)/count($this->tempratureHolder);
    
  }
    //function to return max temp
    
    public function getMax()
{
return $this->maxTemp;
}
    //function to return min temp
    
    public function getMin()
{
return $this->minTemp;
}
    
    //function to return Average temp
    
    public function getAvg()
{
return $this->avgTemp;
}
}

$obj = new TempTracker();
$obj->insert(20);
$obj->insert(30);
$obj->insert(10);
$obj->insert(50);
echo 'Maximum Temprature = '.$obj->getMax().'<br />';
echo 'Minimum Temprature = '.$obj->getMin().'<br />';
echo 'Maximum Temprature = '.$obj->getAvg().'<br />';





?>