<!DOCTYPE html>
<html>
<head>
    <title>View Files</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <!-- Add Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-…" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>View Files</h2>
        <ul class="file-list">
            <?php
            $files = scandir("uploads/");
            foreach($files as $file) {
                if ($file != "." && $file != "..") {
                    // Get file extension
                    $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
                    // Map file extensions to Font Awesome icons and classes
                    $iconClass = "far fa-file";
                    $iconColorClass = "default"; // Default color class
                    switch ($fileExtension) {
                        case 'pdf':
                            $iconClass = "fas fa-file-pdf";
                            $iconColorClass = "pdf";
                            break;
                        case 'docx':
                            $iconClass = "far fa-file-word";
                            $iconColorClass = "docx";
                            break;
                            case 'xls':
                                case 'xlsx':
                                    $iconClass = "far fa-file-excel";
                                    break;
                                case 'ppt':
                                case 'pptx':
                                    $iconClass = "far fa-file-powerpoint";
                                    break;
                                    case 'jpg':
                                        case 'jpeg':
                                        case 'png':
                                        case 'gif':
                                            $iconClass = "far fa-file-image";
                                            $iconColorClass = "image";
                                            break;
                                        case 'mp4':
                                        case 'avi':
                                        case 'mov':
                                            $iconClass = "far fa-file-video";
                                            $iconColorClass = "video";
                                            break;
                                            case 'mp3':
                                                $iconClass = "far fa-file-audio";
                                                $iconColorClass = "audio";
                                                break;
                                default:
                                    $iconClass = "far fa-file";
                                    break;
                        // Add more cases for other file types if needed
                    }
                    echo "<li><i class=\"$iconClass $iconColorClass\"></i> <a href='uploads/$file' download>$file</a></li>";
                }
            }
            ?>
        </ul>
    </div>
</body>
</html>

