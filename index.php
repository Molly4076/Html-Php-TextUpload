<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
        $text = $_POST["text"];
        $title = $_POST["title"];
        $fp = fopen("$DOCUMENT_ROOT/files/$title.txt", 'a');
        $str = '입력한 텍스트 :'.$text;
        fwrite($fp,$str);
        fclose($fp);
    ?>
</body>
</html>
