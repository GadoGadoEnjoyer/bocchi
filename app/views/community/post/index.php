<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" name="title">
        <label for="image">Image:</label>
        <input type="file" name="image" accept="image/*, video/*">
        <input type="submit" value="Upload">
    </form>
</body>
</html>