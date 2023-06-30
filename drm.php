<?php
// Creator : Kurama
// Github : https://github.com/Kurama250

if (strpos($_SERVER['HTTP_USER_AGENT'], 'Valve/Steam HTTP Client 1.0 (4000)') !== false) {
    $serverIP = $_SERVER['REMOTE_ADDR'];
    $allowedServerIPs = array('IPV6 or IPV4', 'IPV6 or IPV4');

    if (in_array($serverIP, $allowedServerIPs)) {
        $captchaCode = $_GET['captcha'];
        $validCaptchaCode = 'YOUR_CODE';

        // https://domain_name.name/api/drm.php?captcha=YOUR_CODE

        if ($captchaCode === $validCaptchaCode) {
            // Start code Glua
            // ...
            // End code Glua
            echo "Glua code sent !";
        } else {
            echo "Captcha code not valid !";
        }
    } else {
        echo "IP Address not allowed !";
    }
} else {
    echo "UserAgent not good.";
}
?>