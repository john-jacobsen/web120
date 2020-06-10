<?php
/*
portal-config.php

used to store all of our web 120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define ('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

switch(THIS_PAGE){
        
    case 'contact.php':
        $title = "John's WEB120 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact John';
        break;
        
    case 'index.php':
        $title = "John's WEB120 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
        break;
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
}

$nav['index.php'] = 'Welcome';
$nav['big/index.php'] = 'Big';
$nav['aia.php'] = 'AIA';
$nav['flowchart.php'] = 'Flowchart';
$nav['fp/index.php'] = 'Final Project';
$nav['contact.php'] = 'Contact Johnny';

/*
here we're creating a function to generate links and keep the highlight on the page */

 <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contact.php">Contact Johnny</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>

function makeLink($nav)
{
    $myReturn = '';
    foreach($nav as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        } 
    }
    
    return $myReturn;
}

?>