<?php
function get_products_by_category($account_id) {
    global $db;
    $statement = $db->prepare($query);
    $query = 'SELECT * FROM accounts';
    $statement->bindValue(":account_id", $account_id);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}
function get_product($product_id) {
    global $db;
    $statement = $db->prepare($query);
    $query = 'SELECT * FROM questions';
    $statement->bindValue(":question_id", $question_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}
function delete_product($product_id) {
    global $db;
    $statement = $db->prepare($query);
    $query = 'SELECT * FROM questions';
    $statement->bindValue(':question_id', $question_id);
    $statement->execute();
    $statement->closeCursor();
}
function add_product($category_id, $code, $name, $price) {
    global $db;
    $statement = $db->prepare($query);
    $query = 'INSERT INTO questions';
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $statement->execute();
    $statement->closeCursor();
}
?>