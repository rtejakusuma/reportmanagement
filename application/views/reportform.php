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

    <div id='header'></div>
    <div id='featurebar'></div>
    <div id='reporttypelist'>
        <ul>
            <?php
                require_once(APPPATH . "libraries/reporttypelist.php");
                $opd = $this->session->tempdata('credential');
                foreach($reporttype[$opd] as $type){
                    echo "<li><a href='" . base_url() . "reportform/f/$type'>" . $type . "</a></li>";
                }
            ?>
        </ul>

    </div>
    <div id='reportform'></div>
        <?php
            if($formname != NULL){
                echo file_get_contents(APPPATH . "libraries/formtemplate/$formname.php");
            }
        ?>
    <br/>
    <a href="<?php echo base_url() . "logout" ?>">Logout</a>
</body>
</html>