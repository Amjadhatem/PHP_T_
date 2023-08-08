<?php
// Sample input date string
$inputDate = '12-08-2004';

// Convert to DateTime object using the d-m-Y format
$dateObj = DateTime::createFromFormat('d-m-Y', $inputDate);

if ($dateObj) {
    // Convert to Y-m-d format
    $outputDateYMD = $dateObj->format('Y-m-d');
    
    // Convert to Y-m-d H:i:s format
    $outputDateTimeYMDHIS = $dateObj->format('Y-m-d H:i:s');
    
    echo "Input Date: $inputDate\n";
    echo "Output Date (Y-m-d): $outputDateYMD\n";
    echo "Output DateTime (Y-m-d H:i:s): $outputDateTimeYMDHIS\n";
} else {
    echo "Invalid input date format.\n";
}
?>
