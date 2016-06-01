<?php
if ($_SESSION['data']->ac->avalible == true)
{
?>
  <p class="offer"> 
<?php
   //echo $_SESSION['data']->ac->text;
?>
</p>
<form class="form" action="<?php echo $codeurl; ?>">
    <input placeholder="Access code" type="text" name="access_code"required="">
    <div class="sign-up">
        <input type="submit" value="<?php echo $_SESSION['data']->ac->buttontext ?>"/>
    </div>
</form>
<?php
}
?>
