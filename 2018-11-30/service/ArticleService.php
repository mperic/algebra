<?php

require_once('../repository/ArticleRepository.php');

$searchQuery = $_GET['query'];

$articleRepository = new ArticleRepository();
$articles = $articleRepository->getArticles($searchQuery);

var_dump($articles);
