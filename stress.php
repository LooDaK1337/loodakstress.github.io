<!DOCTYPE html>
<html>
	<head>
		<title>Fake Stresser - Stress</title>
		<meta charset="utf-8">
		<meta name="description" content="Free Booter for everybody ! Because we all prefer when it's free ! UDP only: 300 sec max">
		<meta name="author" content="Guillaume LADORME">
		<meta name="keywords" content="Free, Booter, UDP, 300, seconds">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<header>
			<h1>Fake Stresser</h1>
		</header>
		<div class="main">
			<p>
				<?php
                if (!isset($_COOKIE['timer'])) {
                    if (isset($_GET["host"]) AND isset($_GET["port"]) AND isset($_GET["time"])) {
                        echo 'Thanks you for using our services! The stress has been send to ' . htmlspecialchars($_GET["host"]) . ':' . htmlspecialchars($_GET["port"]) . ' for ' . htmlspecialchars($_GET["time"]) . ' seconds!';
                        setcookie('timer', $_SERVER['REMOTE_ADDR'], time() + 24 * 3600, null, null, false, true);
                    } else {
                        echo 'Please, fill out the form correctly!';
                    }
                } else {
                    echo 'Please wait 24 hours before resend a stress';
                }
				?>
			</p>
		</div>

		<footer>
            Powered by <a href="https://github.com/Gladorme">Guillaume LADORME</a> |
            Your IP: <?php echo $_SERVER['REMOTE_ADDR']; ?>
			<!-- Stresser non fonctionnel -->
		</footer>
	</body>
</html>
