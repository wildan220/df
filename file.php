<html>
    <head>

    </head>
    <body>
        <?php 
        $myfile = "testfile.txt";
        $fh = fopen($myfile, 'r');
        $thedata = fread($fh, 5);
        fclose($fh);
        echo $thedata;
        ?>
    </body>
</html>