<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
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
<div class="container">
    <div class="content">
            <h1 class="form-title">Register Here</h1>
            <form>
               <input type="text" placeholder="Username">
            
                <input type="text" placeholder="Phone Number">

                <select>
                    <option>Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Non-Binary</option>
                </select>

                <input type="email" placeholder="Email">
                <div class="beside">
                <input type="password" placeholder="Password" >
                <input type="password" placeholder="Confirm Password">
                </div>
                
            <button type="button">Submit</button>
            <p class="message">Already have an account? <a href="login.php">Login</a></p>
            </form>
        </div>
 </div>

</body>
</html>