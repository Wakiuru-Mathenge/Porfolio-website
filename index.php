<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/bootstrap.js"></script>

</head>
<body>
    
<nav class="navbar">
     <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#About">About Me</a></li>
        <li><a href="#Portfolio">Portfolio</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact Me</a></li>
     </ul>
</nav>

<section id="home">
    <img width="100%" height="400" src="image1.jpg" alt="">
    <div class="main">
         <h1 class="headings">I AM <br>WAKIURU MATHENGE</h1>
         <button class="btn">
                
                 <a href="hireme.php">Hire Me</a>

         </button>
    </div>
</section>

<section id="About">

        <h1 class="headings">ABOUT ME</h1>
         <div class="Intro">
            <h2>Wakiuru Mathenge</h2>
            <p>
            I am a geospatial analyst, developer and freelance designer. I have a diploma in Cartography and GIS from RCMRD with over one year of professional geospatial experience.My passions lie in geospatial design, GIS web development, urban geography and drone/ UAV technology. I am particularly intersted in human development and sustainable development and believe that geospatial data and applications are an essential contributor. I am active in the geospatial community and try to be involved in relevant events and conferences and undertake extra learning initiatives. I believe myself to be a very positive, confident and friendly individual that always strives to achieve goals both inside and outside the workplace. I am highly driven, motivated and comfortable with positions of leadership and responsibility. I work with colleagues of all ages and can work efficiently in a fast-paced, team environment. I really strive in new environments and like to explore and adventure out of my comfort zone. 
            </p>
         
    </div>
</section>

<section id="Portfolio">
    <h1 class="headings">PORTFOLIO</h1>
    <div class="gallery">
          <img src="portfolio/drone2.jpg" alt="Drone">
          <img src="portfolio/map.jpg" alt="">
          <img src="portfolio/map2.jpg" alt="">
          <img src="portfolio/map4.jpg" alt="">
    </div>
</section>

<section id="services">
    <h1 class="headings">SERVICES</h1>
    <div class="row">
        <div class="box">
            <img src="portfolio/map3.jpg" alt="">
            <h1 class="headings">GIS Applications</h1>
            <p>
                Developing GIS mapping applications and geoprocessing tools according to the clients' needs, analysing end user issues and providing solutions. Also, maintenance and support of GIS applications and mapping systems.
            </p>
        </div>
        <div class="box">
            <img src="portfolio/sit.jpg" alt="Software Development">
            <h1 class="headings">Freelance Development</h1>
            <p>
            Developing software to meet consumers' and clients' needs,recommending and developing upgrades for existing applications and monitoring quality and performance of applications through testing and maintenance.
            </p>
        </div>
        <div class="box">
            <img src="portfolio/drone.jpg" alt="Drone">
            <h1 class="headings">Drone Services</h1>
            <p>
              Mainly but not limited to topographic surveys  
            </p>
        </div>
    </div>
</section>

<section id="contact">
    <h1 class="headings">CONTACT</h1>
    <form action="" class="form">
        <input type="text" name="name" class="input" placeholder="Enter Your Name">
        <br><br>
        <input type="email" name="email" class="input" placeholder="Enter Your Email">
        <br><br>
        <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Enter Your Message"></textarea>
        <br><br>
        <input type="submit" value="Send" id="Send">
    </form>
</section>

</body>
</html>