<?php
function get_questions() {
    global $db;
    $query = 'SELECT * FROM questions
              ORDER BY questionID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}
function get_question_name($question_id) {
    global $db;
    $query = 'SELECT * FROM questions
              WHERE questionID = :question_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':question_id', $question_id);
    $statement->execute();
    $category = $statement->fetch();
    $statement->closeCursor();
    $category_name = $category['questionName'];
    return $category_name;
}
?>