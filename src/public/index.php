<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Host is the name of the MySQL service set in docker-compose.yml
        $conn = new mysqli('mysql', 'user', 'secret', 'testdb');
        
        // sql stuff...
        
    ?>
    <?php
        include_once('../test.php');
        sayHi();
        phpinfo();
    ?>

</body>
</html>