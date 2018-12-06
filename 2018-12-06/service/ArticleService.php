<?php

require_once('../repository/ArticleRepository.php');
require_once('../model/Article.php');

$searchQuery = "";
$articleId = "";
$articleRepository = new ArticleRepository();

if(array_key_exists('searchTerm', $_GET)) {
  $searchQuery = $_GET['searchTerm'];
  displaySearchResults($searchQuery);
} else if (array_key_exists('articleId', $_GET)) {
  $articleId = $_GET["articleId"];
  displayArticleDetails($articleId);
} else {
  die("Nedozvoljeni pokusaj ulaza!");
}

function displaySearchResults($searchTerm) {
  global $articleRepository;
  try {
  $articles = $articleRepository->getArticlesBySearchTerm($searchTerm);
  } catch (PDOException | LogicException  $e) {
    die("POD riknuo!");
  } catch (LogicException $e) {
    die("Logika riknula!");
  }
  foreach ($articles as $article) {
    drawSingleArticleTitleBox($article);
  }
}

function displayArticleDetails($articleId) {
  global $articleRepository;
  $article = $articleRepository->getArticleDetails($articleId);

  drawSingleArticleDetails($article);
}

function drawSingleArticleTitleBox($article) {
  ?>
  <div class="articleShort">
      <a href=" <?php echo "?articleId=" .$article->getId(); ?> ">
        <?php echo $article->getTitle(); ?>
      </a>
    </div>
  <?php
}

function drawSingleArticleDetails($article) {

  ?>
  <div class="singleArticle">
    <h3> <?php echo $article->getTitle(); ?> </h3>
    <br>
    <p> <?php echo $article->getBody(); ?></p>
  
  </div>
  <?php
}