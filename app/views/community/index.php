<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top:10%;
            background-color: black;
        }
        img{
            width: 50%;
            border-radius: 20px;
        }
    </style>
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