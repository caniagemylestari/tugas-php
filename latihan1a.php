<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Latihan1a.php</title>
    <style>
        .output-box {
            border: 1px solid #999;
            padding: 10px;
            max-width: fit-content;
            font-family: Arial, sans-serif;
            font-size: 16px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php
        $topi = "Topi";
        $bundar = "Bundar";

        echo '<div class="output-box">';
        echo $topi . ' Saya ' . $bundar . ', ' . $bundar . ' ' . $topi . ' Saya.';
        echo '</div>';
    ?>
</body>
</html>