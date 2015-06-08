<?php   
session_start();
session_unset();
session_destroy(); //destroy the session
header("location:http://localhost/Projectx/Finalised_work/index.html"); //to redirect back to "index.php" after logging out
exit();
?>