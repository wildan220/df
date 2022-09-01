<html>
    <head>
        <title>PHP Form</title>
    </head>
    <body>
        <?php 
        if (isset($_get["name"]) AND isset($_GET["email"]) AND isset($_GET["phone"])) {
            $name = $_GET["name"];
            $email = $_GET["email"];
            $phone = $_GET["phone"];
            $val="&name=$name&email=$email&phone=$phone";
        }
        else {
            header("Location:form.php?error=variable_not_set");
        }
        if (empty($name)) {
            header("Location:form.php?error=name_empty".$val);
        }
        elseif (empty($email)) {
            header("Location:form.php?error=email_empty".$val);
        }
        else {
            echo "<h2> Name: $name <br> Email: $email <br> Phone: $phone </h2>";
        }
        ?>
    </body>
</html>