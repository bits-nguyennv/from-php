<?php
session_start();
?>
<?php
if(isset($_SESSION['use']) && $_SESSION['pass']){
  var_dump($_SESSION);
}
?>
