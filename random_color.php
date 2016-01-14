<?php include('includes/header.php'); ?>
<?php
function randomColor($opacity) {
    $r = rand(0, 255);
    $g = rand(0, 255);
    $b = rand(0, 255);
    echo "rgba($r, $g, $b, $opacity)";
}
?>

<style>
.img-border {
    float: left;
    border-radius: 10px;
    padding:40px;
    width: 500px;
    height: 500px;
    background-color: <?php randomColor(".9"); ?>
}

.words {
    border-radius: 20px;
    padding: 20px;
    margin-left: 40px;
    width: 50%;
    height: 500px;
    float: left;
    background-color: <?php randomColor(".2"); ?>
}
</style>
    <div class="img-border">
        <img src="me.jpg" class="img-circle" alt="image of me" style="margin-left: auto; margin-right: auto; width: 400px;">
    </div>
    <div class="words">
        <p style="font-size:24px; color: black;"> I use a PHP function that grabs a random 0-255 number for red, green, and blue and sends back a color for my border! Don't you just love fun random colors!</p>
    </div>

<?php include('includes/footer.php'); ?>
