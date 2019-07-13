<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo  base_url() . "login/auth"; ?>" method="post">
        Username <input type="text" name="username" id="username"> <br/>
        Password <input type="password" name="password" id="password"> <br/>
        <button type="submit">Login</button>
    </form>
</body>
</html>