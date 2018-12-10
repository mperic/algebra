<?php

interface HotelService {
  public function getAvailableRooms();

  public function getRoomDetails($roomObject);

  public function makeReservation($roomId);
}