<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once('../includes/bootstrap.php');
    loadBootstrapCSS();
    ?> 
    <link href="../../assets/css/style.css" rel="stylesheet">
    <title>index</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .top-bar {
            background: linear-gradient(to right, #2d94f5ff); /* สีส้มแถบข้างบน */
            padding: 30px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .search-bar {
            width: 100%;
            max-width: 600px;
            position: relative;
        }

        .search-bar input {
            background: linear-gradient(to right, #f5f3f3ff);
            width: 100%;
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            border-radius: 2px;
            outline: none;
        }

        .search-bar button {
            background: linear-gradient(to right, #f5f3f3ff);
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            background-color: white;
            border: none;
            padding: 0 15px;
            cursor: pointer;
            border-radius: 0 2px 2px 0;
        }
    </style>
</head>

<body>
    <div class="top-bar">
        <div class="search-bar">
            <input type="text" placeholder="ค้นหา..">
            <button>🔍</button>
        </div>
    </div>
    <h1>Hello World1</h1>
</body>
</html>