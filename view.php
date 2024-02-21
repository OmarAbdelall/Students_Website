<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-image: url('blackwhite.jpg');
            background-size: cover;
            color: #333;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: left;
            height: 100vh;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            color: #444;
            margin-bottom: 20px;
            text-align: center;
        }
        a {
            text-decoration: none;
            color: #0074d9;
        }
        a:hover {
            color: #0056b3;
        }
        p {
            margin-bottom: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0074d9;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 10px;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .container {
            padding: 20px;
        }
        img {
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        ul, ol {
            margin-left: 20px;
            margin-bottom: 20px;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .alb {
            display: flex;
            align-items: left;
            margin-bottom: 20px;
            background-color: white; 
            padding: 20px; 
        }
        .image-container {
            flex-shrink: 0;
            margin-right: 20px;
        }
        .image-container img {
            width: 150px;
            height: 150px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
        }
        .project-details {
            flex-grow: 1;
        }
        .project-details h2 {
            margin-bottom: 10px;
        }
        .project-details p {
            margin-bottom: 10px;
        }
        .project-details .join-button {
            display: block;
            margin: 10px 0 0 0;
            margin-top: 10px;
            padding: 15px 30px;
            background-color: #0074d9;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
        .project-details .join-button:hover {
            background-color: #0056b3;
        }
    </style>
    <title>Your Page Title</title>
</head>
<body>
    <a href="postpageadvanced.html">←</a>
    <?php 
        $sql = "SELECT * FROM images ORDER BY id DESC";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>
                <div class="alb">
                    <div class="image-container">
                        <img src="uploads/<?=$images['image_url']?>" alt="Project Image" width="150" height="150">
                    </div>
                    <div class="project-details">
                        <h2><?=$images['projectTitle']?></h2>
                        <p><?=$images['projectDescription']?></p>
                        <a class="button join-button" href="chatengineerpage.html">Join Project</a>
                    </div>
                </div>
            <?php 
            } 
        }
    ?>
</body>
</html>