<?php
include 'koneksi.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Read the raw POST data
    $json_data = file_get_contents("php://input");

    // Decode the JSON data
    $decoded_data = json_decode($json_data, true);

    // Check if decoding was successful
    if ($decoded_data !== null) {
        // Access the data using the key specified in the JavaScript code (in this case, 'data')
        $dataset = $decoded_data['data'];

        $date = date('Y-m-d H:i:s');

        $kueri = mysqli_query($conn, "INSERT INTO dataset (data, date) VALUES ('$dataset', '$date'");


    } else {
        // Handle JSON decoding error
        http_response_code(400); // Bad Request
        echo 'Error decoding JSON data';
    }

} else {
    // Handle non-POST requests
    http_response_code(405); // Method Not Allowed
    echo 'Only POST requests are allowed';
}


?>