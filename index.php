<?php
//if (!isset($_SERVER['PHP_AUTH_USER'])) {
//    header('WWW-Authenticate: Basic realm')
//}

/**
 * @author Vera Mankongvanichkul
 * 06/17/2019
 * Website for West Coast Power-Vac.
 **/

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Required file
require_once('vendor/autoload.php');

//validate form
//require_once'model/formvalidation.php';
//require_once'model/database.php';

//connect to database
//$db = new Database();

//start sessions
session_start();

//Instantiate Fat-Free
$f3 = Base::instance();

$f3->set('states', array('Washington', 'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado',
    'Connecticut', 'Delaware', 'District of Columbia', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois',
    'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan',
    'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey',
    'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania',
    'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia',
    'West Virginia', 'Wisconsin', 'Wyoming'));

//turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//define default route
$f3->route('GET /', function ($f3) {
    $f3->set('page_title', 'West Coast Power-Vac');

    //Display summary
    $view = new Template();
    echo $view->render('views/home.html');
});



//run Fat-Free
$f3->run();
