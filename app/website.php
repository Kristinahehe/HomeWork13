<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php 
        if (isset($_POST["logout"]) &&  $_POST["logout"] == 'true'){
            session_unset();
            session_destroy();
        }
        include 'header.php';
    ?>
     <section class="h-96 bg-cover bg-center bg-[url('./Images/iStock-1313021528-min-1024x683.jpg')]"></section>
    <section class="container mx-auto my-3">
      <div class="flex flex-col lg:flex-row">
        <div class="p-2 basis-full lg:basic-1/2">
          <img src="images/8SR.jpeg" alt="Eyes" />
          <h3>Monkey</h3>
        </div>
        <div class="p-2 basis-full lg:basic-1/2">
          <img src="Images/8SR.jpeg" alt="Eyes2" />
          <h3>Monkey</h3>
        </div>
        <div class="p-2 basis-full lg:basic-1/2">
          <img src="Images/8SR.jpeg" alt="Eyes3" />
          <h3>Monkey</h3>
        </div>
      </div>
    </section>
    <section class="h-screen flex justify-center content-center flex-wrap bg-cover bg-center bg-[url('./Images/2020-03-feature-giraffe_tcm7-269465.png')]">
      <div class="text-7xl text-white">ANIMAL PLANET</div>
    </section>

    <section class="container mx-auto my-3 flex flex-col gap-2">
      <div class="flex flex-col md:flex-row">
        <div class="md:basis-1/3">
          <img src="Images/NationalGeographic_2802033_3x2.jpg.avif" alt="" />
        </div>
        <div class="md:basis-2/3">
          <h3>Tiger cat</h3>
          <p>The adorable.</p>
        </div>
      </div>
      <div class="flex flex-col md:flex-row-reverse">
        <div class="md:basis-1/3">
          <img src="Images/NationalGeographic_2802033_3x2.jpg.avif" alt="" />
        </div>
        <div class="md:basis-2/3">
          <h3>Tiger cat</h3>
          <p>The adorable.</p>
        </div>
      </div>
      <div class="flex flex-col md:flex-row">
        <div class="md:basis-1/3">
          <img src="Images/NationalGeographic_2802033_3x2.jpg.avif" alt="" />
        </div>
        <div class="md:basis-2/3">
          <h3>Tiger cat</h3>
          <p>The adorable.</p>
        </div>
      </div>
    </section>
    
    <section class="container mx-auto my-3 ">
      <div class="">
        <h1>4 OWL</h1>
      </div>
      <div class="grid grid-cols-1 gap-2 md:grid-cols-2">
        <div class="basis-1/2">
          <img src="Images/Animal-Kingdom-Eyes.webp" alt="" />
          <h2>OWL</h2>
        </div>
        <div class="basis-1/2">
          <img src="Images/Animal-Kingdom-Eyes.webp" alt="" />
          <h2>OWL</h2>
        </div>
      </div>
      <div class="grid grid-cols-1 gap-2 md:grid-cols-2">
        <div class="basis-1/2">
          <img src="Images/Animal-Kingdom-Eyes.webp" alt="" />
          <h2>OWL</h2>
        </div>
        <div class="basis-1/2">
          <img src="Images/Animal-Kingdom-Eyes.webp" alt="" />
          <h2>OWL</h2>
        </div>
    </section>
       <?php include 'footer.php'; ?>
</body>
</html>