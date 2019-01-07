<!doctype html>
<html lang="en-US">
  <head>
    <script>
      window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
      ga('create', 'UA-7430979-7', 'auto');
      ga('set', 'anonymizeIp', true);

      ga('require', 'cleanUrlTracker');
      ga('require', 'impressionTracker');
      ga('require', 'maxScrollTracker');
      ga('require', 'mediaQueryTracker');
      ga('require', 'outboundLinkTracker');
      ga('require', 'pageVisibilityTracker');

      ga('send', 'pageview');
    </script>
    <script async src="https://www.google-analytics.com/analytics.js"></script>
    <script async src="autotrack.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="https://senky.github.io/pushnotifications/">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://senky.github.io/pushnotifications/style.css" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">

    <meta name="description" content="phpBB Browser & Mobile Notifications Extension sends notifications from your board to the user's PC or smartphone even if not viewing your board.">
    <title>phpBB Browser & Mobile Notifications Extension</title>
  </head>

  <body>

  <!-- N A V B A R -->
  <nav class="navbar navbar-default navbar-expand-lg fixed-top custom-navbar">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="icon ion-md-menu"></span>
		</button>
		<span class="nav-logo-mobile"><span class="blue">phpBB</span> Browser & Mobile <b>Notifications</b></span>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
		  <div class="container">
			<span class="nav-logo-desktop"><span class="blue">phpBB</span> Browser & Mobile <b>Notifications</b></span>
			<ul class="navbar-nav ml-auto nav-right" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
			  <li class="nav-item nav-custom-link">
				<a class="nav-link" href="https://senky.github.io/pushnotifications/" title="Go to homepage">Home <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
			  </li>
			  <li class="nav-item nav-custom-link">
				<a class="nav-link" href="https://senky.github.io/pushnotifications/#features" title="See highligtht features of the extension">Features <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
			  </li>
			  <li class="nav-item nav-custom-link">
				<a class="nav-link" href="https://senky.github.io/pushnotifications/#demo">Demo <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
			  </li>
			  <li class="nav-item nav-custom-link">
				<a class="nav-link" href="https://senky.github.io/pushnotifications/#pricing" title="See pricing options">Pricing <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
			  </li>
			  <li class="nav-item nav-custom-link btn btn-demo-small">
				<a class="nav-link" href="https://senky.github.io/pushnotifications/#pricing" title="Buy Browser and Mobile Extension now">Buy now <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
			  </li>
			</ul>
		  </div>
		</div>
	  </nav>
	  <!-- E N D  N A V B A R -->

  
  <!-- P R I C I N G -->
  <section id="success">
	<div class="container">
		<div class="title-block">
<?php

	$is_phpbb = false;
	if (file_exists('./includes/constants.php'))
	{
		@define('IN_PHPBB', true);
		include('./includes/constants.php');
		if (defined('PHPBB_VERSION'))
		{
			$is_phpbb = true;
		}
	}

	if (!$is_phpbb){
?>
		<h2>Hups!</h2>
		<p>
			This isn't a phpBB installation. Are you sure you uploaded the file to the right folder?
		</p>
<?php
	} else {
		$https = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443);
		$php = version_compare(PHP_VERSION, '7.1.0', '>=');
		$phpbb = version_compare(PHPBB_VERSION, '3.2.0', '>=');
		$gmp = extension_loaded('gmp');
		$mbstring = extension_loaded('mbstring');
		$curl = extension_loaded('curl');
		$openssl = extension_loaded('openssl');
	if ($https && $php && $phpbb && $gmp && $mbstring && $curl && $openssl){
?>
		<h2>Awesome!</h2>
		<p>
			Your board is ready for Browser and Mobile Notifications Extension!<br><br>
			Go ahead and <a href="#pricing">purchase a licence</a> for your right now.
		</p>
<?php
	} else {
?>
		<h2>Oh no!</h2>
		<ul>
<?php
	if (!$https) {
		echo '<li>HTTPS is not set for this domain.</li>';
	}
	if (!$php) {
		echo '<li>PHP version is older than 7.1.0.</li>';
	}
	if (!$phpbb) {
		echo '<li>phpBB version is older than 3.2.0.</li>';
	}
	if (!$gmp) {
		echo '<li>GMP PHP extension is not installed.</li>';
	}
	if (!$mbstring) {
		echo '<li>mbstring PHP extension is not installed.</li>';
	}
	if (!$curl) {
		echo '<li>CURL PHP extension is not installed.</li>';
	}
	if (!$openssl) {
		echo '<li>OpenSSL PHP extension is not installed.</li>';
	}
?> 
		</ul>
		<p>
			<br><br>This means Browser and Mobile Notifications Extension can't be installed on your board yet.<br><br>
			Contact your provider to resolve the issues, it shouldn't be a big deal for them.<br><br>
			Once they are done, check this again to verify your server is ready for the extension.
		</p>
<?php
	}
	}
