<?php echo $head; ?>


<h1><?php echo $_SESSION['titletext']; ?></h1>
<?php
  if (isset($_SESSION['logoimg']))
  {?>
  <img class="pure-img" src="<?php echo $_SESSION['logoimg'] ?>"/>

 <?php } 

  if ($_SESSION['fb']->avalible)
  {
?>

<p class="offer"> 
    <?php
    echo $_SESSION['fb']->text;
    ?>
</p>
<a href="<?php echo $fburl; ?>">
    <input type="button" value="<?php echo $_SESSION['fb']->buttontext; ?>" class="facebook"/>
</a>
<?php 
  }
   echo $access_code_widget ?>

<?php
if ($_SESSION['skip']->avalible )
{
?>
<p class="offer">
    <?php
    echo $_SESSION['skip']->text;
    ?>
</p>
<a href="<?php echo $skipurl; ?>">
    <input type="button" value="<?php echo $_SESSION['skip']->buttontext; ?>" class="skip"/>
</a>
<?php

}
?>

<?php echo $foot; ?>


