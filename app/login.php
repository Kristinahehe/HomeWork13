<?php
    session_start();
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

    <style>
        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
<?php include 'header.php'; ?>
      <div class="w-full max-w-3xl mx-auto p-8">
          <div class="bg-white dark:bg-black p-8 rounded-lg shadow-md border dark:border-black">
              <div class="mb-6">
                  <h2 class="dark:text-white mb-2 " >Log in</h2>
                  </div>
                  <?php if(empty($_SESSION['name'])) { ?>
                  <form action="./index.php" method="post">
                  <div class="grid grid-cols-2 gap-4">
                  <label class="dark:text-white" for="first">
                        Username:
                  </label>
                  <input type="text" id="first" name="first" placeholder="Enter your Username" required>
                <label class="dark:text-white" for="password">
                        Password:
                  </label>
                  <input type="password" id="password" name="password" placeholder="Enter your Password" required>
                  
                  <div class="mb-6">
                        <button class="dark:text-white mb-2" type="submit" >
                              Submit
                        </button>
                  </div>
            </form>
            <?php } ?>
      </div>
      <?php include 'footer.php';?>
</body>
</html>