<?php
 $usr = $_POST["usr"];
 $pwd = $_POST["pwd"];
 if($usr == “sajid” && $pwd == “sajid123”)
 {
 $loginName = "Welcome Admin";
 }
 else
 {
 $loginName = "Login Failed";
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="sitestyle.css">
</head>
<body>
<header>
<h1>Cloud Login Result</h1>
</header>
<hr>
<article>
<section>
<h2> <?php echo $loginName ?></h1>
</section>
</article>
<footer>
Developed by K Anbarasan
</footer>
</body>
</html>
sitestyle.css
 header {
 text-align:center;
 height: 100px;
 background-color: #ffe697;
 padding: 10px;
 border-radius: 10px 10px 0px 0px;
 }
 footer {
 text-align:center;
 font-size: 12px;
 height: 50px;
 line-height: 50px;
 background-color: #ffe697;
 padding: 10px;
 border-radius: 10px;
 }
 img{
 width: 100px;
 height: 100px;
 }
 article{
 width: auto;
 border: 2px solid gray;
 padding: 10px;
 border-radius: 10px;
 margin:5px;
 }
