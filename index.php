<?php
include __DIR__ . "/Models/model.php";
// var_dump($hotels);
include __DIR__ . "/Views/header.php";

// var_dump($copydb)

if (!empty($_GET['stats'])) {
    $stats = $_GET['stats'];
    var_dump($stats);
    $copydb = array_filter($hotels, function ($data) use ($stats) {
         if($stats == 'vote'){
            return $data['vote'] > 3;
         } if($stats == 'parking'){
            return $data['parking'] == true;
         }
     });
} else {
    $copydb = $hotels;
}


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