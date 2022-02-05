<?php
function mb_strrev($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}
echo mb_strrev($_POST["reverse"]);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Reverse</title>
</head>
<body>
<br>
<button><a href="Lesson3.html">НАЗАД</a></button>
</body>
</html>
