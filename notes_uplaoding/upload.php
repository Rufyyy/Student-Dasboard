<!-- upload.php -->
<?php
$upload_dir = "uploads/";

if(isset($_FILES["file"]["name"])) {
    $file_name = basename($_FILES["file"]["name"]);
    $target_file = $upload_dir . $file_name;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "mp3" && $imageFileType != "pdf" && $imageFileType != "mp4" && $imageFileType != "docx") {
        echo "Sorry, only JPG, JPEG, PNG, MP3, PDF, and MP4 files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
