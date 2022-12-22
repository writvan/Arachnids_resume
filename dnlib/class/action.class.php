<?php

class Action{
    public $db,$session, $custom, $view, $helper;
    function onlyForAuthUser(){
        if(!$this->session->get('Auth')) $this->helper->redirect('login');
    }
    function onlyForUnAuthUser(){
        if($this->session->get('Auth')) $this->helper->redirect('home');
    }
    function __construct(){
        $this->db=new Database;
        $this->session=new Session;
        $this->custom =new Custom;
        $this->view=new View;
        $this->helper=new Helper;

    }

}
