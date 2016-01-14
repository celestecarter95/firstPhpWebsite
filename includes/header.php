<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cerulean.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<style>
body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
}
.content {
    flex: 1;
}
footer {
    color: white;
    padding:15px 0;
}
</style>
<body>


<?php
$sec = date('s');
if ($sec % 2 == 0) {
    echo '<nav class="navbar navbar-default">';
} else {
    echo '<nav class="navbar navbar-inverse">';
}
?>
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">My First PHP Website</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="times_table.php">Multiplication Table</a></li>
            <li><a href="random_color.php">Random Colors</a></li>
          </ul>
        </div>
      </div>
    </nav>

<div class="container-fluid content">
