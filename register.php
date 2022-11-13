<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="CSSfrontend.css">

    <style>
         @import url(https://fonts.googleapis.com/css?family=Roboto:300);
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
        /*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}*/
html, body{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color:rgb(255, 184, 77); 
    height:100%;
}
:root{
  --orange:#ffa500;
}

*{
  font-family: 'Nunito', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  text-transform: capitalize;
  outline: none; border:none;
  text-decoration: none;
  transition: all .2s linear;
}   
 *::selection{
  background:var(--orange);
  color:#fff;
}

html{
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-padding-top: 6rem;
  scroll-behavior: smooth;
}

section{
  padding:2rem 9%;
}    
.heading span{
  font-size: 3.5rem;
  background:rgba(255, 165, 0,.2);
  color:var(--orange);
  border-radius: .5rem;
  padding:.2rem 1rem;
}

.heading span.space{
  background:none;
}

.btn{
  display: inline-block;
  margin-top: 1rem;
  background:var(--orange);
  color:#fff;
  padding:.8rem 3rem;
  border:.2rem solid var(--orange);
  cursor: pointer;
  font-size: 1.7rem;
}

.btn:hover{
  background:rgba(255, 165, 0,.2);
  color:var(--red);
}

header{
  position: fixed;
  top:0; left: 0; right:0;
  background:#333;
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding:2rem 9%;
}

header .logo{
  font-size: 2.5rem;
  font-weight: bolder;
  color:#fff;
  text-transform: uppercase;
  text-decoration:none;
}

header .logo span{
  color:var(--orange);
}

header .navbar a{
  color:#fff;
  font-size: 2rem;
  margin:0 .8rem;
  text-decoration: none;
}

header .navbar a:hover{
  color:var(--orange);
}

header .icons i{
  font-size: 2.5rem;
  color:#fff;
  cursor: pointer;
  margin-right: 2rem;
}

header .icons a{
  font-size: 2.5rem;
  color:#fff;
  cursor: pointer;
  margin-right: 2rem;
}

header .icons i:hover{
  color:var(--orange);
}

header .icons a:hover{
  color:var(--orange);
}

header .search-bar-container{
  position: absolute;
  top:100%; left: 0; right:0;
  padding:1.5rem 2rem;
  background:#333;
  border-top: .1rem solid rgba(255,255,255,.2);
  display: flex;
  align-items: center;
  z-index: 1001;
  clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
}

header .search-bar-container.active{
  clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
}

header .search-bar-container #search-bar{
  width:100%;
  padding:1rem;
  text-transform: none;
  color:#333;
  font-size: 1.7rem;
  border-radius: .5rem;
}

header .search-bar-container label{
  color:#fff;
  cursor: pointer;
  font-size: 3rem;
  margin-left: 1.5rem;
}

header .search-bar-container label:hover{
  color:var(--red);
}

.login-form-container{
  position: fixed;
  top:-120%; left: 0;
  z-index: 10000;
  min-height: 100vh;
  width:100%;
  background:rgba(0,0,0,.7);
  display: flex;
  align-items: center;
  justify-content: center;
}

.login-form-container.active{
  top:0;
}

.login-form-container form{
  margin:2rem;
  padding:1.5rem 2rem;
  border-radius: .5rem;
  background:#fff;
  width:50rem;
}

.login-form-container form h3{
  font-size: 3rem;
  color:#444;
  text-transform: uppercase;
  text-align: center;
  padding:1rem 0;
}

.login-form-container form .box{
  width:100%;
  padding:1rem;
  font-size: 1.7rem;
  color:#333;
  margin:.6rem 0;
  border:.1rem solid rgba(0,0,0,.3);
  text-transform: none;
}

.login-form-container form .box:focus{
  border-color: var(--red);;
}

.login-form-container form #remember{
  margin:2rem 0;
}

.login-form-container form label{
  font-size: 1.5rem;
}

.login-form-container form .btn{
  display: block;
  width:100%;
}

.login-form-container form p{
  padding:.5rem 0;
  font-size: 1.5rem;
  color:#666;
}

.login-form-container form p a{
  color:var(--orange);
}

.login-form-container form p a:hover{
  color:#333;
  text-decoration: underline;
}

.login-form-container #form-close{
  position: absolute;
  top:2rem; right:3rem;
  font-size: 5rem;
  color:#fff;
  cursor: pointer;
}

#menu-bar{
  color:#fff;
  border:.1rem solid #fff;
  border-radius: .5rem;
  font-size: 3rem;
  padding:.5rem 1.2rem;
  cursor: pointer;
  display: none;
}
.container{ 
   height:100%;
   display:flex;
   align-items:center;
   justify-content:center;
}
.content{
    background-color:white;
    width:500px;
    height:437px;
}
img{
    width: 100%;
    height: 25%;
}
.form-title{
    padding:10px 40px 0px;
    text-align: center;
}
form{
    padding:0px 40px;
    font-size:medium;
}
input[type=text], [type=email]{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    width:100%;
    margin: 8px 0;
    padding:10px 0;
}
input[type=number]{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    margin: 8px 0;
    padding:5px 0;
}

input[type=password]{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    margin: 8px 0;
    padding:5px 0;
}
input :hover {
    background-color: red;
}
select{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    margin: 8px 0;
    padding:5px 0;
    width:100%;
}
.beside{
    display:flex;  
    justify-content: space-between;
}
button{
    color:#ffffff;
    background-color: #ffa31a;
    height:40px;
    width:100%;
    margin-top:15px;
    cursor: pointer;
    border:none;
    border-radius:2%;
    outline:none;
    text-align:center;
    font-size:16px;
    text-decoration:none;
    -webkit-transition-duration:0.4s;
    transition-duration:0.4s;
}
button:hover{
    background-color:#e68a00;
}

.message{
    margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
  text-align: center;
}

.message a {
  color: #ffa31a;
  text-decoration: none;
}

    </style>
</head>
<body>
     <!-- header section starts  -->

  <header>

<div id="menu-bar" class="fas fa-bars"></div>

<a href="index.php" class="logo"><span>Book my show</span></a>

<nav class="navbar">
    <a href="#Home">Home</a>
    <a href="#Movies">Movies</a>
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
<div class="container">
    <div class="content">
            <h1 class="form-title">Register Here</h1>
            <form action="userregister.php" method="post">
               <input type="text" placeholder="Username" name="username" required>
            
                <input type="text" placeholder="Phone Number" name="contact" required>

                <select name="gender" placeholder="gender">
                <option value="" disabled selected>Select your Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>

                <input type="email" placeholder="Email" name="email" required>
                <div class="beside">
                <input type="password" placeholder="Password" name="password" required>
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
                </div>
                
            <button type="submit">Submit</button>
            <p class="message">Already have an account? <a href="login.php">Login</a></p>
            </form>
        </div>
 </div>

</body>
</html>