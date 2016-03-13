<?php echo $head; ?>


<h1><?php echo $_SESSION['titletext']; ?></h1>
<?php
  if (isset($_SESSION['logoimg']))
  {?>
  <img class="pure-img" src="<?php echo $_SESSION['logoimg'] ?>"/>

 <?php } 

  if ($_SESSION['fbavalible'])
  {
?>

<p class="offer"> 
    <?php
    echo $_SESSION['fbtext'];
    ?>
</p>
<a href="<?php echo $fburl; ?>">
    <input type="button" value="<?php echo _('Connect to Facebook'); ?>" class="facebook"/>
</a>
<?php 
  }
   echo $access_code_widget ?>

<?php
if ($_SESSION['skipavalible'] )
{
?>
<p class="offer">
    <?php
    echo $_SESSION['skiptext'];
    ?>
</p>
<a href="<?php echo $skipurl; ?>">
    <input type="button" value="<?php echo $_SESSION['skipbuttontext']; ?>" class="skip"/>
</a>
<?php

}
?>

<?php echo $foot; ?>


