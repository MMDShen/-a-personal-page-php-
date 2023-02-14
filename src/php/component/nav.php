<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php
function selected(){
    if ($_SERVER["REQUEST_URI"] == "/public/note"){
            $class["note"] = " text-red-400 font-bold underline";
            $class["option"] = " font-bold";
            $class["main"] = " font-bold";
    }
    else if ($_SERVER["REQUEST_URI"] == "/public/option"){
        $class["note"] = " font-bold";
        $class["option"] = " text-red-400 font-bold underline";
        $class["main"] = " font-bold";}
    else if ($_SERVER["REQUEST_URI"] == "/public/main"){
        $class["note"] = " font-bold";
        $class["option"] = " font-bold";
        $class["main"] = " text-red-400 font-bold underline";}
    else {
        $class["note"] = " font-bold";
        $class["option"] = " font-bold";
        $class["main"] = " text-red-400 font-bold underline";}
    return $class;
}
?>
<div class="flex w-full h-16 justify-evenly">
    <a href="/public/note" class="text-3xl <?php echo selected()['note'];  ?>
">
        My Notes
    </a>
    <a href="/public/main" class="text-3xl <?php echo selected()['main'];  ?>
">
        Main Page
    </a>
    <a href="/public/option" class="text-3xl <?php echo selected()['option'];  ?>
">
        Option
    </a>
</div>

</body>
</html>


<?php
?>