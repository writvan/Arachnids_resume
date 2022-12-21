<?php
require('dnlib/load.php');

$action->helper->route('/',function(){
global $action;
$data['title']='resume builder - make and share resume online';
    $action->view->load('header',$data);
    $action->view->load('content');
    $action->view->load('footer');
    //$action->view->load('header',["title"=>"heading test",'heading'=>"this is the new heading"]); //top title of the web page

});
$action->helper->route('signup/$name/$age/$username',function($data){
    global $action;
    $data['title']='signup - resume online';
    
    $action->view->load('header',$data);
});