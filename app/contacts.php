<?php
    session_start();
    if (!empty($_POST['username']) ){
        $_SESSION['username'] = $_POST['username'];
    };
    if (isset($_POST['logout']) && $_POST['logout'] === 'true') {
        session_unset();
        session_destroy();
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div id="contact">
            <h3>Phone +447837574081</h3>
            <h4>Opening Hours: Mon - Friday 9:00 - 17:00</h4>
            <p>Address: 123 High Street<br></p>
            <p>Rotherham</p>
            <p>South Yorkshire</p>
            <p>S60 4DH</p>
</div>
</body>
</html>