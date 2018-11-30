<?php

class Article {
  private $id;
  private $title;
  private $body;
  private $deleted;
  private $publishingDate;

  public function __construct (
    $id, $t, $b, $d, $pd) {
      $this->id = $id;
      $this->title = $t;
      $this->body = $b;
      $this->deleted = $d;
      $this->publishingDate = $pd;
  }

  public function getId() {
    return $this->id;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getBody() {
    return $this->body;
  }
  
}