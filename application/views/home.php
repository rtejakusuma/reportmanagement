<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <?php echo base_url() ?> <br/>

    <div id='header'></div>
    <div id='featurebar'>
        <a href="<?php echo base_url() . "reportform"  ?>"><button>Buat Laporan</button></a>
    </div>
    <div id='reportcontainer'></div>

    <br/>
    <a href="<?php echo base_url() . "logout" ?>">Logout</a>
</body>
</html>