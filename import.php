<?php
require_once 'PhpSpreadsheet/vendor/autoload.php'; // Adjust the path accordingly
use PhpOffice\PhpSpreadsheet\IOFactory;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['excel_file']['name']) && !empty($_FILES['excel_file']['name'])) {
        $file_name = $_FILES['excel_file']['name'];
        $temp_name = $_FILES['excel_file']['tmp_name'];

        $extension = pathinfo($file_name, PATHINFO_EXTENSION);

        if ($extension == 'xls' || $extension == 'xlsx') {

            $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

            echo '<table class="table table-container">';
            echo '<thead>';
            echo '<tr>';
            foreach ($sheet[1] as $key => $value) {
                echo '<th>' . $key . '</th>';
            }
            echo '</tr>';
            echo '</thead>';
            echo '<tbody class="table-border-bottom-0">';

            foreach ($sheet as $key => $row) {
                if ($key !== 1) { // Skip header row
                    echo '<tr>';
                    foreach ($row as $value) {
                        echo '<td>' . $value . '</td>';
                    }
                    echo '</tr>';
                }
            }

            echo '</tbody>';
            echo '</table>';

            // Save to SQL database (You need to configure your database connection here)
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'knn';

            $conn = new mysqli($host, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Assuming your table name is 'imported_data'
            $table_name = 'imported_data';

            // Create table if not exists
            $create_table_query = "CREATE TABLE IF NOT EXISTS $table_name (
                date VARCHAR(255),
                open VARCHAR(255),
                high VARCHAR(255),
                low VARCHAR(255),
                close VARCHAR(255),
                recommendation VARCHAR(255)
                -- Add more columns as needed
            )";

            $conn->query($create_table_query);

            // Insert data into the table
            $insert_data_query = "INSERT INTO $table_name (date, open, high, low, close, recommendation) VALUES (?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($insert_data_query);
            $stmt->bind_param('ssssss', $date, $open, $high, $low, $close, $recommendation);

            foreach ($sheet as $key => $row) {
                if ($key !== 1) { // Skip header row
                    $date = $row['A'];
                    $open = $row['B'];
                    $high = $row['C'];
                    $low = $row['D'];
                    $close = $row['E'];
                    $recommendation = $row['F'];
                    // Add more variables as needed for additional columns
                    $stmt->execute();
                }
            }

            $stmt->close();
            $conn->close();
        } else {
            echo 'Invalid file format. Please upload a valid Excel file.';
        }
    } else {
        echo 'Please choose a file.';
    }
}
?>