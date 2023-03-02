<?php
function show($stuff)
{
    echo '<pre>';
        print_r($stuff);
    echo '</pre>';
}


function splitURL()
{
    // to avoid passing an empty url to get route: replace by home
    $URL = $_GET['url'] ?? 'home';
    // seperate parts of given URL
    // (needs to receive string)
    $URL = explode('/', $URL);
    return $URL;
}

function loadController()
{
    // loadController will call splitURL to find URL called and load
    // requested page
    $URL = splitURL();
    // find the file to be loaded
    $fileName = "../app/controllers/" . ucfirst($URL[0]) . ".php";
    if (file_exists($fileName)) {
        //require $fileName;
    } else {
        $fileName = "../app/controllers/" .  "_404.php";
        //require $fileName;
    }
    require $fileName;
}
 loadController();
//show(splitURL());
