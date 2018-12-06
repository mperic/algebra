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
} else if (array_key_exists('',$_POST)) {

} else {
  die("Nedozvoljeni pokusaj ulaza!");
}

function displaySearchResults($searchTerm) {
  global $articleRepository;
 
  $articles = $articleRepository->getArticlesBySearchTerm($searchTerm);

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
    <form action="ArticleService.php?command=update" method="post" >
      <input type="text" name="title" value = 
        '<?php echo $article->getTitle(); ?> 
        '>
      <br>
      <textarea name="body" rows=10 cols=20> 
      <?php echo $article->getBody(); ?>
      </textarea>
      <br>
      <input type="hidden" 
        name="articleId" 
        value="<?php echo $article->getId();?>
        ">
      <br>
      <button type="submit">Spremi izmjene</button>
    </form>
  </div>
  <?php
}