<head>
<link rel="stylesheet" href="  ../app/view/assets/css/styles.css">
</head>



<?php

    require_once '../app/controller/Router/Router.php';

    $Router = new Router();
    $Router->handleRequest();
?>