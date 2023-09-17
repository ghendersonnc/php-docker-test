<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli('mysql', 'root', 'secret', 'testdb');

        if ($conn->connect_error) {
            echo "HELP";
        } else {
            $sql = "SELECT * FROM test";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo $row['test'];
                }
            }
        }
        
    ?>
    <?php
        include_once('../test.php');
        sayHi();

        phpinfo();
    ?>

</body>
</html>