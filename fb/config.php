<?php
    session_start();

    require_once "Facebook/autoload.php";
    $fb = new \Facebook\Facebook([
        'app_id' => '702193056879826',
        'app_secret' => '95059846eb70c55645b900c99742d494',
        'default_graph_version' => 'v3.3',
    ]);

    $helper = $fb->getRedirectLoginHelper();
?>