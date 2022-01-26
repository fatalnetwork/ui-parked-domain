<?php include_once './config.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="robots" content="follow,noindex,noarchive">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<title><?php echo Config::$page_title; ?></title>
		<link rel="stylesheet" href="style/style.css" />
	</head>
	<body>
		<div class="container">
        <div class="content"><?php echo Config::$domain_name; ?></div>
    </div>
	</body>
</html>