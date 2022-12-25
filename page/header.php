
 <!--?php...-->
 <!--echo "<pre>";...-->
 <!--print_r($data);...-->

 <!--echo $username;...-->  
 <!--?>...-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <?php
    if(@$type==1){ 
        ?> 
	    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />
        <!-- <link rel="stylesheet" href="<?=$action->helper->loadcss('builder_content_1.css')?>"> -->
        <?php
    }
    ?>
    <link rel="stylesheet" href="<?=$action->helper->loadcss('main.css')?>">
    <link rel="icon" href="<?=$action->helper->loadimage('logo.png')?>">
    <title><?=@$title?></title>      <!--@ is used so that we get the page even without passing correct value...-->        
</head>
<body>
