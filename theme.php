<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="<?= $Wcms->page('description') ?>">
        <meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
    	<meta http-equiv="imagetoolbar" content="no"/>
    	<meta name="MSSmartTagsPreventParsing" content="false"/>

        <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
    	<!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Admin CSS -->
        <?= $Wcms->css() ?>

        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">
    </head>

    <body>
        <?= $Wcms->settings() ?>
        <?= $Wcms->alerts() ?>

        <div class="navbar navbar-default" role="navigation">
    		<div class="container">
    			<div class="navbar-header">
    				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    				</button>
    				<a class="navbar-brand" href="<?= $Wcms->url() ?>"><?= $Wcms->get('config', 'siteTitle') ?></a>
    			</div>
    			<div class="collapse navbar-collapse" id="navMobile">
    				<ul class="nav navbar-nav">
                        <?= $Wcms->menu() ?>

    				</ul>
    			</div><!--/.nav-collapse -->
    		</div>
    	</div>

    	<div class="container">
    		<div class="starter-template">
    			<div class="row" style="padding-top: 10px;">
    				<div class="col-xs-12 col-sm-8">
    					<div class="visible-xs spacer20"></div>
    					<div>
                            <?= $Wcms->page('content') ?>

    					</div>
    				</div><!-- /.col-lg-8 -->
    				<div class="col-xs-12 col-sm-4">
    					<div class="visible-xs spacer20"></div>
    					<div class="subsideBackground padding20 rounded5">
                            <?= $Wcms->block('subside') ?>

    					</div>
    				</div><!-- /.col-lg-4 -->
    			</div><!-- /.row -->
    		</div>
    	</div><!-- /.container -->

    	<footer class="container-fluid pull-right">
    		<div class="text-right padding20">
                <?= $Wcms->footer() ?>

    		</div>
    	</footer>

    	<!-- Bootstrap core JavaScript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        	<?php
		if (!$Wcms->loggedIn) {
			echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>';
		}
	?>

	<?= $Wcms->js() ?>
    </body>
</html>
