<?php
if(isset($_GET['file'])) {
    $file = $_GET['file'];
    $filePath = "uploads/" . $file;
    if(file_exists($filePath)) {
        unlink($filePath); // Delete the file
        echo "File '$file' has been deleted.";
    } else {
        echo "File '$file' not found.";
    }
} else {
    echo "No file specified for deletion.";
}
?>
