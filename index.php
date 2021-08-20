<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Carousel</title>
</head>

<body>
    <?php
    $scan=scandir("images");
    ?>
    <div class="text-center"> <h1>Hello, carousel!</h1> </div>

<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">


            
        <?php


// utilisation foreach pour afficher les images
// attention à "." et ".." qui ne sont pas les images
foreach ($scan as $k=>$v){
    if ($v!="." && $v!=".."){
        //echo "<img src='./images/$v' width='70%' alt='image'/>"; OU:
        ?>
        <div class="carousel-item <?php if($k==2){ echo "active"; } ?>" data-bs-interval="1000">
        <img src="./images/<?=$v?>" class="d-block w-100" alt="">
        </div>
        <?php
    }
}

?>

                <!-- <img src="./images/image3.JPG" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/image1.JPG" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/image2.JPG" class="d-block w-100" alt="...">
            </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body> 

</html>