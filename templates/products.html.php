<?php
require_once(__DIR__ . '/header.html.php')
?>
<h1><?= $this->title ?></h1>
<ul>
    <?php
    foreach ($this->products as $product) {
        echo "<li>$product->id - $product->name - $product->price USD</li>";
    }
    ?>
</ul>
<?php
require_once(__DIR__ . '/footer.html.php')
?>