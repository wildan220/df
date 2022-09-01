<html>
    <head>
        
    </head>
    <body>
        <?php 
        if (isset($_get["nama"]) AND isset($_GET["telp"])) {
            echo "Halo " . $_GET["nama"] . "!!<br>";
            echo "alamat emailmu adalah " . $_GET["email"] . "!!<br>";
            echo "No telponmu adalah " . $_GET["telp"] . "!!<br>";
        }
        else {
            echo "anda harus mengakses halaman ini dari myform.html";
        }
        ?>
    </body>
</html>