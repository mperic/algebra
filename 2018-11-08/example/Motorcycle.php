<?php

class Motorcycle {
  $manufacturer;
  $model;
  $color;
  $isSingleSeat;

  function __construct($man, $mod, $color, $ss) {
    $this->manufacturter = $man;
    $this->model = $mod;
    $this->color = $color;
    $this->isSingleSeat = $ss;
  }
}