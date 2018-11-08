<?php

class Motorcycle {
  public $manufacturer;
  public $model;
  public $color;
  public $isSingleSeat;

  function __construct($man, $mod, $color, $ss) {
    $this->manufacturer = $man;
    $this->model = $mod;
    $this->color = $color;
    $this->isSingleSeat = $ss;
  }
}