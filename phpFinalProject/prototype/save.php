<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentNumber = $_POST['studentNumber'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contactNumber'];
    $birthday = $_POST['birthday'];
    $course = $_POST['course'];
    $yearLevel = $_POST['yearLevel'];
    
    $data = "\nStudent No: $studentNumber | Name: $firstName $lastName | Gender: $gender | Email: $email | Contact: $contactNumber | Birthday: $birthday | Course: $course | Year: $yearLevel" . PHP_EOL;

    $file = "student_info.txt";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    echo $firstName . " " . $lastName . "\n";
    $birtYear = 2025 - $birthday;
    echo "You are " . $birtYear . " years old\n";
    echo "<h2>✅ Student information saved successfully!</h2>";
    echo "<a href='index.php'>Back to form</a>";
}
?>
