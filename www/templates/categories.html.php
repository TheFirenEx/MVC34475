<?php
require_once(__DIR__ . '/header.html.php')
?>
<h1><?= $this->title ?></h1>
<ul>
    <?php
    foreach ($this->categories as $category) {
        echo "<li>$category->id - $category->name</li>";
    }
    ?>
</ul>
<?php
require_once(__DIR__ . '/footer.html.php')
?>