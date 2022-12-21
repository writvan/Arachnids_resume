<?php

class View{

    public function load($page, $data=array()){
        global $action;
        extract($data,EXTR_SKIP);//array to variable

        include("page/$page.php");
    }

}