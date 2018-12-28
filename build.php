<?php

$files = ['cancel.html', 'index.html', 'success.html', 'vr.php'];
$replaces = ['header.html', 'hero_marketing.html', 'pricing_call_footer.html', 'scripts.html'];

foreach ($files as $file)
{
	$content = file_get_contents($file);
	foreach ($replaces as $replace)
	{
		$content = str_replace("INCLUDE '$replace'", file_get_contents('./src/' . $replace), $content);
	}
	if ($file == 'vr.php') $file = 'validate_requirements/vr.php';
	file_put_contents('./docs/' . $file, $content);
}

exec('cd docs && zip -r validate_requirements.zip validate_requirements');
