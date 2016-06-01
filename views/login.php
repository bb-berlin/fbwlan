<?php echo $head; ?>


<h1><?php echo $_SESSION['data']->titletext; ?></h1>
<?php
  if (isset($_SESSION['logoimg']))
  {?>
  <img class="pure-img" src="<?php echo $_SESSION['logoimg'] ?>"/>

 <?php } 

  if ($_SESSION['data']->fb->avalible)
  {
?>

<p class="offer"> 
    <?php
    echo $_SESSION['data']->fb->text;
    ?>
</p>
<a href="<?php echo $fburl; ?>">
    <input type="button" value="<?php echo $_SESSION['data']->fb->buttontext; ?>" class="facebook"/>
</a>
<?php 
  }
   echo $access_code_widget ?>

<?php
if ($_SESSION['data']->skip->avalible )
{
?>
<p class="offer">
    <?php
    echo $_SESSION['data']->skip->text;
    ?>
</p>
<a href="<?php echo $skipurl; ?>">
    <input type="button" value="<?php echo $_SESSION['data']->skip->buttontext; ?>" class="skip"/>
</a>
<?php

}
?>

<?php echo $foot; ?>


