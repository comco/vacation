<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <!-- jQuery UI -->
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css">

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

    <!-- Custom css -->
    <link rel="stylesheet" href="assets/main.css">

    <title><?php echo (($this->pageTitle != null)?$this->pageTitle . ' | ':'')?> vacation </title>
</head>
<body>
<div id="wrap">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <span class="navbar-brand">vacation</span>
            </div>
            <!-- Only logged users can view the options. -->
            <?php if (isset($_SESSION['user_id']) && strlen($_SESSION['user_id'])): ?>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php?q=request/form">New request</a></li>
                    <li><a href="index.php?q=information/form">My requests</a></li>
                    <!-- Vertical dividers are not in bootstrap 3.0 - code our own! -->
                    <li class="divider-vertical"></li>
                    <!-- Administrative options -->

                    <?php if ($_SESSION['is_admin']): ?>
                    <li><a href="index.php?q=information/table">Pending requests</a></li>
                    <li><a href="index.php?q=users/manageUsers">Manage users</a></li>
                    <?php endif; ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li class="navbar-text">Hello, <?=$_SESSION['name']?>.</li>
                    <li><a href="index.php?q=users/logout">Logout</a></li>
                </ul>
            </div>

            <?php endif; ?>

        </nav>


        <div id="wrapper">

            <?php echo $content; ?>

        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="footer-in">
            <div class="pull-left">WWW Технологии 2014</div>
            <div class="pull-right">ФМИ 2014</div>
        </div>
    </div>
</footer>
<script>
    $(function() {
        $(".datepicker").datepicker();
    });
</script>
</body>
</html>
<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
