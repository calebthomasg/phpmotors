<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/library/connections.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/model/main-model.php'; ?>

<?php /*echo $navList;*/require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/navigation.php'; ?>

<main>
<?php
    if (isset($message)) {
    echo $message;
}
?>
    <h1>Add Vehicle</h1>
    <form method="post" action="/phpmotors/vehicles/index.php">
        <label for="class">Classification</label></br>
        <?php
            $classifications = getClassifications();
            echo '<select name="log_class" id="car-class">';
            foreach ($classifications as $classification) {
                echo '<option value="'.$classification['classificationId'].'">'.$classification['classificationName'].'</option>';
               }

        ?>
        </select><br><br>
        <label for="make">Make</label></br>
        <input for="text" placeholder="Enter Make" name="log_make" id="make" ><br><br>
        <label for="model">Model</label></br>
        <input for="text" placeholder="Enter Model" name="log_model" id="model"><br><br>
        <label for="description">Description</label></br>
        <textarea rows="4" cols="50" name="log_description" placeholder="Enter description here..."></textarea><br><br>
        <label for="image">Image Path</label></br>
        <input type="text" placeholder="Enter image" name="log_image" id="image"><br><br>
        <label for="thumbnail">Thumbnail Path</label></br>
        <input for="text" placeholder="Enter thumbnail" name="log_thumbnail" id="thumbnail"><br><br>
        <label for="price">Price</label></br>
        <input type="text" placeholder="Enter price" name="log_price" id="price"><br><br>
        <label for="stock"># In Stock</label></br>
        <input for="text" placeholder="Enter number" name="log_stock" id="stock"><br><br>
        <label for="color">Color</label></br>
        <input type="text" placeholder="Enter color" name="log_color" id="color"><br><br>
        <button type="submit">Add Vehicle</button>
        <input type="hidden" name="action" value="add-vehicle-form">
        
    </form>
</main>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>