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
	<title><?php echo (($this->pageTitle != null)?$this->pageTitle . ' | ':'')?> My site </title>
</head>
<body>
        
<!-- 
    <div class="toolbar">
            <div id="toolbar">
                <?php if (isset($_SESSION['user']) && strlen($_SESSION['user'])):?>
                <?php echo '<h1><a href="index.php?q=users/logout">Hello, ' . $_SESSION['user']. '!  Logout ' . $_SESSION['user_id'] . '</a></h1>';?>
                <?php else :?>
                <h1><a href="index.php?q=users/register">Registration</a></h1>
                <h1><a href="index.php?q=users/login">Login</a></h1>
                <?php endif;?>
                <div class="clearfix"></div>
            </div>
    </div>
 -->
        
	<div id="wrapper">
		
		<?php echo $content; ?>
		
		<footer>
			<div id="left_footer">WWW Технологии 2013</div>
			<div id="right_footer">ФМИ 2013</div>
		</footer>

	</div>
</body>
</html>
<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
