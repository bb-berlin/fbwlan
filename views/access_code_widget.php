<?php
if ($_SESSION['acavalible'] == true)
{
?>
  <p class="offer"> 
<?php
   echo $_SESSION['actext'];
?>
</p>
<form class="form" action="<?php echo $codeurl; ?>">
    <input placeholder="Access code" type="text" name="access_code"required="">
    <div class="sign-up">
        <input type="submit" value="Sign in"/>
    </div>
</form>
<?php
}
?>
