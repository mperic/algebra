<?php

class Item {
  private $title;
  private $amount;
  private $price;
  private $discount;

  function __construct(
    $title, 
    $amount, 
    $price, 
    $discount) {
      $this->title = $title;
      $this->price = $price;
      $this->amount = $amount;
      $this->discount = $discount;
  }

  public function getFullPrice() {
    return $this->price * $this->amount;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getPrice() {
    return $this->price;
  }

  public function getAmount() {
    return $this->amount;
  }

  public function getDiscount() {
    return $this->discount;
  }
}