<?php

require_once '../interface/HotelServiceInterface.php';
require_once '../repository/HotelRepository.php';

class HotelService implements iHotelService {
  private static $hotelRepository;

  public function __construct() {
    self::$hotelRepository = new HotelRepository();
  }

  public function getAvailableRooms() {
    return self::$hotelRepository->getAvailableRooms();
  }

  public function getRoomDetails($roomObject) {}

    public function makeReservation($roomId) {}
}