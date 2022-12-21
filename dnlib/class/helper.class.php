<?php

class Helper{
    
    public function loadcss($file_name){
        return ASSET_URL.'css/'.$file_name;        
    }

    public function loadjs($file_name){
        return ASSET_URL.'js/'.$file_name;        
    }
    public function loadimage($file_name){
        return ASSET_URL.'image/'.$file_name;        
    }
    public function route($path_url,$function){
        $address_bar_url=$_SERVER['PATH_INFO'] ?? null;

        if(!$address_bar_url && $path_url=='/' ){
            $function(array());
        }

        $is_valid=true;
        $address_bar_url=rtrim($address_bar_url,'/');
        $address_bar_url=ltrim($address_bar_url,'/');

        $abu_data=explode('/',$address_bar_url);
        $pu_data=explode('/',$path_url);
        $data=array();
        
        foreach($pu_data as $index=>$parameter){
            if(!isset($abu_data[$index])) return;
            if($abu_data[$index]==$parameter){

            }elseif(str_contains($parameter,'$')){
                $data[ltrim($parameter,'$')]=$abu_data[$index];
            }else{
                $is_valid=false;
            }
        }

        
        

        if($is_valid) $function($data);
        
    }

}