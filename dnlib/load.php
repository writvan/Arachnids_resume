<?php
require('config.php');
require('class/database.class.php');
require('class/custom.class.php');
require('class/helper.class.php');
require('class/session.class.php');
require('class/view.class.php');
require('class/action.class.php');

$action = new Action;
echo "<pre>";
print_r($action->db->update("demo1","name,email",["sonu1","sasa@gmail.com"]));