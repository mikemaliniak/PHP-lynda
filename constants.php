<!doctype html>

<html lang="en">
    <head>
    <meta charset="utf-8">

    <title>Basic HTML 5 Tempalte</title>
    <meta name="description" content="Basic HTML 5 Tempalte">
    <meta name="author" content="Michael Maliniak">

    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    </head>

    <body>
        <?php 
            $max_width = 980;

            define("MAX_WIDTH", 980);
            echo MAX_WIDTH;
        ?>
        <hr />
        <?php
            // can't change the value
            echo MAX_WIDTH;
        ?>
    </body>
</html>