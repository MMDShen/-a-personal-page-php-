<?php
require_once "../src/php/routing/web.php";
?>
<!doctype html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<?php
//navbar
require_once "../src/php/component/nav.php";
//functions
require_once "../src/php/main function/".routing().".php";
//views
require_once "../src/php/view/".routing().".php";
?>
</body>
</html>

