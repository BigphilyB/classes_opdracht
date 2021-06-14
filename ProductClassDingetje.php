<?php

class Microphonestand
{
    public $AttachedMicrophone = false;
    public $Brand = "";
    public $Material = "";
    public $Attachments = "";
    public $PostionY = 0;
    public $PostionX = 0;
    public $PostionZ = 0;


    public $CurrentYposition = 10;
    public $CurrentXposition = 15;
    public $CurrentZposition = 20;
    
    public $micropohne = true;

    public $position = array ($PostionY, $PostionX, $PostionZ) ;


function GetPositionY(){

    $this->PostionY = $this->PostionY + $this->CurrentYposition;
    
 }

    function GetPositionX(){
    
        $this->PostionX = $this->PostionX + $this->CurrentXposition;
        
        }

        function GetPositionZ(){
    
            $this->PostionZ = $this->PostionZ + $this->CurrentZposition;
            
            }




function CheckMicrphone(){

    if($this->microphone == true){
        $this->AttachedMicrohpone = true;
    } else{
        $this->AttachedMicrohpone = false;
    }

}



}



echo $AttachedMicrohpone,$Brand,$Material,$Attachments,$Postion;

?>