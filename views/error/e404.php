<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/public/favicon.png" type="image/png">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            width: 100%;
            height:1 00vh;
        }
        
        main {
            display: flex;
            justify-content: center;
        }

        .error {
            width: 992px;
            min-width: 420px;
            height: 120px;
            padding: 10px;
            margin-top: 100px;
            background-color: #f5f5f5;
            border: none;
            border-radius: 6px;
            box-shadow: 1px 1px 5px #050405;
        }
        p {
            margin-top: 10px;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <main>
        <div class="error">
            <h1>Error 404</h1>
            <p>The request is not found.</p>
            <p><a href="http://localhost/ecole">&LongLeftArrow; Back to Home</a></p>
        </div>
    </main>
</body>
</html>