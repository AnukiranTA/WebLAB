<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form data</title>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <label for="mes">Message</label><br>
        <textarea name="mes" id="mes" rows="6" cols="50" required></textarea><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mes = $_POST["mes"];
        $file = 'info.txt';
        file_put_contents($file, $mes . "\n", FILE_APPEND | LOCK_EX);
        $m = file_get_contents($file);
        echo "<p> $m</p>";
        echo "<p> Message:$mes</p>";

    }
    ?>
</body>

</html>
