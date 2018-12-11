pure query
SELECT * FROM room r LEFT OUTER JOIN booking b ON r.ID = b.ROOM_ID 
AND ((b.DATE_FROM BETWEEN '2019-01-09' AND '2019-01-12') OR (b.DATE_TO BETWEEN '2019-01-09' AND '2019-01-12'))
WHERE b.ROOM_ID IS NULL
GROUP BY r.ID

php implementation 
$query = "
    SELECT r.ID FROM room r LEFT JOIN booking b ON r.ID = b.ROOM_ID 
    AND ((b.DATE_FROM BETWEEN :dateFrom AND :dateTo) OR (b.DATE_TO BETWEEN :dateFrom AND :dateTo))
    WHERE b.ROOM_ID IS NULL
    GROUP BY r.ID
    ";
    
$stmt = self::$conn->prepare($query);
$stmt->bindParam(':dateFrom', $dateFrom);
$stmt->bindParam(':dateTo', $dateTo);
$result = $stmt->execute();
$result = $stmt->fetchAll();
