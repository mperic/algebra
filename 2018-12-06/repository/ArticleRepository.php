<?php

require_once("../db/DbConfig.php");

class ArticleRepository {

  public function getArticlesBySearchTerm($searchTerm) {

    $conn = DbConfig::getConnection();
    sleep(3);
    $conn = DbConfig::getConnection();

    $query = 
    "SELECT * FROM ARTICLE 
    WHERE TITLE LIKE '%{$searchTerm}%'";

    $result = $conn->query($query)->fetchAll();
    
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
  $query = "SELECT * FROM ARTICLE WHERE ID = {$id}";

  $result = $conn->query($query)->fetchAll();
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

}