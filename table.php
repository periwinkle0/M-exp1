<?php
include 'includes/header.php';
include 'includes/data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            background: #33123b;
            color: white;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            background: linear-gradient(to right, #33123b, rgb(128, 22, 126));
            color: white;
            padding: 15px;
            text-align: center;
            width: 100%;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            background: #333;
            color: white;
            margin: 20px auto;
        }

        th, td {
            padding: 10px;
            border: 2px solid white;
            text-align: center;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        footer {
            background: #33123b;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Image Links</h1>
    <div class="content">
        <table>
            <tr>
                <th>Image</th>
                <th style="width: 50%;">Title</th>
                <th>Link</th>
            </tr>
            <?php foreach ($images as $image): ?>
                <tr>
                    <td><img src="images/<?php echo $image['file']; ?>" width="400"></td>
                    <td><?php echo $image['title']; ?></td>
                    <td><a href="images/<?php echo $image['file']; ?>" target="_blank" style="color: white;">View Image</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>
</div>

</body>
</html>
