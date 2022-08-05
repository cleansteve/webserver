<?php

$maintenance_mode = true;
$maintenance_url = "/src/maintenance.php";

// a nice enhancement would be a simple login that checks for admin + password or privileged user + password. What if the person is authorized?
$is_privileged = false;

if ($maintenance_mode && !$is_privileged) {
    if ($_SERVER['PHP_SELF'] !== $maintenance_url) {
        header('Location: ' . $maintenance_url);
        // in the event page cannot redirect
        die('Under maintenance, please come back later.');
        // Make sure that code below does not get executed when we redirect. 
        exit;
    }
} else if ($_SERVER['PHP_SELF'] == $maintenance_url) {
    header('Location: ' . '../index.php');
    // in the event page cannot redirect
    die('Something went wrong, try reloading the page.');
    // Make sure that code below does not get executed when we redirect. 
    exit;
}

?>