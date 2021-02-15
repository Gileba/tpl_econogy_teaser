<?php
	defined('_JEXEC') or die('Restricted access');

	/** @var JDocumentHtml $this */
	$app      	= JFactory::getApplication();
	$doc      	= JFactory::getDocument();

	/** Output as HTML5 */
	$this->setHtml5(true);

	$menu 		= $app->getMenu();
	$params		= $app->getTemplate(true)->params;
	$config 	= JFactory::getConfig();
	$pageclass 	= $menu->getActive()->getParams(true)->get('pageclass_sfx');

	// Logo file or site title param
	$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');

/*
*	Mobile device detection
*/
if(!function_exists('mobile_user_agent_switch')){
	function mobile_user_agent_switch()
	{
		$device = '';

		if(stristr($_SERVER['HTTP_USER_AGENT'], 'ipad')) {
			$device = "ipad";
		} elseif(stristr($_SERVER['HTTP_USER_AGENT'], 'iphone') || strstr($_SERVER['HTTP_USER_AGENT'], 'iphone')) {
			$device = "iphone";
		} elseif(stristr($_SERVER['HTTP_USER_AGENT'], 'blackberry')) {
			$device = "blackberry";
		} elseif(stristr($_SERVER['HTTP_USER_AGENT'], 'android')) {
			$device = "android";
		}

		if($device) {
			return "mobile";
		} return false; {
			return false;
		}
	}
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   <head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Tag Manager -->
		<script>
			(function(w,d,s,l,i){
				w[l]=w[l]||[];
				w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
				var f=d.getElementsByTagName(s)[0], j=d.createElement(s), dl=l!='dataLayer'?'&l='+l:'';
				j.async=true;
				j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
				f.parentNode.insertBefore(j,f);
			})
			(window,document,'script','dataLayer','GTM-NLF5NX7');
		</script>
<!-- End Google Tag Manager -->
		<jdoc:include type="head" />
		<link rel="stylesheet" href="https://use.typekit.net/wbb6jqc.css">
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/fontawesome.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/brands.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
	</head>
	<body class="<?php echo $pageclass ? htmlspecialchars($pageclass) : 'default'; ?> <?php echo mobile_user_agent_switch(); ?>">
<!-- Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLF5NX7" height="0" width="0" style="display:none; visibility:hidden;">
			</iframe>
		</noscript>
<!-- End Google Tag Manager (noscript) -->
		<div class="container">
			<div class="header">
				<jdoc:include type="modules" name="header" />
			</div>
			<div class="messages">
				<jdoc:include type="message" />
			</div>
			<div class="main">
				<jdoc:include type="modules" name="main" />
			</div>
			<div class="verticaal">
				<jdoc:include type="modules" name="verticaal" />
			</div>
			<div class="producten">
				<jdoc:include type="modules" name="producten" />
			</div>
			<div class="statistieken">
				<jdoc:include type="modules" name="statistieken" />
			</div>
			<div class="forms">
				<jdoc:include type="modules" name="forms" />
			</div>
			<div class="footer">
				<jdoc:include type="modules" name="footer" />
			</div>
		</div>
		<!-- Start of HubSpot Embed Code -->
		<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/9250135.js"></script>
		<!-- End of HubSpot Embed Code -->
	</body>
</html>
