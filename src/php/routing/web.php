<?php
//DRY
function routing()
{
    if(is_file("../src/php/view/".substr($_SERVER['REQUEST_URI'],8).".php"))
        return ltrim($_SERVER['REQUEST_URI'],'/public');

    return "404";
};

    ?>