<h1 align="center">Script for a drm Garry's Mod</h1>
<em><h5 align="center">(Programming Language - Php)</h5></em>

<p align="center">
  <img src="https://img.shields.io/github/stars/Kurama250/Gmod_drm">
  <img src="https://img.shields.io/github/license/Kurama250/Gmod_drm">
  <img src="https://img.shields.io/github/repo-size/Kurama250/Gmod_drm">
  <img src="https://img.shields.io/badge/stability-stable-green">
</p>

# Tutorial to config script !

- 1 : Download script
- 2 : Open (drm.php)

```php
You must modify this line with the ip of your gmod server !

$allowedServerIPs = array('IPV6 or IPV4', 'IPV6 or IPV4');
```

- After

```php
You must put your own code for the request to do the capcha after the first steps !

$validCaptchaCode = 'YOUR_CODE';
```

<h3>/\ Namely, you will have to do in your code as below for your drm link to be good !</h5>

```
https://domain_name.name/api/drm.php?captcha=YOUR_CODE
```

- After

```php
You must put your Glua code in the place provided for this purpose !

        if ($captchaCode === $validCaptchaCode) {
            $gluaCode = "
                // Start code Glua

                // ...

                // End code Glua
            ";
```

- Demo : 

![alt text](https://github.com/Kurama250/Gmod_drm/blob/main/drm.png?raw=true)

<h3 align="center"><strong>Support on Discord :</strong> <a href="https://discord.gg/6aebQGdDxB">Discord Link</a></3>
<h3 align="center">If you like this repository don't hesitate to give it a star ⭐ !</h3>
<h1 align="center">Then it's the end you have modified the script have fun !</h1>
