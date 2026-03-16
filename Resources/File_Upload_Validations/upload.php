<?php

$uploadDir = "uploads/";   // Folder to store files
$maxFileSize = 2 * 1024 * 1024; // 2MB

$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'pdf'];
$allowedMimeTypes = [
    'image/jpeg',
    'image/png',
    'image/gif',
    'application/pdf'
];

// Check if file is selected
if (!isset($_FILES['fileToUpload'])) {
    die("No file selected.");
}

$file = $_FILES['fileToUpload'];

// Check upload error
if ($file['error'] != 0) {
    die("Error uploading file. Error code: " . $file['error']);
}

// Validate file size
if ($file['size'] > $maxFileSize) {
    die("File is too large. Maximum size is 2MB.");
}

// Get file extension
$fileName = $file['name'];
$fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

// Validate extension
if (!in_array($fileExtension, $allowedExtensions)) {
    die("Invalid file type. Only JPG, PNG, GIF, PDF allowed.");
}

// Validate MIME type (more secure)
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimeType = finfo_file($finfo, $file['tmp_name']);
finfo_close($finfo);

if (!in_array($mimeType, $allowedMimeTypes)) {
    die("Invalid file MIME type.");
}

// If image, verify it is real image
if (in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif'])) {
    if (getimagesize($file['tmp_name']) === false) {
        die("File is not a valid image.");
    }
}

// Create uploads folder if not exists
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Generate random filename
$newFileName = uniqid() . "." . $fileExtension;
$destination = $uploadDir . $newFileName;

// Check if file already exists
if (file_exists($destination)) {
    die("File already exists.");
}

// Move file to uploads folder
if (move_uploaded_file($file['tmp_name'], $destination)) {
    echo "File uploaded successfully!<br>";
    echo "Saved as: " . $newFileName;
} else {
    echo "Error moving uploaded file.";
}

?>