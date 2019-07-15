<html>
<title>Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body,
    h1 {
        font-family: "Raleway", sans-serif
    }

    body,
    html {
        height: 100%
    }

    .bgimg {
        background-image: url('http://gotravelaz.com/wp-content/uploads/images/Monteverde_19798.jpg');
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }
</style>

<body>

    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
        <div class="w3-display-middle">
            <h1 class="w3-jumbo w3-animate-top"><?= $this->session->userdata('nama'); ?></h1>
            <hr class="w3-border-grey" style="margin:auto;width:50%">
        </div>
    </div>

</body>

</html>