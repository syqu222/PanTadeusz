<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pan Tadeusz</title>
</head>
<body>
    <h1>
        Master Thaddeus, or the Last Foray in Lithuania: A Nobility's Tale of the Years 1811–1812, in Twelve Books of Verse
    </h1>
    <h2>Table of contents</h2>
    <div>
        <ul>
            <?php
               for ($b=1; $b <= 12 ; $b++) { 
                   echo '<li><a href="./?book=k'.$b.'">Book'.$b.'</a></li>';
                }
          ?>
        </ul>
    </div>
    <div>
        <?php
            $b = $_GET['book'];
            include_once $b.".html";
        ?>
    </div>
</body>
</html>