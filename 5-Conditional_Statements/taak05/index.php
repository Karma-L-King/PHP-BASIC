<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $score = 19;

    switch($score) {
        
        case 19:
        echo "topper!";
        break;
        case 10:
        echo "Wow wat een fantastische score!";
        break;
        case 9:
        echo "Wow bijna alle punten nog 1 te gaan!";
        break;
        case 8:
        echo "Goed bezig, bijna alle punten!";
        break;
        case 7:
        echo "Ga zo door!";
        break;
        default:
        echo "Nog even oefenen dan haal je vast alle punten!";
    }
?>
</body>
</html>
