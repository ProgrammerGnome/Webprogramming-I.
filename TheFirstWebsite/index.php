<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Website Layout | PGnome</title>
	 <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="">ProgrammerGnome tutorial</a>
      </div>
      
	 <P ALIGN="CENTER"> 
    <MARQUEE DIRECTION="LEFT" WIDTH="125%">
      <img src="gametöri2.jpg" border="0" ALT="This is a text...">
      <style type="text/css">
      img {
		color: white;      
      }
      
      aside
	{
		  width: 25%;
		  padding: 25px;
		  margin: 0px;
		  float: right;
		  font-style: italic;
		  color: red;
		  background-color: black;
}

	 </style>
	</MARQUEE> <BR>    
   
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="subsites/about.php">About</a></li>
        <li><a href="subsites/books.php">Books</a></li>
        <li><a href="/MENU/WebprogBeadando/subsites/quiz.php">Applications</a></li>
        <li><a href="subsites/gallery.php">Gallery</a></li>
      </ul>
      
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="title">Website</div>
    <div class="sub_title">with Gnomengineer</div>
    <div class="btns">
      <button>Learn More</button>
      <button>Subscribe</button>
    </div>
    <aside>
						<h3>Phasellus hendrerit</h3>
						<p>
							Phasellus hendrerit malesuada pulvinar. Nulla imperdiet et orci in vehicula. Sed tincidunt imperdiet augue a pellentesque. Aliquam dignissim dignissim scelerisque.
						</p>
</aside>
  </div>
</body>
</html>

<!--|#############################################################|-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>responsive footer design codepen</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <style media="screen">
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background: #111;
    font-family: sans-serif;
}
footer{
    position: relative;
    bottom: 0;
    left: 0;
    right: 0;
    background: #111;
    height: 50%;
    width: 100vw;

    padding-top: 5px;
    color: #fff;
}
.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer-content h3{
    font-size: 2.1rem;
    font-weight: 500;
    text-transform: capitalize;
    line-height: 3rem;
}
.footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
    color: #cacdd2;
}
.socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
}
.socials li{
    margin: 0 10px;
}
.socials a{
    text-decoration: none;
    color: #fff;
    border: 1.1px solid white;
    padding: 5px;

    border-radius: 50%;

}
.socials a i{
    font-size: 1.1rem;
    width: 20px;


    transition: color .4s ease;

}
.socials a:hover i{
    color: aqua;
}

.footer-bottom{
    background: #000;
    width: 100vw;
    padding: 20px;
	 padding-bottom: 40px;
    text-align: center;
}
.footer-bottom p{
	float: left;
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}
.footer-bottom p a{
  color:#44bae8;
  font-size: 16px;
  text-decoration: none;
}
.footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}
}
    </style>
</head>
<body>
    <footer>
        <div class="footer-content">
            <h3>Gnome Developer</h3>
            <p>Raj Template is a blog website where you will find great tutorials on web design and development. Here each tutorial is beautifully described step by step with the required source code.</p>
            <ul class="socials">
                <li><a href="https://hu-hu.facebook.com/kiraly.mark.54584"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://pemonline.hu/author/kiraly.mark"><i class="fa fa-newspaper-o"></i></a></li>
                <li><a href="https://github.com/ProgrammerGnome"><i class="fa fa-github"></i></a></li>
                <li><a href="https://youtube.com/@programmergnome3720"><i class="fa fa-youtube"></i></a></li>
            </ul>
            

        
        </div>
        <div class="footer-bottom">
            <p>copyright &copy; <a href="#">Gnome Developer</a>  </p>
        </div>

  
        
    </footer>
</body>
</html>
