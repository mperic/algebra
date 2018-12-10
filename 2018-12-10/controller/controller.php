<?php

require_once ('../service/HotelService.php');

$hotelService = new HotelService();

if ($_GET['action'] == 'dateInquiry') {
  $dateFrom = $_GET['date-from'];
  $dateTo = $_GET['date-to'];

  $rooms = $hotelService->getAvailableRooms();
  var_dump($rooms);
  die();
  $hotelView->showRooms($rooms);
}



