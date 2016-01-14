<?php include('includes/header.php'); ?>
<div class="jumbotron">
    <h1>Hello World. This is my first PHP website.</h1>
    <p>Using a PHP if statement, the navigation bar color changes depending on the even or odd second you refresh your screen.
    <br>
     You refreshed your screen on <?= date('s'); ?>  seconds. Your navigation bar should be
        <?php if(date('s') % 2 == 0) {
            echo '<span class="text-primary">light blue.</span>';
        } else {
            echo '<span class="text-info">dark blue.</span>';
        } ?>
    </p>
</div>
<?php include('includes/footer.php'); ?>
