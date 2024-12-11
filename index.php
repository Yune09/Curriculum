<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to my PHP Web Server</h1>
    
    <p>This is a basic example of serving an HTML page with PHP using the built-in server.</p>

    <?php
        // Dynamic PHP content
        echo "<p>The current date and time is: " . date("Y-m-d H:i:s") . "</p>";
    ?>

    <p>You are accessing this page through the PHP built-in server.</p>
</body>
</html>

</html>