<?php
//var_dump($_SERVER);
function routing()
{
    if($_SERVER['REQUEST_URI'] == '/public/note')
        return 'note';
    if($_SERVER['REQUEST_URI'] == '/public/main')
        return 'main';
    if($_SERVER['REQUEST_URI'] == '/public/option')
        return 'option';
    return "main";
};

    ?>