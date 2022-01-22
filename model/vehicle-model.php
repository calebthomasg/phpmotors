<?php

//Vehicle Classification model

//function for adding car
function addcar($class, $make, $model, $description, $image, $thumbnail, $price, $stock, $color){
    // Create a connection object using the phpmotors connection function
    $db = phpmotorsConnect();
    // The SQL statement
    $sql = 'INSERT INTO inventory (classificationId, invMake, invModel, invDescription, invImage, invThumbnail, invPrice, invStock, invColor)
        VALUES (:classificationId, :invMake, :invModel, :invDescription, :invImage, :invThumbnail, :invPrice, :invStock, :invColor)';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':classificationId', $class, PDO::PARAM_STR);
    $stmt->bindValue(':invMake', $make, PDO::PARAM_STR);
    $stmt->bindValue(':invModel', $model, PDO::PARAM_STR);
    $stmt->bindValue(':invDescription', $description, PDO::PARAM_STR);
    $stmt->bindValue(':invImage', $image, PDO::PARAM_STR);
    $stmt->bindValue(':invThumbnail', $thumbnail, PDO::PARAM_STR);
    $stmt->bindValue(':invPrice', $price, PDO::PARAM_STR);
    $stmt->bindValue(':invStock', $stock, PDO::PARAM_STR);
    $stmt->bindValue(':invColor', $color, PDO::PARAM_STR);

    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;

}

//function for adding classification
function addclass($class){
    //connection object using connections.php function
    $db = phpmotorsConnect();
    //sql statement
    $sql = 'INSERT INTO carclassification (classificationName) VALUES (:classificationName)';
    //creates sql statement using connections.php connection
    $stmt = $db->prepare($sql);
    //this replaces the placeholders in the sql statement with the actual
    //values in the variables and tells the database the type of data it is
    $stmt->bindValue(':classificationName', $class, PDO::PARAM_STR);
    //inserts the data
    $stmt->execute();
    //asks how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    //closes the database interaction
    $stmt->closeCursor();
    //returns the indication that we were successful (rows changed)
    return $rowsChanged;
}
?>