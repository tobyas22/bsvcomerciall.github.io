<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/index.php');
	exit;
?>
<body>
<h1>Lo sentimos ahy un problema fatal en el servidor por favor podrias comunicaemelo al <a href="tel:+595984985759">WhatsApp</a> </h1>

</body>