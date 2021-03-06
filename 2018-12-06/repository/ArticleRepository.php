<?php

require_once("../db/DbConfig.php");

class ArticleRepository {

  public function getArticlesBySearchTerm($searchTerm) {
  
    $conn = DbConfig::getConnection();

    $query = 
    "SELECT * FROM ARTICLE 
    WHERE TITLE LIKE '%{$searchTerm}%'";
    try {
    $result = $conn->query($query)->fetchAll();
    } catch (PDOException $e) {
      die("Greška kod pretrage članaka!");
    }
    $articlesList = [];
    foreach ($result as $row) {
      $a = new Article(
        $row["ID"],
        $row["TITLE"],
        $row["BODY"],
        $row["DELETED"],
        $row["PUBLISHING_DATE"]
      );
      array_push($articlesList, $a);
    }

    return $articlesList;
  }

  public function getArticleDetails($id) {
    $conn = DbConfig::getConnection();
    //$query = "SELECT * FROM ARTICLE WHERE ID = {$id}";
  //SQL injection: umjesto id ako ubacimo: 1; DELETE FROM ARTICLE;
  try {
    $stmt = $conn->prepare("SELECT * FROM ARTICLE WHERE ID = :id");
    $stmt->bindParam(':id', $id);
    $result = $stmt->execute();
    $result = $stmt->fetchAll();
    //$result = $conn->query($query)->fetchAll();
  } catch (PDOException $e) {
    die("Greška kod dohvata detalja o članku.");
  }
  
  $result = $result[0];

  $a = new Article(
    $result["ID"],
    $result["TITLE"],
    $result["BODY"],
    $result["DELETED"],
    $result["PUBLISHING_DATE"]
  );

  return $a;
  }

  public function updateArticle($id, $title, $body) {
    $query = "
    UPDATE ARTICLE 
    SET TITLE = '{$title}', BODY = '{$body}' 
    WHERE ID = {$id}";

    $conn = DbConfig::getConnection();
    $conn->exec($query);
  }

  public function insertNewArticle($title, $body) {
    $query = "
    INSERT INTO ARTICLE (TITLE, BODY, DELETED, PUBLISHING_DATE) 
    VALUES ('{$title}','{$body}', 0, 'CURRENT_TIMESTAMP' )";

    $conn = DbConfig::getConnection();
    $conn->exec($query);
  }

}