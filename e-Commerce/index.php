<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!-- Your Basic Site Informations -->
	<title><?=$this->e($page_title);?></title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="<?=$this->e($page_desc);?>" />
    <meta name="keywords" content="<?=$this->e($page_key);?>" />
    <meta http-equiv="Copyright" content="popojicms" />
    <meta name="author" content="PopojiCMS" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta name="language" content="Indonesia" />
    <meta name="revisit-after" content="7" />
    <meta name="webcrawlers" content="all" />
    <meta name="rating" content="general" />
    <meta name="spiders" content="all" />

	<!-- Social Media Meta -->
	<?php include_once DIR_CON."/component/setting/meta_social.txt";?>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?=$this->asset('/css/bootstrap.min.css')?>" type="text/css" />
    <link rel="stylesheet" href="<?=$this->asset('/css/fa/css/font-awesome.min.css')?>" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?=$this->asset('/css/sansCustom.css')?>">
    <script type="text/javascript" src="<?=$this->asset('/js/angular.js')?>"></script>
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?=BASE_URL.'/'.DIR_INC;?>/images/favicon.png" />

	<!-- Javascript -->
	<!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->
    <script type="text/javascript" src="<?=$this->asset('/js/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?=$this->asset('/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?=$this->asset('/js/sansCustom.js')?>"></script>
	
</head>
<body class="clearfix">
<?=$this->insert('header');?>   
<div id="sidebar-section">
    <?=$this->insert('sidebar');?>
</div>
<a id="back-to-top" href="#" class="btn btn-default back-to-top" role="button" title="Click to top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>	
<?=$this->insert('footer');?>
	<!-- Javascript -->
	
</body>
</html>