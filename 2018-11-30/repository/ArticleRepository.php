<?php

require_once("../db/DbConfig.php");

class ArticleRepository {

  public function getArticles($searchTerm) {

    $conn = DbConfig::getConnection();

    $query = 
    "SELECT * FROM ARTICLE 
    WHERE TITLE LIKE '%{$searchTerm}%'";

    $result = $conn->query($query)->fetch();
    return $result;
  }

}