<?php

   if($_GET['city']) {

  $forecastPage = file_get_contents("https://www.weather-forecast.com/locations/London/forecasts/latest");

   $pageArray = explode('weather forecast of rain, sun, wind, humidity and temperature. <div class="read-more-small"><div class="read-more-content">',$forecastPage);

  

    echo $pageArray[1];


    $secondPageArray = explode('</div></div>', $pageArray[1]);

      $weather  = $secondPageArray[0];

   }

    

    
 
    


   

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Weather Scraper</title>

        <style type="text/css">

    html { 
      background: url(9.jpg) no-repeat center center fixed; 
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
      background-size: cover;
  }





   body{

  background: none;


   }
  .container {

   text-align: center;
    margin-top: 250px;
    width: 500px;

  }
   
    input{

   margin: 15px;



    }

   


   </style>




    </head>




   <body>
    <div class="container">

    <h1>What's The Weather?</h1>
    
    

    <form>
    <div class="form-group">
      <label for="city">Enter The Name Of A City</label>
      <input type="text" class="form-control" name="city" id="city" placeholder=" Eg.London, Tokyo,">



      <button type="submit" class="btn btn-success">Submit</button>
    </form> 

       <div id="weather"><?php
       
         if ($weather) {


        
        echo '<div class="alert alert-primary" role="alert">
         
       '. $weather.'
      </div>';


         }


       
       
       ?></div>




    </div>

       </body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>