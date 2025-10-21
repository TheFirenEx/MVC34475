<!DOCTYPE html>
<html lang="pl-PL">

<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="/css/styles.css">
	<title>
		<?php
		echo $this->title !== null ? $this->title : config('app.name');
		?>
	</title>
</head>

<body>