<?php

class DbConfig {
  // Podsjetnik - ovdje staviti try-catch i die() u catch
  //TODO singleton pristup
  public static function getConnection() {
    return new PDO("mysql:host=localhost;dbname=wikipedia",
    'root', '');
  }
}