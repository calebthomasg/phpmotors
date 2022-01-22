<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>

<?php /*echo $navList;*/require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/navigation.php'; ?>

<main>
<?php
    if (isset($message)) {
    echo $message;
}
?>
    <h1>Add Car Classification</h1>
    <form method="post" action="/phpmotors/vehicles/index.php">
        <label for="class-name">Classification Name</label></br>
        <input type="text" placeholder="Enter Here" name="classificationName" id="classificationName" <?php if(isset($classificationName)){echo "value='$classificationName'";}  ?> required><br><br>
        <button type="submit">Add Classification</button>
        <input type="hidden" name="action" value="add-classfication">
    </form>
</main>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>