<?php
include __DIR__ . "/Models/model.php";
// var_dump($hotels);
include __DIR__ . "/Views/header.php";
?>

<main>
    <div class="container">
        <?php
        include __DIR__ . "/Views/table.php";
        ?>
    </div>
</main>

<?php
include __DIR__ . "/Views/footer.php";
?>