<html>
    <head>
        <title>FROM</title>
    </head>
    <body>
        <form action="index.php" method="post">
            Name:<br>
            <input type="text" name ="name">
            <br>
            Password:<br>
            <input type="text" name ="password" >
            <br><br>
            <input type="submit" value ="Submit">
        </form>
    </body>  
</html>
<?php
session_start();
if(isset($_SESSION['use']) && $_SESSION['pass']){
    var_dump($_SESSION);
}
die();
?>


