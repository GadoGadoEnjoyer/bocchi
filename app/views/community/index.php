<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>
    <style>
        body{
            background-color: #f5f5f5;
        }
        .lol{
            display: flex;
            margin-top:10%;
            align-items: center;
            background-color: black;
        }
        img{
            width: 25%;
            border-radius: 30px;
        }
        h1{
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Post</h1>
    <div class="lol">
    <?php 
    foreach($data as $post){
        echo '<img src="'. BASEURL.'/assets/' . $post['photo'] . '" alt="' . $post['title'] . '">';
    } 
    ?>
    </div>
</body>
</html>