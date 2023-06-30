<h1 align="center">Script for a drm Garry's Mod</h1>
<em><h5 align="center">(Programming Language - Php)</h5></em>

# Tutorial to config !

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
// Start code Glua
// ...
// End code Glua
```

<h1 align="center">Then it's the end you have started the bot have fun !</h1>
