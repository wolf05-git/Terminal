<?php  

 $msg           =$_POST['a1'];
 $msg           = htmlspecialchars(trim(stripslashes($msg)));
 $msg           = str_replace(array_keys($sm), array_values($sm), $msg);
 $Copy          = highlight_string($msg, ENT_QUOTES);
 ?>
 <div id="copy">
 <?php echo $Copy?>
</div>

