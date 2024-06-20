
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php 
            include 'header.php';
            if(!empty($_POST['Login']) ) {
                include 'home.php';
            } else {
                include 'notloged.php';
            } 
            include 'footer.php';
        ?>
    </div>
</body>
</html>
