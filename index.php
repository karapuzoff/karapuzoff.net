<? include("fn.inc.php"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>@karapuzoff</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-social.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href="css/styles.css" rel="stylesheet">
</head>

<body>
<section class="container" id="section5">
	<h1 class="text-center">Ivan Karapuzoff</h1>
	<div class="text-center">
		<img class="avatar img-thumbnail img-circle" src="/img/avatar_01.jpg" />
	</div>
	
	<div class="row">
		<!-- twitter -->
		<div class="col-sm-1 col-sm-offset-2 col-xs-4 text-center">
			<a class="btn btn-social-icon btn-lg btn-twitter" href="http://twitter.com/karapuzoff" target="_blank">
				<i class="fa fa-twitter fa-4x"></i>
			</a>
		</div>
		<!-- facebook -->	
		<div class="col-sm-1 col-xs-4 text-center">
			<a class="btn btn-social-icon btn-lg btn-facebook" href="https://www.facebook.com/karapuzoff" target="_blank">
				<i class="fa fa-facebook fa-4x"></i>
			</a>
		</div>
		<!-- dropbox -->
		<div class="col-sm-1 col-xs-4 text-center">
			<a class="btn btn-social-icon btn-lg btn-dropbox" disabled>
				<i class="fa fa-dropbox fa-4x"></i>
			</a>
		</div>
		<!-- instagram -->
		<div class="col-sm-1 col-xs-4 text-center">
			<a class="btn btn-social-icon btn-lg btn-instagram" href="http://instagram.com/karapuzoff" target="_blank">
				<i class="fa fa-instagram fa-4x"></i>
			</a>
		</div>
		<!-- vk -->
		<div class="col-sm-1 col-xs-4 text-center">
			<a class="btn btn-social-icon btn-lg btn-vk" href="http://vk.com/karapuz0ff" target="_blank">
				<i class="fa fa-vk fa-4x"></i>
			</a>
		</div>
		<!-- flickr -->
		<div class="col-sm-1 col-xs-4 text-center">
			<a class="btn btn-social-icon btn-lg btn-flickr" disabled>
				<i class="fa fa-flickr fa-4x"></i>
			</a>
		</div>
		<!-- github -->
		<div class="col-sm-1 col-xs-4 text-center">
			<a class="btn btn-social-icon btn-lg btn-github" disabled>
				<i class="fa fa-github fa-4x"></i>
			</a>
		</div>
		<!-- steam -->
		<div class="col-sm-1 col-xs-4 text-center">
			<a class="btn btn-social-icon btn-lg btn-steam" href="http://steamcommunity.com/id/karapuzoff/" target="_blank">
				<i class="fa fa-steam fa-4x"></i>
			</a>
		</div>
	</div><!--/row-->
	
	<div class="footer">
		<div class="col-md-12 text-center">
			karapuzoff &copy; <?=date("Y")?> &bull; v<?=gitversion()?>
		</div>
	</div>
	
</section>


<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>