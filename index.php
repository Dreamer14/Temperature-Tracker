<?php 
class TempTracker{
    private $tempratureHolder = array();
    private $LowestTemp = null;
    private $HighestTemp = null;
    private $avgTemp = null;
    private $sum = 0;
    private $numberOfvalues = 0;
    
    public function insert($temprature) {
    
        //for Highest temprature
        
        if ($this->HighestTemp == null || $temprature > $this->HighestTemp)
        {
            $this->HighestTemp = $temprature;
        }
            
        //for Lowest temprature
        if ($this->LowestTemp == null || $temprature < $this->LowestTemp)
        {
            $this->LowestTemp = $temprature;
        }
        
        //for Average temprature
        
        $this->numberOfvalues++;
        $this->sum += $temprature;
    	$this->avgTemp = $this->sum / $this->numberOfvalues;
    }
  
    //function to return max temp
    
    public function getMax()
{
return $this->HighestTemp;
}
    //function to return min temp
    
    public function getMin()
{
return $this->LowestTemp;
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
echo 'Highest Temprature = '.$obj->getMax().'<br />';
echo 'Lowest Temprature = '.$obj->getMin().'<br />';
echo 'Average Temprature = '.$obj->getAvg().'<br />';





?>