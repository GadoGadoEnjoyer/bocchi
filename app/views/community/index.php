<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>        
    <style>
        .post-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .post-container img {
            max-width: 100%;
            margin-bottom: 10px;
        }
    </style>
    </head>
    <body>
        <?php 
        foreach($data as $post){
            echo('<div class="post-container">');
            echo('<h1>' . $post['title'] . '</h1>');
            echo '<img src="'. BASEURL.'/assets/' . $post['photo'] . '" alt="' . $post['title'] . '">';
            echo('</div>');
        } 
        ?>
    </body>    </html>

