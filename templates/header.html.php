<!DOCTYPE html>
<html lang="pl-PL">

<head>
	<meta charset="utf-8">
	<title>
		<?php
		echo $this->title !== null ? $this->title : config('app.name');
		?>
	</title>
</head>

<body>