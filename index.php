<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Sandbox</title>
</head>
<body>

<!-- Navbar begin -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PHP Sandbox</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#dogs">Dogs</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#cats">Cats</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#both">Dogs and Cats Together</a></li>
          </ul>
        </li>
       
      </ul>
      <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
     
    </div>
  </div>
</nav>
<!-- Navbar end -->

<!-- Carousel begin -->
<!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/dogs1.jpg" class="d-block w-100" alt="Dogs">
      <div class="carousel-caption d-none d-md-block">
        <h3>Dogs</h3>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/dogs2.jpg" class="d-block w-100" alt="Dogs">
      <div class="carousel-caption d-none d-md-block">
        <h3>Dogs</h3>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/dogs4.jpg" class="d-block w-100" alt="Dogs">
      <div class="carousel-caption d-none d-md-block">
        <h3>Dogs</h3>
        <p></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->
<!-- Carousel End -->

<!--category div begin-->
<div class="d-flex justify-content-around">

<!-- begin category 1 section -->
<a id="dogs">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Dogs</h2>
    </div>
    <!-- begin Container div -->
    <div class="container-fluid">
        <!-- begin row div -->
        <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
        <img src="images/dogs1.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/dogs2.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/dogs4.jpg" class="img-fluid pb-3">
    </div>
    <!-- end row div -->
        </div>
        <!-- end Container div -->
    </div>
 
</section>
</a>
<!-- end category 1 section -->

<!-- begin category 2 section -->
<a id="cats">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Cats</h2>
    </div>
    <!-- begin Container div -->
    <div class="container-fluid">
        <!-- begin row div -->
        <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cats1.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cats2.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cats4.jpg" class="img-fluid pb-3">
    </div>
    <!-- end row div -->
        </div>
        <!-- end Container div -->
    </div>
 
</section>
</a>
<!-- end category 2 section -->

<!-- begin category 3 section -->
<a id="both">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Dogs and Cats Together</h2>
    </div>
    <!-- begin Container div -->
    <div class="container-fluid">
        <!-- begin row div -->
        <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
        <img src="images/both1.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/both2.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/both4.jpg" class="img-fluid pb-3">
    </div>
    <!-- end row div -->
        </div>
        <!-- end Container div -->
    </div>
 
</section>
</a>
<!-- end category 3 section -->

</div>
<!--category div end-->



<!-- begin contact section -->
<a id="contact">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="about.php" method="post">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Number:</label>
                <input type="text" name="number" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>
</a>
<!-- end contact section -->

<!-- begin about section -->
<a id="about">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">About</h2>
    </div>

    <div class="container-fluid">
        <h3 class="text-center">Sandbox</h3>
        <p class="text-center"><b>Learning PHP</b></p>
    </div>


</section>
</a>
<!-- end  about section -->

<!-- calculator -->

<section class="section">

<div class="container is-fluid">
<form action="functions.php" method="get">

<div class="form-group">
<input type="text" name="num01" placeholder="Number of dogs">
  <select name="oper">
    <label>Choose operation:</label>
    <option value="add">Add</option>
    <option value="sub">Subtract</option>
  </select>
  <input type="text" name="num02" placeholder="Number of cats">
  <button type="submit">Calculate number of dogs and cats!</button>
</div>

</form>

</div>

</section>
<!--calculator end -->


<script> src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="runphp.js"></script>
</body>
</html>