<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
	<?php if (isset($params['css']) && is_array($params['css'])) :?>
	<?php foreach($params['css'] as $css) : ?>
		<link href="<?=$css ?>" rel="stylesheet">	
	<?php endforeach; ?>
	<?php else :?>
	<link href="assets/main.css" rel="stylesheet">
	<?php endif; ?>
	<title><?php echo (($this->pageTitle != null)?$this->pageTitle . ' | ':'')?> Vacation Request </title>
</head>
<body>
        
    <?php if (isset($_SESSION['user_id']) && strlen($_SESSION['user_id'])):?>
    	<div class="toolbar">
            <div id="toolbar">
                <h1>
                    Hello, <?=$_SESSION['name']?>.
                    <a href="index.php?q=users/logout">Logout</a>
                </h1>
                <!--
                <?php echo '<h1><a href="index.php?q=users/logout">Hello, ' . $_SESSION['name']. '!  Logout ' . '</a></h1>';?>
                -->
                <div class="clearfix"></div>
            </div>
   		</div>
	<?php endif;?>
        
	<div id="wrapper">
		
		<header>
			<h1 class="logo"><a href="index.php"> Vacation Request </a></h1>
		</header>
		
		<?php echo $content; ?>
		
		<footer>
			<div id="left_footer">WWW Технологии 2014</div>
			<div id="right_footer">ФМИ 2014</div>
		</footer>

	</div>
</body>
</html>
<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
