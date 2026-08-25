<?php
$db_host = 'sqlXXX.hstn.me';                 // আপনার MySQL Databases পেজে থাকা Hostname
$db_name = 'mseet_42746306_innerbloombd';    // আপনার তৈরি করা Full Database Name
$db_user = 'mseet_42746306';                 // MySQL Username
$db_pass = 'YourAccountPassword';            // হোস্টিং অ্যাকাউন্ট তৈরির পাসওয়ার্ড

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
    ]);
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
?>