?>
		</div>
	</div>
	</section>
	<!-- E N D  P R I C I N G -->

<?php
	if ($is_phpbb && $https && $php && $phpbb && $gmp && $mbstring && $curl && $openssl){
?>

  <!-- P R I C I N G -->
  <section id="pricing">
	<div class="container">
		<div class="title-block">
		<h2>Pricing</h2>
		<p>Buy once, enjoy forever.</p>
		</div>
		<div class="row">
		<div class="col-md-4">
			<div class="pricing-box">
			<h3>Translator License</h3>
			<h6 style="font-weight: normal;">FREE</h6>
			<small>forever</small>
			<p>Help me translate this extension into your language</p>
			<div class="divider-light"></div>
			<ul>
				<li><i class="far fa-check-circle demo"></i>1 site license</li>
				<li><i class="far fa-check-circle demo"></i>Security and bug fixes</li>
				<li style="padding-bottom: 11px;"><i class="far fa-check-circle demo"></i>New feature updates after<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;translating new entries</li>
			</ul>
			<style>
				#translator-btn {
				position: relative;
				width: 100%;
				}
				#translator-btn:before {
				content: "";
				display: block;
				padding-top: 25.8%;
				}
				#translator-btn a {
				position:  absolute;
				top: 0;
				left: 0;
				bottom: 0;
				right: 0;
				background-color: #ffc439;
				color: #000000;
				font-weight: bold;
				font-size: 17px;
				border: 1px solid #db901e;
				border-radius: 5px !important;
				margin-top: 20px;
				padding: 0;
				display: flex;
				flex-direction: column;
				justify-content: center;
				}
			</style>
			<div id="translator-btn" class="text-center">
				<a href="#" class="contact-btn btn btn-regular" title="Contact author using email">Contact author</a>
			</div>
			<div class="text-center">
				<a class="license-link" href="javascript:;" data-toggle="modal" data-target="#translatorLicenseModal" title="See details of Translator License">See license details</a>
			</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="pricing-box">
			<h3>Standard License</h3>
			<h6>15€</h6>
			<small>forever</small>
			<p>phpBB notifications directly to your users' browsers</p>
			<div class="divider-light"></div>
			<ul>
				<li><i class="far fa-check-circle demo"></i>1 site license</li>
				<li><i class="far fa-check-circle demo"></i>Security and bug fixes</li>
				<li><i class="far fa-check-circle demo"></i>Installation support</li>
				<li><i class="far fa-times-circle demo"></i>New feature updates</li>
			</ul>
			<div class="text-center">
				<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=VNVQVLK2W73C8" title="Buy Standard License now"><img style="width: 100%; margin-top: 20px;" src="https://www.paypalobjects.com/webstatic/mktg/merchant_portal/button/buynow.en.png" alt="Buy Standard License"></a>
			</div>
			<div class="text-center">
				<a class="license-link" href="javascript:;" data-toggle="modal" data-target="#standardLicenseModal" title="See details of Standard License">See license details</a>
			</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="pricing-box">
			<h3>Extended License</h3>
			<h6>59€</h6>
			<small>forever</small>
			<p>Use on all your boards with all new features yet to come</p>
			<div class="divider-light"></div>
			<ul>
				<li><i class="far fa-check-circle demo"></i>Up to 5 sites licensed</li>
				<li><i class="far fa-check-circle demo"></i>Security and bug fixes</li>
				<li><i class="far fa-check-circle demo"></i>Installation support</li>
				<li><i class="far fa-check-circle demo"></i>New feature updates <span class="demo">¡Hot!</span></li>
			</ul>
			<div class="text-center">
				<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=MB2ECFL3XKBTC" title="Buy Extended License now"><img style="width: 100%; margin-top: 20px;" src="https://www.paypalobjects.com/webstatic/mktg/merchant_portal/button/buynow.en.png" alt="Buy Extended License"></a>
			</div>
			<div class="text-center">
				<a class="license-link" href="javascript:;" data-toggle="modal" data-target="#extendedLicenseModal" title="See details of Extended License">See license details</a>
			</div>
			</div>
		</div>

		<!--
		<div class="col-md-4">
			<div class="pricing-box">
			<h3>Reseller License</h3>
			<h6>999€</h6>
			<small>forever</small>
			<p>Charge your clients for installation and/or using of this extension</p>
			<div class="divider-light"></div>
			<ul>
				<li><i class="far fa-check-circle demo"></i>Unlimited sites</li>
				<li><i class="far fa-check-circle demo"></i>Security and bug fixes</li>
				<li><i class="far fa-check-circle demo"></i>Complex support</li>
				<li><i class="far fa-check-circle demo"></i>New feature updates</li>
			</ul>
			<div class="text-center">
				<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=R57HSV62PYBHS" title="Buy Reseller License now"><img style="width: 100%; margin-top: 20px;" src="https://www.paypalobjects.com/webstatic/mktg/merchant_portal/button/buynow.en.png" alt="Buy Reseller License"></a>
			</div>
			<div class="text-center">
				<a class="license-link" href="javascript:;" data-toggle="modal" data-target="#resellerLicenseModal" title="See details of Reseller License">See license details</a>
			</div>
			</div>
		</div>
		-->
		</div>
		<div class="note-block">
			<p>
			* Make sure to check <a href="javascript:;" data-toggle="modal" data-target="#requirementsModal" title="See extension reqirements">extension requirements</a>, <a href="javascript:;" data-toggle="modal" data-target="#stylesModal" title="See supported styles">supported styles</a> and <a href="javascript:;" data-toggle="modal" data-target="#translationsModal" title="See supported translations">translations</a> before purchase.
			</p>
			<p></p>
		</div>
	</div>
	</section>
	<!-- E N D  P R I C I N G -->

	<!-- C A L L  T O  A C T I O N -->
	<section id="call-to-action">
	<div class="container text-center">
		<h2>Questions before purchase?</h2>
		<div class="title-block">
		<p>Don't hesitate to drop me a message. Better ask than sorry.</p>
		<a href="#" class="contact-btn btn btn-regular" title="Contact author using email">Contact author</a>
		</div>
	</div>
	</section>
	<!-- E N D  C A L L  T O  A C T I O N -->

	<!--  F O O T E R  -->
	<footer>
	<div class="container">
		<div class="row">
		<div class="col-md-6 col-xs-12 offset-md-6">
			<small>2018 &copy; All rights reserved. Template by <a href="https://www.behance.net/gallery/67279127/The-Seo-Company-Free-PSD-Template" target="blank">Diego Velázquez</a>.</small>
		</div>
		</div>
	</div>
	</footer>
	<!--  E N D  F O O T E R  -->


	<div class="modal fade" id="translatorLicenseModal" tabindex="-1" role="dialog" aria-labelledby="translatorLicenseModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="translatorLicenseModalLabel">Translator License</h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body">
				  <h2>In short</h2>
				  <ul>
					<li>You <b>can</b> use extension on one website.</li>
					<li>You <b>can</b> create another product for one client on one website.</li>
					<li>You <b>cannot</b> use extension on multiple websites.</li>
					<li>You <b>cannot</b> create another product for multiple clients and/or one client used on multiple website.</li>
				  </ul>
				  <h2>Full license</h2>
				  <p><a href="translator-license.txt" title="Download Translator License now">Download full license</a></p>
				</div>
			  </div>
			</div>
		  </div>
		
		  <div class="modal fade" id="standardLicenseModal" tabindex="-1" role="dialog" aria-labelledby="standardLicenseModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="standardLicenseModalLabel">Standard License</h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body">
				  <h2>In short</h2>
				  <ul>
					<li>You <b>can</b> use extension on one website.</li>
					<li>You <b>can</b> create another product for one client on one website.</li>
					<li>You <b>cannot</b> use extension on multiple websites.</li>
					<li>You <b>cannot</b> create another product for multiple clients and/or one client used on multiple website.</li>
				  </ul>
				  <h2>Full license</h2>
				  <p><a href="standard-license.txt" title="Download Standard License now">Download full license</a></p>
				</div>
			  </div>
			</div>
		  </div>
		
		  <div class="modal fade" id="extendedLicenseModal" tabindex="-1" role="dialog" aria-labelledby="extendedLicenseModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="extendedLicenseModalLabel">Extended License</h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body">
				  <h2>In short</h2>
				  <ul>
					<li>You <b>can</b> use extension on five websites.</li>
					<li>You <b>can</b> create another product for one client on five websites.</li>
					<li>You <b>cannot</b> use extension on more than five websites.</li>
					<li>You <b>cannot</b> create another product for multiple clients and/or one client used on more than five website.</li>
				  </ul>
				  <h2>Full license</h2>
				  <p><a href="extended-license.txt" title="Download Extended License now">Download full license</a></p>
				</div>
			  </div>
			</div>
		  </div>
		
		<!--
		  <div class="modal fade" id="resellerLicenseModal" tabindex="-1" role="dialog" aria-labelledby="resellerLicenseModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="resellerLicenseModalLabel">Reseller License</h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body">
				  <h2>In short</h2>
				  <ul>
					<li>You <b>can</b> use extension on any number of websites.</li>
					<li>You <b>can</b> create another product from the extension and sell it.</li>
					<li>You <b>cannot</b> create multiple products from the extension.</li>
				  </ul>
				  <h2>Full license</h2>
				  <p><a href="reseller-license.txt" title="Download Reseller License now">Download full license</a></p>
				</div>
			  </div>
			</div>
		  </div>
		-->
		
		  <div class="modal fade" id="requirementsModal" tabindex="-1" role="dialog" aria-labelledby="requirementsModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="requirementsModalLabel">Extension Requirements</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<ul>
					  <li>PHP 7.1</li>
					  <li>GMP PHP extension</li>
					  <li>mbstring PHP extension</li>
					  <li>curl PHP extension</li>
					  <li>OpenSSL PHP extension</li>
					  <li>phpBB 3.2.0</li>
					  <li>HTTPS on the domain</li>
					  <li>5MB of space</li>
					</ul>
					<p>To see if your board complies with the requirements:</p>
					<ol>
					  <li>See if your board URL starts with https://</li>
					  <li>Go to ACP and in Board statistics verify that Board version is 3.2.0 or higher.</li>
					  <li>Go to ACP -> System -> PHP information and under PHP logo see if your version is 7.1.0 or higher.</li>
					  <li>Go to ACP -> System -> PHP information and search for "gmp", "mbstring", "curl" and "openssl" headers. If header is present, it means you have the extension installed.</li>
					</ol>
					<p>or <a href="validate_requirements.zip" title="Download a requirements validator script">download a script</a> that will find it out for you.</p>
				  </div>
				</div>
			  </div>
			</div>
		  
			<div class="modal fade" id="stylesModal" tabindex="-1" role="dialog" aria-labelledby="stylesModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="stylesModalLabel">Supported styles</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<ul>
					  <li>Absolution</li>
					  <li>BBOOTS</li>
					  <li>FLATBOOTS</li>
					  <li>Milk v2</li>
					  <li>prosilver</li>
					  <li>Ravaio</li>
					  <li>SE Square Left</li>
					  <li>we_universal</li>
					</ul>
					<p>
					  Implicitly, the extension also works with any
					  <a target="_blank" href="https://www.phpbb.com/customise/db/styles/board_styles/prosilver_based-19" title="See all prosilver-based styles">prosilver-based style</a>.
					</p>
				  </div>
				</div>
			  </div>
			</div>
		  
			<div class="modal fade" id="translationsModal" tabindex="-1" role="dialog" aria-labelledby="translationsModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="translationsModalLabel">Extension translations</h5>
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<div class="modal-body">
					  <ul>
						<li>English (UK and US)</li>
						<li>French</li>
						<li>Italian</li>
						<li>Slovak</li>
					  </ul>
					</div>
				  </div>
				</div>
			  </div>
			

    <!-- External JavaScripts -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script>
      var parts = [
        'bWFpbHRvOg==', 'amFrdWJzZW5rbw==', 'QGdtYWls', 'LmNvbQ=='
      ];
      document.querySelectorAll('.contact-btn').forEach(function(elem) {
        elem.href = parts.map(function(part) {
          return atob(part);
        }).join('')
      });
    </script>

<?php
	}
?>
  </body>
</html>