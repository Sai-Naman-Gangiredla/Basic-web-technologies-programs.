<?php
$empid = $_POST['empid'];
$salary = $_POST['salary'];
$ename = $_POST['ename'];
$address = $_POST['address'];

echo "<h2>Form Validation Result</h2>";

// Validate empid
if (preg_match("/^[A-Za-z]{4}[0-9]{4}$/", $empid)) {
    echo "Employee ID is valid.<br>";
} else {
    echo "Invalid Employee ID. Must be 8 characters: 4 letters followed by 4 digits.<br>";
}

// Validate salary
if (preg_match("/^[0-9]{4,6}$/", $salary)) {
    echo "Salary is valid.<br>";
} else {
    echo "Invalid Salary. Only digits allowed (4 to 6 digits).<br>";
}

// Validate name
if (preg_match("/^[A-Z][a-zA-Z]*$/", $ename)) {
    echo "Name is valid.<br>";
} else {
    echo "Invalid Name. First letter must be uppercase, only letters allowed.<br>";
}

// Address length
$length = strlen($address);
echo "Length of address: $length characters.<br>";
?>
