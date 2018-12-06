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
} else if (
  array_key_exists('command',$_GET) && 
  $_GET['command'] == 'update'
  ) {
  $articleId = $_POST['articleId'];
  $articleTitle = $_POST['title'];
  $articleBody = $_POST['body'];
  updateSingleArticle($articleId, $articleTitle, $articleBody);
  }
  else if (
    array_key_exists('command',$_GET) && 
    $_GET['command'] == 'insert' && sizeof($_POST) == 0
  ) {
    drawNewArticleScreen();
  }
  else if (
    array_key_exists('command',$_GET) && 
    $_GET['command'] == 'insert' && sizeof($_POST) != 0
  ) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    insertNewArticle($title, $body);
  }
 else {
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
      <textarea name="body" rows=10 cols=20><?php echo $article->getBody(); ?>
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

function updateSingleArticle($id, $title, $body) {
  global $articleRepository;
  $articleRepository->updateArticle($id, $title, $body);

  //header("Location: ArticleService.php?articleId={$id}");
  displayArticleDetails($id);
}

function insertNewArticle($title, $body) {
  global $articleRepository;
  
  $articleRepository->insertNewArticle($title, $body);

  header("Location: ../");
}

function drawNewArticleScreen() {
  ?>
  <form action="ArticleService.php?command=insert" method="post">
  <label>Naziv članka</label>
    <input type="text" name='title' required>
    <br>
    <label>Opis članka</label>
    <textarea name="body" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Dodaj novi">
  </form>
  <?php
}