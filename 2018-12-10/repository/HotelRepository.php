<?php

require_once('../config/DbConfig.php');

class HotelRepository {
  private static $conn;

  public function __construct() {
    self::$conn = DbConfig::getInstance();
  }

  public function getAvailableRooms() {
    $query = "
    SELECT ID FROM ROOM WHERE BOOKED = 0;";

    $stmt = self::$conn->query($query);
    $result = $stmt->fetchAll();

    $roomIds = [];
    
    foreach ($result as $arr ) {
     array_push($roomIds, $arr["ID"] );
    }

    return $roomIds;
  }
}