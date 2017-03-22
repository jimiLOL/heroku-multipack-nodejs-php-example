<?php
function getRequestParam($name, $default) {
    if (isset($_GET[$name]) && strlen(trim($_GET[$name])) > 0) {
        return trim($_GET [$name]);
    }
    if (isset($_POST[$name]) && strlen(trim(urldecode($_POST[$name]))) > 0) {
        return trim($_POST [$name]);
    }
    return $default;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Фото</title>
</head>
<body style="text-align: center">
<a href='index.php?page=birthday'>
    <img style="width: 100%" src='static/new/birthday/<?php echo getRequestParam("photo", "");?>'/>
    <br/>
    <h1>Назад ко всем фотографиям</h1>
</a>

</body>
</html>
