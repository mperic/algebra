<?php

class Car {
  private $manufacturer;
  private $model;
  private $year;
  private $kW;

  public function __construct($man, $model, $year, $kW) {
    $this->manufacturer = $man;
    $this->model = $model;
    $this->year = $year;
    $this->kW = $kW;
  }

  public function getManufacturer() {
    return $this->manufacturer;
  }

  public function getModel() {
    return $this->model;
  }

  public function getKw() {
    return $this->kW;
  }

  public function getYear() {
    return $this->year;
  }
}