<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="/MENU/WebprogBeadando/res/header.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
  #img2 { width:10%; height:20%;    }  
  #img2:hover  { width: 50%; height: 75%; /*width: 636px; height: 500px; */
                            transform: rotate(360deg);
                            -ms-transform: rotate(360deg); /* IE 9 */
                            -webkit-transform: rotate(360deg); /* Safari és Chrome */
  }
  #img2 {  transform: rotate(0deg);
                -ms-transform: rotate(0deg); /* IE 9 */
                -webkit-transform: rotate(0deg); /* Safari and Chrome */}
  #img2 {  transition:width 2s, height 2s, transform 2s;
                 -webkit-transition:width 2s, height 2s, 
                 -webkit-transform 2s;}
</style>     
<link href="/MENU/WebprogBeadando/res/style.css" rel="stylesheet">
<body>

 <nav>
    <div class="menu">
      <div class="logo">
        <a href="/MENU/WebprogBeadando/index.php">CodingLab</a>
      </div>
      <ul>
        <li><a href="/MENU/WebprogBeadando/index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="books.php">Books</a></li>
        <li><a href="/MENU/WebprogBeadando/subsites/quiz.php">Applications</a></li>
        <li><a href="gallery.php">Gallery</a></li>
      </ul>
    </div>
 </nav>

<div class="jumbotron text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

  <div class="div_1">
  <center><img src="p1.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." >
  <img src="p2.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." >
  <img src="p3.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." >
  <img src="p3,5.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." >
  <img src="p4.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." ><br>
  <img src="p5.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." >
  <img src="p6.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." >
  <img src="p7.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." >
  <img src="p8.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." >
  <img src="p9.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." ><br>
  <img src="hosszu.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." >
  <img src="p11.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." >
  <img src="p12.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." >
  <img src="p13.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." >
  <img src="p14.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." ><br>
  <img src="p15.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." >
  <img src="p16.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." >
  <img src="p17.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." >
  <img src="p18.jpg" id="img2" alt="Nincs betöltve elérhető képfájl." >
	</div>

</body>
</html>