 <?php
 session_start();

 session_destroy();

 echo "<script>window.open('../index.html','_SELF')</script>";

 ?>