<?php

class Action{
    public $db,$session, $custom, $view, $helper;

    function __construct(){
        $this->db=new Database;
        $this->session=new Session;
        $this->custom =new Custom;
        $this->view=new View;
        $this->helper=new Helper;

    }

}
