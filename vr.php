INCLUDE 'header.html'
  
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

INCLUDE 'pricing_call_footer.html'

INCLUDE 'scripts.html'
<?php
	}
?>
  </body>
</html>