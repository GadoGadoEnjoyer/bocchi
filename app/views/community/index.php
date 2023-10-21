<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>
</head>
<body>
    <?php 
    foreach($data as $post){
        echo('<h1>' . $post['title'] . '</h1>');
        echo '<img src="'. BASEURL.'/assets/' . $post['photo'] . '" alt="' . $post['title'] . '">';
    } 
    ?>
</body>
</html>