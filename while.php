<!doctype html>

<html lang="en">
    <head>
    <meta charset="utf-8">

    <title>switch</title>
    <meta name="description" content="Basic HTML 5 Tempalte">
    <meta name="author" content="Michael Maliniak">

    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    </head>

    <body>

        <?php
            $count = 0;
            while ($count <= 10) {
                echo "<hr /> {$count}";
                $count ++;
            }
        ?>
    </body>
</html>