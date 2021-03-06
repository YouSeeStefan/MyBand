<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';

include 'includes/funcs.php';

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Personal Trainer');

// Display template: output html
$templateParser->display('head.tpl');

// Get newsarticles from database


$action = isset($_GET['action'])?$_GET['action']:'home';

switch($action) {
    case 'home':
            $page_nr = isset($_GET['page_number'])?$_GET['page_number']:1;

            include('model/select_newsarticles.php');
            include('model/get_nr_newsarticles.php');
            $templateParser->assign('total_number_articles', $total_number_articles);
            $templateParser->assign('result', $result);
            $templateParser->display('newsarticles.tpl');
            break;
        
    case 'about':
        
        include('model/select_about.php');
        $templateParser->assign('aboutContent', $aboutContent);
        $templateParser->display('about.tpl');
        break;
        
    case 'schedule':
        
        include('model/select_schedule.php');
        $templateParser->assign('scheduleContent', $scheduleContent);
        $templateParser->display('schedule.tpl');
        break;
        
    case 'contact':
        
        $templateParser->display('contact.tpl');
        break;

}

$templateParser->display('footer.tpl');
