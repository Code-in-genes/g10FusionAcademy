<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('location:noSession.html');
}
else{

echo "<br>";

//echo $_SESSION['username'];

//echo '<font color="white" size=10>'Welcome;'</font>';
echo '<font color="white" size=10>Welcome </font>';
echo '<font color="#fb6600" size=6>'.$_SESSION['username'].'</font>';


//echo "<a href=logout.php>log out</a>";

}
?>



<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/animate.css"  />
<link rel="stylesheet" type="text/css" href="css/timeline.css"  />
<title>G10 Timeline</title>
</head>
<body>




      <a href="logout.php"><img src="clipart/logout.png" align="right" style="height: 80px; width: 8%; padding-right: 20px;"></a>


<section id="timeline">

      
      <article>
          <div class="inner">
              <span class="date">
                <span class="day">01<sup>th</sup></span>
                <span class="month">Dec</span>
                <span class="year">2015</span>
              </span>
            <h2>ALERT</h2>

              <p>Guitar class. .
              Starting new batches..
              For trial class call 9911555535
              <ul class="hoverbox">
              <li>
                <a href="img/jims10.jpg"><img src="img/jims10.jpg" alt="description" /><img src="img/jims10.jpg" alt="description" class="preview" /></a>
              </li>
              </p>
          </div>
       </article>

      <article>
        <div class="inner">
            <span class="date">
              <span class="day">15<sup>th</sup></span>
              <span class="month">Dec</span>
              <span class="year">2015</span>
            </span>
          <h2>GUITAR CLASSES</h2>
          <p>8 Batches have been currently running<br>We have experienced trainer</p>
        </div>
      </article>

      <article>
        <div class="inner">

            <span class="date">
              <span class="day">17<sup>th</sup></span>
              <span class="month">April</span>
              <span class="year">2015</span>
            </span>
          <h2>ALERT</h2>
          <p>Aerobics and Zumba.. 
          Starting new batches .. 
          For enquiries call- 9911555535<ul class="hoverbox">
          <li>
            <a href="img/jims6.jpg"><img src="img/jims6.jpg" alt="description" /><img src="img/jims6.jpg" alt="description" class="preview" /></a>
          </li>
          <li>
            <a href="img/jims7.jpg"><img src="img/jims7.jpg" alt="description" /><img src="img/jims7.jpg" alt="description" class="preview" /></a>
          </li>
          <li>
            <a href="img/jims8.jpg"><img src="img/jims8.jpg" alt="description" /><img src="img/jims8.jpg" alt="description" class="preview" /></a>
          </li>
          <li>
            <a href="img/jims9.jpg"><img src="img/jims9.jpg" alt="description" /><img src="img/jims9.jpg" alt="description" class="preview" /></a>
          </li>
          </p>
          
        </div>
      </article>

      <article>
          <div class="inner">
              <span class="date">
                <span class="day">14<sup>th</sup></span>
                <span class="month">Mar</span>
                <span class="year">2015</span>
              </span>

              <h2>ALERT</h2>
              <p>We are going to organize theatre workshop<ul class="hoverbox">
              <li>
                <a href="img/jims5.jpg"><img src="img/jims5.jpg" alt="description" /><img src="img/jims5.jpg" alt="description" class="preview" /></a>
              </li>
              </p>
           
          </div>
      </article>

      <article>
          <div class="inner">

              <span class="date">
                <span class="day">01<sup>th</sup></span>
                <span class="month">Mar</span>
                <span class="year">2015</span>
              </span>

              <h2>At JIMS COLLEGE</h2>
              <p>Amazing experience in Judging the dance competition for the 4th time with one of the most telented choreographer I know Mr. Sahil sharma
              <ul class="hoverbox">
              <li>
                <a href="img/jims1.jpg"><img src="img/jims1.jpg" alt="description" /><img src="img/jims1.jpg" alt="description" class="preview" /></a>
              </li>
              <li>
                <a href="img/jims2.jpg"><img src="img/jims2.jpg" alt="description" /><img src="img/jims2.jpg" alt="description" class="preview" /></a>
              </li>
              <li>
                <a href="img/jims3.jpg"><img src="img/jims3.jpg" alt="description" /><img src="img/jims3.jpg" alt="description" class="preview" /></a>
              </li>
              <li>
                <a href="img/jims4.jpg"><img src="img/jims4.jpg" alt="description" /><img src="img/jims4.jpg" alt="description" class="preview" /></a>
              </li>
              <li>
              </p>
          
          </div>

      </article>

      <article>

          <div class="inner">

              <span class="date">
                <span class="day">04<sup>th</sup></span>
                <span class="month">Jan</span>
                <span class="year">2015</span>
              </span>

              <h2>ALERT</h2>
              <p>Opening new branch for your convenience.<ul class="hoverbox">
              <li>
                <a href="img/jims17.jpg"><img src="img/jims17.jpg" alt="description" /><img src="img/jims17.jpg" alt="description" class="preview" /></a>
              </li>
              </p>

          </div>

      </article>
      
      <article>

          <div class="inner">

              <span class="date">
                <span class="day">23<sup>th</sup></span>
                <span class="month">Dec</span>
                <span class="year">2014</span>
              </span>
              <h2>OUR LITTLE ARTIST</h2>
              <p>Skilful performance just by 8 years old.

              <video controls width="320" height="240" >

                <source src="video/adi.mp4" type="video/mp4">
                <source src="video/adi.ogg" type="video/ogg">
                Your browser does not support the video tag.

              </video></p>
            
          </div>

      </article>

      <article>
        
          <div class="inner">

              <span class="date">
                <span class="day">18<sup>th</sup></span>
                <span class="month">Dec</span>
                <span class="year">2014</span>
              </span>

              <h2>ALERT</h2>
              <p>Get sound mind and healthy body through aerobics.<ul class="hoverbox">
              <li>
                <a href="img/jims16.jpg"><img src="img/jims16.jpg" alt="description" /><img src="img/jims16.jpg" alt="description" class="preview" /></a>
              </li>
              
          </div>

      </article>

      <article>
          <div class="inner">

              <span class="date">
                <span class="day">10<sup>th</sup></span>
                <span class="month">Sep</span>
                <span class="year">2014</span>
              </span>

              <h2>VIBGYOR</h2>
              <p>Remarkable performance by our students.<ul class="hoverbox">
              <li>
                <a href="img/jims15.jpg"><img src="img/jims15.jpg" alt="description" /><img src="img/jims15.jpg" alt="description" class="preview" /></a>
              </li>
            
          </div>

      </article>
      
      <article>
          <div class="inner">

              <span class="date">
                <span class="day">10<sup>th</sup></span>
                <span class="month">Jan</span>
                <span class="year">2013</span>
              </span>

            <h2>EPIC PERFORMANCE</h2>
            <p>Really amazing song...
            <video controls width="320" height="240">
                <source src="video/videoback.mp4" type="video/mp4">
                <source src="video/videoback.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video></p>
      
          </div>

      </article>

      <article>

          <div class="inner">
              <span class="date">
                <span class="day">01<sup>th</sup></span>
                <span class="month">Jan</span>
                <span class="year">2010</span>
              </span>

            <h2>INCEPTION</h2>
            <p>g10 Fusion Academy came into existence.</p>

          </div>

      </article>

  </section>


</body>
</html>