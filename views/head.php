<!doctype html>
<html>
    <head>
	<link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
		<?php 
		if (isset($_SESSION['style']))
		{?>
			<link rel="stylesheet" href="<?php echo $my_url.$_SESSION['style']; ?>">
		<?php 
		} 
		if (isset($_SESSION['backgroundimg']))
		{?>
		<style>
			body {
				background: url("<?php echo $_SESSION['backgroundimg'] ?>") 0px 0px no-repeat;
			}
		</style>
		<?php } ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php
		?>">
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
    </head>
    <body>
	<div class="main-content">
            <div class="inner">
