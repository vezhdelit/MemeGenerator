<?php
    session_start();
    require_once 'functions.php';

    if(isset($_POST['submit']) && ($_FILES || $_SESSION['fileName'])) {
        if($_FILES) {
            move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . $_FILES['file']['name']);
            $imagePath = 'uploads/' . $_FILES['file']['name'];
            $resultPath ='result/' . $_FILES['file']['name'];

            $_SESSION['fileName'] = $_FILES['file']['name'];
        }
        else if($_SESSION['fileName'])
        {
            $imagePath = 'uploads/' . $_SESSION['fileName'];
            $resultPath ='result/' . $_SESSION['fileName'];
        }
        $image = imagecreatefrompng($imagePath);

        $fontSize = $_POST['textSize'];
        $angle = $_POST['textAngle'];
        list($width,$height) = getPosition($imagePath);
        $textColor = hexdec($_POST['fontColor']);
        $borderColor = imagecolorallocate($image,0,0,0);
        $borderPX = $_POST['borderSize'];
        $fontPath = "fonts/".$_POST['fontStyle'];
        $text = $_POST['text'];

        imagettfstroketext($image, $fontSize, $angle, $width, $height, $textColor, $borderColor, $fontPath, $text,$borderPX);

        imagepng($image, $resultPath);
        imagedestroy($image);

        $_SESSION['text'] = $_POST['text'];
        $_SESSION['positionX'] = $_POST['positionX'];
        $_SESSION['positionY'] = $_POST['positionY'];
        $_SESSION['textSize'] = $_POST['textSize'];
        $_SESSION['borderSize'] = $_POST['borderSize'];
        $_SESSION['textAngle'] = $_POST['textAngle'];
        $_SESSION['fontColor'] = $_POST['fontColor'];
        $_SESSION['fontStyle'] = $_POST['fontStyle'];

        $_SESSION['imagePath'] = $imagePath;
        $_SESSION['resultPath'] = $resultPath;
        Header("Location: image-show.php");
    }
    else{
        echo "Something went wrong...";
    }
?>
