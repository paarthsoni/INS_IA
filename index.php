<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="CSSfrontend.css">

    <!-- css  -->

    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>


</head>

<body>


   

    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="index.php" class="logo"><span>Book my show</span></a>

        <nav class="navbar">
            <a href="#Home">Home</a>
            <a href="#Movies">Movies</a>
        </nav>
       
        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <?php
            session_start();
            if (isset($_SESSION['username']))
            {
              $user=$_SESSION['username'];
              
              echo "<a style='color:white; text-decoration:none;' href='logout.php'>Hello,$user</a>";
            }
            else{
              echo "<a class='fas fa-user' id='login-btn' href='login.php'></a>";
            }
            ?>
            
            
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="Search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>

    <!-- header section ends -->




    <div id="Home"></div>
    <br><br><br><br><br><br>
    <!--carousal-->

    <div id="control" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner bg-light">
            <div class="carousel-item active ">
                <img class="d-block w-75 mx-auto"
                    src="https://streamingdue.com/wp-content/uploads/2022/03/Mahesh-Babu.jpg" alt="">
            </div>
            <div class="carousel-item ">
                <img class="d-block w-75 mx-auto" src="https://i.ytimg.com/vi/q_Wwn7jHufc/maxresdefault.jpg" alt="">
            </div>
            <div class="carousel-item ">
                <img class="d-block w-75 mx-auto"
                    src="https://maxblizz.com/wp-content/uploads/2022/02/strang-4k-1-scaled-e1645329727286.jpg" alt="">
            </div>
            <div class="carousel-item ">
                <img class="d-block w-75 mx-auto"
                    src="https://img.onmanorama.com/content/dam/mm/en/entertainment/movie-reviews/images/2022/4/12/kgf.jpg.transform/schema-16x9/image.jpg"
                    alt="">
            </div>
        </div>
        <button class="carousel-control-prev " type="button" data-bs-target="#control" data-bs-slide="prev">
            <div class="bg-dark rounded p-2">
                <span class="carousel-control-prev-icon "></span>
            </div>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#control" data-bs-slide="next">
            <div class="bg-dark rounded p-2">
                <span class="carousel-control-next-icon"></span>
            </div>
        </button>
    </div>

    <!--carousal end-->

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h1 class="modal-title p-3 display-3">BOOK NOW</h1>
                    <button type="button" class="btn-close p-4" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="payment.php" method="post">
                        <div class="mb-3 mt-3">
                            <h2 class="p-1">Email</h2>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>

                        <div class="mb-3 mt-3">
                            <h2 class="p-1">Name</h2>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name">
                        </div>

                        <div class="mb-3 mt-3">
                            <h3>How many</h3>
                            <input type="number" class="form-control" placeholder="Number of guests" name="howmany">
                        </div>

                        <div class="mb-3 mt-3">
                            <h3>Date</h3>
                            <input type="date" class="form-control" name="date">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <!-- Modal footer -->


            </div>
        </div>
    </div>

    <!-- book section starts  -->

    <!-- book section ends -->


    <!-- Movies section starts  -->

    <section class="Movies" id="Movies">

        <h1 class="heading">
            <span>M</span>
            <span>o</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>s</span>
        </h1>




        <div class="swipercontainer review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box">
                        <img class=' rounded'
                            src="https://tse4.mm.bing.net/th?id=OIP.AYxF4nJtiudLt5YGYecogwHaHa&pid=Api&P=0&w=161&h=161"
                            alt="">
                        <h3>Sarkar Vaari Paata </h3></br></br>

                        <div class="stars">
                            <i class="fas fa-star"></i>6.6/10
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                            Book Now
                        </button>
                    </div>
                </div>
                <!-- <div class="swiper-slide">
                    <div class="box">
                        <img class=' rounded'
                            src="https://tse4.mm.bing.net/th?id=OIF.n7LfV%2bsKIvT6KgVhy6Te1g&pid=Api&P=0&w=157&h=233"
                            alt="">
                        <h3>Doctor Strange in the Multiverse of Madness</h3>

                        <div class="stars">
                            <i class="fas fa-star"></i>7.2/10
                        </div>
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#myModal">
                            Book Now
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img class=' rounded'
                            src="data:image/jpeg;base64,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"
                            alt="">
                        <h3>Ashoka Vanamlo Arjuna Kalyanam</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i> 8/10
                        </div>
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#myModal">
                            Book Now
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img class=' rounded'
                            src="https://tse1.mm.bing.net/th?id=OIP.eArugLDaZPOCGY26Rle0MAHaLK&pid=Api&P=0&w=112&h=169"
                            alt="">
                        <h3>K.G.F: Chapter 2</h3></br></br>

                        <div class="stars">
                            <i class="fas fa-star"></i>8.4/10
                        </div>
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#myModal">
                            Book Now
                        </button>
                    </div>
                </div> -->
                <!-- If we need navigation buttons -->

            </div>


        </div>

    </section>

    <!-- Movies section ends -->

    <!-- footer section  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est
                    accusantium voluptas enim nemo facilis sit debitis.</p>
                <div class="box">
                    <h3>quick links</h3>
                    <a href="#">Home</a>
                    <a href="#">Movies</a>
                    <a href="#">Contact</a>
                </div>
                <div class="box">
                    <h3>follow us</h3>
                    <a href="#">facebook</a>
                    <a href="#">instagram</a>
                    <a href="#">twitter</a>
                    <a href="#">linkedin</a>
                </div>

            </div>

    </section>

    <!-- footer section  ends -->




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="JSfrontend.js"></script>

</body>

</html>