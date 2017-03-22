<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Median Calculator</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>


</head>
<body style="background-color: #333333;">
 <!--  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Median Calculator</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Median Calculator</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Median Calculator</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav> -->
  <section id="home">
    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="row center"></div>
        <div class="row center"></div>
        <div class="container">
          <br><br>
          <div class="row center">
            <img src="img/logo1.png" style="width:550px; height:150px;">
          </div>
          <div class="row center"></div>
          <div class="row center"></div>
          <div class="row center">
            <a href="#grouped" id="grouped-button" class="btn-large waves-effect waves-light green lighten-1">GROUPED DATA</a>
            &nbsp
            &nbsp
            &nbsp
            <a href="#ungrouped" id="ungrouped-button" class="btn-large waves-effect waves-light green lighten-1">UNGROUPED DATA</a>
          </div>
          <br><br>

        </div>
      </div>
      <div class="parallax"><img src="finalbg.jpg" alt="Unsplashed background img 1"></div>
    </div>
  </section>

  <section id="description">
    <div class="container">
      <div class="section">

        <!--   Icon Section   -->
        <div class="row">
          <div class="col s12 center">
            <div class="icon-block">
              <h2 class="center white-text"><i class="material-icons">description</i></h2>
              <h5 class="center">What is a Median?</h5>

              <p class="left-align light">The median is a simple measure of central tendency. To find the median, we arrange the observations in order from smallest to largest value. If there is an odd number of observations, the median is the middle value. If there is an even number of observations, the median is the average of the two middle values.</p>
            </div>
          </div>

        </div>
        <div class="row"></div>
        <div class="row"></div>
        <div class="row"></div>
      </div>
    </div>
  </section>

  <section id="grouped">
    <div class="parallax-container valign-wrapper">
      <div class="section no-pad-bot">
        <div class="container">
          <div class="row center">
            <h1 class="header center green-text ">Median for Grouped Data</h1>
            <h5 class="header col s12 black-text">
              <p class="left-align light">
                The computation of the value of the median is done through interpolation. The procedure requires the construction of the less than cummulative frequency.
                <br><br>
                X<sub>lb</sub> &nbsp - &nbsp refers to the lower boundary of the median class
                <br>
                cumf<sub>b</sub> &nbsp - &nbsp the cummulative frequency before the median class
                <br>
                f<sub>m</sub> &nbsp - &nbsp the frequency of the median class

              </p>
            </h5>
          </div>
        </div>
      </div>
      <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
    </div>

    
    <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
          <div class="col s12 center">
            <div class="icon-block">
              <!-- <h2 class="center white-text"><i class="material-icons">code</i></h2> -->
              <h4 class="green white-text">Grouped Data Calculator</h4>
            </div>
          </div>
        </div>

      <div class="row">
        <div class="col s12 m6">
          <div class="icon-block">

            <p class="darker">

                <form method="post">
                  <div class=" card-panel transparent" style="width: 400px;">
                      <div class="row">
                        <br>
                        <h6>Enter Values:</h3>
                        <div class="input-field col s12">
                          <input id="xlb" type="text" class="validate">
                          <label for="xlb">X<sub>lb</sub></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="cumfb" type="text" class="validate">
                          <label for="cumfb">cumf<sub>b</sub></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="fm" type="text" class="validate">
                          <label for="fm">f<sub>m</sub></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="n" type="text" class="validate">
                          <label for="n">n</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="c" type="text" class="validate">
                          <label for="c">c</label>
                        </div>
                      </div>
                      <div class="row">
                        <input type="button" name="Sumbit" value="Compute" onclick="javascript:group()" class="btn-large waves-effect waves-light green lighten-1"/>
                      </div>
                  </div>
                </form>

            </p>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center green-text"><i class="material-icons">done</i></h2>
            <h5 class="center">Answer</h5>

            <p class="darker">
              <h1 class="center green-text">
                <input type="text" id="answer" name="answer" value=""/>
              </h1>
            </p>
          </div>
        </div>
  
      </div>
    </div>
  </div>
  </section>

  <section id="ungrouped">
    <div class="parallax-container valign-wrapper">
      <div class="section no-pad-bot">
        <div class="container">
          <div class="row center">
            <h1 class="header center green-text ">Median for Ungrouped Data</h1>
            <h5 class="header col s12 black-text">
              <p class="left-align light">
                In the determination of the median of ungrouped data, it is always a must that the values be arranged in terms of magnitude either from lowest to highest or vice versa
              </p>
            </h5>
          </div>
        </div>
      </div>
      <div class="parallax"><img src="background1.1.jpg" alt="Unsplashed background img 3">
      </div>

    </div>

    <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
          <div class="col s12 center">
            <div class="icon-block">
              <!-- <h2 class="center white-text"><i class="material-icons">code</i></h2> -->
              <h4 class="green white-text">Ungrouped Data Calculator</h4>
            </div>
          </div>
        </div>

      <div class="row">
        <div class="col s12 m6">
          <div class="icon-block">

            <p class="darker">

                <form method="post">
                  <div class=" card-panel transparent" style="width: 400px;">
                      <div class="row">
                        <br>
                        <div class="input-field col s12">
                          <input id="samplesize" type="text" class="validate">
                          <label for="samplesize">Enter sample size</label>
                        </div>
                      </div>
                      <div class="row">
                        <input type="button" name="Sumbit" value="Compute" onclick="javascript:ungroup()" class="btn-large waves-effect waves-light green lighten-1"/>
                      </div>
                  </div>
                </form>

            </p>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center green-text"><i class="material-icons">done</i></h2>
            <h5 class="center">Answer</h5>
            <h6 class="center text-lighter-1">note: The answer refers to element</h6>

            <p class="darker">
              <h1 class="center green-text">
                <input type="text" id="answer1" name="answer1" value=""/>
              </h1>
            </p>
          </div>
        </div>
  
      </div>

    </div>
  </div>

  </section>
<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light green-text">"Facts are stubborn, but statistics are more reliable" </h5>
          <h8 class="col s12 light">- &nbsp Mark Twain &nbsp - </h8>

        </div>
      </div>
    </div>
    <div class="parallax"><img src="finalbg.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer grey">
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="grey-text text-darken-4" href="#">CJD</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">

    function group(){

      var xlb = parseFloat(document.getElementById('xlb').value);
      var cumfb = parseFloat(document.getElementById('cumfb').value);
      var fm = parseFloat(document.getElementById('fm').value);
      var n = parseFloat(document.getElementById('n').value);
      var c = parseFloat(document.getElementById('c').value);
      var ansD = document.getElementById("answer");
      ansD.value = xlb+(((n/2)-cumfb)/fm)*c;

    }
  </script>

  <script type="text/javascript">

      function ungroup(){

      var samplesize = parseFloat(document.getElementById('samplesize').value);
      var ansD1 = document.getElementById("answer1");
      
        ansD1.value = (samplesize+1)/2;

    }
  </script>

  </body>
</html>
