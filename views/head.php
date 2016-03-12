<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo $my_url; ?>/static/pure-min.css">
        <link rel="stylesheet" href="<?php echo $my_url; ?>/static/grids-responsive-min.css">
        <link rel="stylesheet" href="<?php echo $my_url; ?>/static/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $my_url; ?>/static/my.css">
		<link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
		<?php 
		if (isset($_SESSION['style']))
		{?>
			<link rel="stylesheet" href="<?php //echo $my_url.$_SESSION['style']; ?>">
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
		//echo $my_url.$_SESSION['style']; 
		?>">
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
    </head>
    <body>
    <div class="pure-g centered-row header">
        <!-- add .l-box to left-align image with next row -->
        <div class="pure-u-1">
            <h1><?php echo $title; ?></h1>
            <!-- .pure-img makes images responsive -->
			<?php
			if (isset($_SESSION['backgroundimg']))
			{?>
			<img class="pure-img" src="<?php echo $_SESSION['logoimg'] ?>"/>
			<?php } ?>
            
        </div>
    </div>
