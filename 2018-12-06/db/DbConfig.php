<?php

class DbConfig {
  // Podsjetnik - ovdje staviti try-catch i die() u catch
  private static $instance = null;
  private static $time = null;

  public static function getConnection() {
    if(self::$instance == null) {
     self::$instance = new PDO("mysql:host=localhost;dbname=wikipedia",
      'root', '123');
      self::$time = time(); 
    }

    //echo self::$time;

    return self::$instance;
  }
}