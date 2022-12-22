<?php
require('dnlib/load.php');

$action->helper->route('/',function(){
global $action;
$data['title']='resume layer - make and share resume online';
    $action->view->load('header',$data);
    $action->view->load('content');
    $action->view->load('footer');
    //$action->view->load('header',["title"=>"heading test",'heading'=>"this is the new heading"]); //top title of the web page

});

//for logout
$action->helper->route('action/logout',function(){
    global $action;
    $action->session->delete('Auth'); 
    $action->session->set('success','logged out!');
    $action->helper->redirect('login');
    });

//for home 
$action->helper->route('home',function(){
    global $action;
    $action->onlyForAuthUser();
    $data['title']='Welcome to home';
        $action->view->load('header',$data);
        $action->view->load('content');
        $action->view->load('footer');
        //$action->view->load('header',["title"=>"heading test",'heading'=>"this is the new heading"]); //top title of the web page
    
    });

//for login
$action->helper->route('login',function(){
    global $action;
    $action->onlyForUnAuthUser();
    $data['title']='login-resume layer';
        $action->view->load('header',$data);
        echo "<style> 
        html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}
        </style>";
        $action->view->load('login_content');
        $action->view->load('footer');
    }); 
$action->helper->route('action/login',function(){
        global $action;
        $error=$action->helper->isAnyEmpty($_POST);
        if($error){
            $action->session->set('error',"$error is empty!");
        }else{
            $email=$action->db->clean($_POST['email_id']);
            $password=$action->db->clean($_POST['password']);
            $user=$action->db->read('users','id,email_id',"WHERE email_id='$email' AND password='$password'");
            if(count($user)>0){
                $action->session->set('Auth',['status'=>true,'data'=>$user[0]]);
                $action->session->set('success','logged in');
                $action->helper->redirect('home');

            }else{
                $action->session->set('error',"incorrect email/password");
                $action->helper->redirect('login');
            }


        }

        }); 



//for sign up 
$action->helper->route('signup',function(){
    global $action;
    $action->onlyForUnAuthUser();
    $data['title']='signup-resume layer';
        $action->view->load('header',$data);
        echo "<style> 
        html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}
        </style>";
        $action->view->load('signup_content');
        $action->view->load('footer');
    }); 
//for signup action
$action->helper->route('action/signup',function(){
    global $action;
    $error=$action->helper->isAnyEmpty($_POST);
    if($error){
        $action->session->set('error',"$error is empty!");
        $action->helper->redirect('signup');
    }else{
        $signup_data[0]=$action->db->clean($_POST['full_name']);
        $signup_data[1]=$action->db->clean($_POST['email_id']);
        $signup_data[2]=$action->db->clean($_POST['password']);
        $user=$action->db->read('users','email_id',"WHERE email_id='$signup_data[1]'");
        if(count($user)>0){
            $action->session->set('error',$signup_data[1]." is already registered");
            $action->helper->redirect('signup');
        }else{
            $action->db->insert('users','full_name,email_id,password',$signup_data);
            $action->session->set('success','account created');
            $action->helper->redirect('login');
        }
    }
    }); 



//$action->helper->route('signup/$name/$age/$username',function($data){
 //   global $action;
//    $data['title']='signup - resume online';
 //   
 //   $action->view->load('header',$data);
//});


if(!helper::$isPageIsAvailable){
    echo "page not found";
}