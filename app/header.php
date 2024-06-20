<!DOCTYPE html>
<html lang="en">
<head>
  <title>Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="./website.php">WebSite</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="./about.php">About</a></li>
      <li><a href="./">Contacts</a></li>
    </ul>
    <div class = "mr-5">
            <?php 
                 if (isset($_SESSION['name']) && !empty($_SESSION['name'])){ ?>
                 <?php print_r( "user: " . $_SESSION['name']) ?>
                    <form action="./login.php" method="post">
                        <input type="hidden" name="logout" value="true">
                        <input class = "rounded px-2" type="submit" value="Logout">
                    </form>
            <?php } else { ?>
                <ul class="nav navbar-nav navbar-right">
      <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
            <?php }; ?>
        </div>
  </div>
</nav>

</body>
</html>