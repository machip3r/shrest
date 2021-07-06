<?php
    session_start();

    require_once "Facebook/autoload.php";
    $fb = new \Facebook\Facebook([
        'app_id' => 'gDrive',
        'app_secret' => 'gDrive',
        'default_graph_version' => 'v3.3',
    ]);

    $helper = $fb->getRedirectLoginHelper();
?>
