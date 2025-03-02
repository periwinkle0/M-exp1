<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Project</title>
</head>
<body>
    <nav>
        <a href="index.php">Gallery</a> |
        <a href="table.php">Image Table</a>
        <style>
            html, body {
                margin: 0;
                padding: 0;
                height: 100%;
            }

        .container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            }

            .content {
                flex: 1;
            }

            footer {
                background: #33123b;
                color: white;
                text-align: center;
                padding: 10px;
            }
            body {
            
                font-family: Arial, sans-serif;
            }
            nav {
                background-color:rgb(190, 24, 179);
                overflow: hidden;
            }
            nav a {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }
            nav a:hover {
                background-color: #ddd;
                color: black;
            }
            hr {
                border: 1px solid rgb(65, 4, 61);
            }
        </style>
    </nav>
    <hr>
