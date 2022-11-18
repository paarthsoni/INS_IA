<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="CSSfrontend.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="review.css">
    <script src="login.js"></script>
   


</head>
<body>
  <!-- header section starts  -->

  <header>

<div id="menu-bar" class="fas fa-bars"></div>

<a href="index.php" class="logo"><span>Book my show</span></a>

<nav class="navbar">
    <a href="index.php#Home">Home</a>
    <a href="index.php#Movies">Movies</a>
</nav>

<div class="icons">
    <i class="fas fa-search" id="search-btn"></i>
    <a class="fas fa-user" id="login-btn" href="login.php"></a>
</div>

<form action="" class="search-bar-container">
    <input type="search" id="search-bar" placeholder="Search here...">
    <label for="search-bar" class="fas fa-search"></label>
</form>

</header>

<!-- header section ends -->
<?php
if(isset($_SESSION['wrong_credentials']))
{
  echo "<script>alert('Invalid Credentials!!')</script>";
  unset($_SESSION['wrong_credentials']);
}

if(isset($_SESSION['account']))
{
  echo "<script>alert('Account Created Successfully!!')</script>";
  unset($_SESSION['account']);
}


?>
<div class="login-page">
  <div class="form">
    <h2>Give Your Review</h2>
    <form class="login-form" action="userlogin.php" method="post">
      <input type="text" placeholder="Name" name="name" required/>
      <input type="text" placeholder="Review" name="review" required/>
      <button>Submit</button>
    </form>
  </div>
</div>

<div class="table-title">
<h3>Review Table</h3>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Name</th>
<th class="text-left">Review</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left">January</td>
<td class="text-left">$ 50,000.00</td>
</tr>
<tr>
<td class="text-left">February</td>
<td class="text-left">$ 10,000.00</td>
</tr>
<tr>
<td class="text-left">March</td>
<td class="text-left">$ 85,000.00</td>
</tr>
<tr>
<td class="text-left">April</td>
<td class="text-left">$ 56,000.00</td>
</tr>
<tr>
<td class="text-left">May</td>
<td class="text-left">$ 98,000.00</td>
</tr>
</tbody>
</table>
</body>
</html>