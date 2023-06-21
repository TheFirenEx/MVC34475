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
<h2><?= $this->addTitle ?></h2>
<form action="<?= route('add') ?>" method="POST">
    <input name="category_name">
    <button type="submit"><?= $this->addButton ?></button>
</form>
<?php
require_once(__DIR__ . '/footer.html.php')
?>