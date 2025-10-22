<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $filename = "example.JSON";

    if(file_exists($filename)) {
        $data = file_get_contents($filename);
        $jsonArray = json_decode($data, true);
    } else {
        $jsonArray = [];
    }

    $newData = [
        "Name" => $name,
        "Email" => $email
    ];

    $jsonArray[] = $newData;

    $jsonData = json_encode($jsonArray, JSON_PRETTY_PRINT);

    file_put_contents($filename, $jsonData);

    echo "<h3>Data saved successfully!</h3>";
    echo "<a href='$filename' target='_blank'>Open File</a><br><br>";
    echo "<a href='index.php'>Go Back</a>";
} else {
    echo "invalid request!";
}
?>
