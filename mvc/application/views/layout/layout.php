<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">

        <!-- START Twitter Bootstrap -->

            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

            <!-- Optional theme -->
            <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

            <!-- Latest compiled and minified JavaScript -->
            <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

        <!-- END Twitter Bootstrap -->
        
        <?php if (isset($params['css']) && is_array($params['css'])) :?>
	<?php foreach($params['css'] as $css) : ?>
		<link href="<?=$css ?>" rel="stylesheet">	
	<?php endforeach; ?>
	<?php else :?>
	<link href="assets/main.css" rel="stylesheet">
	<?php endif; ?>
	<title><?php echo (($this->pageTitle != null)?$this->pageTitle . ' | ':'')?> Vacations </title>
</head>
<body>
<div id="wrap">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">vacation</a>
            </div>

<?php if (isset($_SESSION['user_id']) && strlen($_SESSION['user_id'])):?>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php?q=request/form">New request</a></li>
                    <li><a href="#">My requests</a></li>
                    <!-- Vertical dividers are not in bootstrap 3.0 - code our own! -->
                    <li class="divider-vertical"></li>
                    <!-- Administrative options -->
                    <li><a href="#">Process requests</a></li>
                    <li><a href="index.php?q=users/manageUsers">Manage users</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li class="navbar-text">Hello, <?=$_SESSION['name']?>.</li>
                    <li><a href="index.php?q=users/logout">Logout</a></li>
                </ul>
            </div>

<?php endif;?>
        </nav>


	<div id="wrapper">
		
            <?php echo $content; ?>
		
        </div>

    </div>

</div> <!-- wrap -->
<!-- Make footer stay down! -->
<footer>
    <div class="container">
        <div class="footer-in">
            <div class="pull-left">WWW Технологии 2014</div>
            <div class="pull-right">ФМИ 2014</div>
        </div>
    </div>
</footer>
</body>
</html>
<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
