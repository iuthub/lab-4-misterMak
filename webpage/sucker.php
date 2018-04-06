
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sucker</title>
	<link rel="stylesheet" type="text/css" href="buyagrade.css">
</head>
<body>
	<h1>Thanks Sucker!</h1>
	<?php
		if (!empty($_POST)) {
			$name = $_POST["name"];
			$section = $_POST["section"];
			$creditCard = $_POST["creditCard"];
			$type = $_POST["type"];

			$str = "$name;$section;$creditCard;$type\n";
			file_put_contents("sucker.txt", $str, FILE_APPEND);
	?>
			<p>Your information has been recorded!</p>
			<dl>
				<dt>Name</dt>
				<dd><?= $name ?></dd>
				<dt>Section</dt>
				<dd><?= $section ?></dd>
				<dt>Credit Card</dt>
				<dd><?= $creditCard ?> (<?= $type ?>)  </dd>
			</dl>
	<?php } ?>

</body>
</html>