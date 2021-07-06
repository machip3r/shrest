<?php
    date_default_timezone_set('UTC');
    require_once "config.php";

    try {
        $accessToken = $helper->getAccessToken();
    } catch(\Facebook\Exceptions\FacebookResponseException $e) {
        echo "Response Exception: " . $e->getMessage();
        exit();
    } catch(\Facebook\Exceptions\FacebookSDKException $e) {
        echo "SDK Exception: " . $e->getMessage();
        exit();
    }

    if(!$accessToken) {
        header('Location: index.php');
        exit();
    }

    $oAuth2Client = $fb ->getOAuth2Client();
    if(!$accessToken->isLongLived())
        $accessToken = $oAuth2Client->getLongLivedAccessToken();

    $response = $fb->get("/me?fields=id, first_name, last_name, gender, picture.width(500).height(500), email", $accessToken);
    $userData = $response->getGraphNode()->asArray();
    $_SESSION["userData"] = $userData;
    $_SESSION["access_token"] = (string) $accessToken;

    echo "<pre>";
    var_dump($userData);

    //echo "<img src='".$userData['picture']['url']."'>";

    //header('Location: ');
    //exit();
?>