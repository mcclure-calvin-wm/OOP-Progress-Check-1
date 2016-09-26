<!DOCTYPE html>
<html lang="en">
<head>
    <title>index 2</title>
    <?php include ("class_lib.php");?>
</head>
<body>
<?php
    $donald = new President(70, "Donald Trump");
    $mike = new Vice_President(57, "Mike Pence");

    echo $donald -> get_candidate($name);


?>
</body>
</html>