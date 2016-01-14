<?php include('includes/header.php'); ?>

<h2>Times Table using PHP for loops.</h2>

<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr class="info">
            <th>X</th>
            <?php for($i=1; $i<=12; $i++): ?>
            <th>
                <?= $i ?>
            </th>
            <?php endfor ?>
        </tr>
    </thead>
    <tbody>
        <?php for($i=1; $i<=12; $i++): ?>
        <tr>
            <td>
                <?= $i ?>
            </td>
            <?php for($j=1; $j<=12; $j++): ?>
            <td>
                <?= $i * $j ?>
            </td>
            <?php endfor ?>
        </tr>
        <?php endfor ?>
    </tbody>
</table>


<?php include('includes/footer.php'); ?>
