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
    <title>About</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
up {
  text-align: center;
  padding: 3px;
  background-color: black;
  color: white;
}

h1  {
  text-align: center;

}
</style>
</head>
<body class="up">
<div>
    <header>
        <?php include 'header.php';?>    
    </header>
    </div>
    <h1>Virsraksts</h1>
<div class="text-black-600 text-lg my-11">
<p>
Phasellus vehicula, risus vitae tincidunt cursus, neque est lobortis nunc, id efficitur augue erat in metus. Praesent pretium ligula eu ligula suscipit, vel tempus orci congue. Praesent at tempus massa. Etiam augue massa, luctus at sem sit amet, rutrum cursus dui. Pellentesque vulputate ipsum augue, et rhoncus erat imperdiet finibus. Phasellus condimentum, turpis at faucibus malesuada, nibh libero placerat tortor, vel lacinia neque erat eu ante. Ut tortor ante, porta dictum dapibus et, tempor eu elit. Sed sed diam eget sem porttitor ullamcorper ac non nisi.
Phasellus vel sapien congue, tincidunt risus gravida, suscipit massa. Maecenas id ex non lorem aliquam pharetra vitae rhoncus magna. Vivamus ante leo, ornare eu mauris sit amet, laoreet semper ipsum. Curabitur quis sodales ligula. Donec ornare tincidunt vehicula. Donec tincidunt sed ipsum eu bibendum. In mauris lorem, consectetur et rutrum id, pellentesque venenatis sapien.
Suspendisse luctus tellus vel molestie venenatis. Pellentesque tristique maximus nulla in malesuada. Duis in tincidunt tortor, vitae ornare mauris. Sed mattis scelerisque eros quis varius. Sed tristique nisi sapien, vitae pretium odio varius in. Curabitur fringilla ac lorem vitae feugiat. Vivamus vel libero tempor, elementum dolor quis, porttitor mauris. Vivamus ut iaculis justo.
Nunc sed lorem quis sem consequat euismod. Vestibulum tempor neque sit amet ante scelerisque blandit. Sed et enim iaculis, laoreet massa et, sollicitudin turpis. Nunc porta posuere hendrerit. Ut ac euismod leo. Nam consectetur congue diam, et cursus neque ullamcorper sed. Proin luctus dignissim nibh, et pretium purus mattis sed. In augue sapien, pretium nec dui ac, egestas tristique ante. Mauris tincidunt sodales ligula, mollis pellentesque risus tincidunt non. Duis egestas rhoncus nibh a pulvinar. Donec blandit dictum tellus. Vestibulum in nisl ac erat porttitor blandit. Suspendisse potenti. Morbi maximus ligula vel scelerisque placerat. Proin leo justo, vehicula a sollicitudin vitae, varius et purus.
Ut vel euismod urna. Mauris finibus quam felis. Nulla a accumsan justo. Nulla facilisi. Aenean eu libero feugiat, aliquam massa in, sollicitudin sapien. Aenean egestas mollis odio sit amet imperdiet. Etiam eget nulla risus. Vestibulum mollis massa nulla, vel cursus purus commodo id. In dapibus nunc quis sem venenatis efficitur. Aenean tincidunt mauris sed velit pulvinar fringilla.
Integer vestibulum iaculis odio, vitae iaculis dolor dapibus ut. In ullamcorper orci sit amet mi bibendum, vitae facilisis purus fermentum. Mauris sit amet quam non mauris condimentum viverra. Nullam laoreet sem et nulla dictum, eget varius velit volutpat. Vivamus vel lacus dapibus, ultricies eros in, interdum dui. Donec sagittis enim non faucibus aliquam. Vestibulum ultricies, mauris at aliquam convallis, justo tellus finibus dolor, at sollicitudin elit nisi in ex.
Donec faucibus leo eu nunc commodo, sed rutrum arcu mattis. Nullam ullamcorper efficitur turpis. Curabitur in ligula accumsan libero blandit eleifend. Quisque et consequat lectus. Aenean malesuada vestibulum nulla, at accumsan arcu mollis eu. In sem diam, sodales at bibendum ut, eleifend volutpat ex. Aenean rhoncus id orci id dictum. Pellentesque purus sapien, rutrum a suscipit id, varius sit amet ipsum. Cras porttitor libero ac semper efficitur. Donec scelerisque porta congue.
        </p>
        <?php include 'footer.php';?>
</body>
</html>