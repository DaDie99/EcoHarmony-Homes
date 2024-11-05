<?php
// Database connection
$conn = new mysqli('hostname', 'username', 'password', 'database');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $service_type = $_POST['service_type'];
    $service_id = $_POST['service_id'];
    $user_rating = $_POST['rating'];

    // Insert rating into the unified service_ratings table
    $query = "INSERT INTO service_ratings (service_id, service_type, rating) VALUES ('$service_id', '$service_type', '$user_rating')";
    if ($conn->query($query) === TRUE) {
        
        // Calculate the new average rating for the service
        $avgQuery = "SELECT AVG(rating) as average_rating FROM service_ratings WHERE service_id = '$service_id' AND service_type = '$service_type'";
        $result = $conn->query($avgQuery);
        $row = $result->fetch_assoc();
        $average_rating = round($row['average_rating'], 1); // Round to 1 decimal place

        // Return the average rating as JSON
        echo json_encode(['average_rating' => $average_rating]);
    } else {
        echo json_encode(['error' => 'Failed to insert rating.']);
    }
}
?>
