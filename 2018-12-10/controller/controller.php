<?php

if ($_GET['action'] == 'dateInqery') {
  $dateFrom = $_GET['date-from'];
  $dateTo = $_GET['date-to'];

  $rooms = $hotelService->getAvailableRooms($dateFrom, $dateTo);
  $hotelView->showRooms($rooms);
}

