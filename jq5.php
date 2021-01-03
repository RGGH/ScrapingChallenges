<html>
<head>

  <title>Web Scraping Challenge - JSON from API</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script>
  $(document).ready(function(){
    $("button").click(function(){
      $.ajax({url: "secret.txt", success: function(result){
        $("#div1").html(result);
        $("button.cm").hide()
      }});
    });
  });
  </script>

  <style>
    button{
      display:block;
      margin:auto;
    }

    h2 {
      text-align: center;
      color:red;
    }
    h4 {
      text-align: center;
    }
    h5 {
      text-align: center;
    }
    h6 {
      text-align: center;
      color:white;
    }
    .div1 {
    color: white;
    text-align: center;
    }

  </style>
  
</head>

<body>
  <div class="jumbotron text-center">
    <h1>
      <a href="https://redandgreen.co.uk/jq2.php">Learn Web Scraping</a>
    </h1>
  <a href="https://www.youtube.com/c/DrPiCode"></a> 
  </div>
  <div id="customId"></div>
  <div class="div1"></div>
<h5>Find some more content by making use of the button below</h5>
<h5>Get the all of the text with Python once you have identified it</h5>
<button class="cm">Click me!</button>
 <br>
<h5 class="where"></h5>
 <br>
<button id="hint">Get a hint</button>
 <h5>only use this if you are stuck</h5>

<h5 class="tip"></h5>
<script>
  $(document).ready(function(){
    // jQuery Code in here
    $("#hint").click(function(){
    $("h5.tip").text("There is more secret.text to be found (developer tools) Good luck!")
  })
})
</script>

<br>
<br>
<br>

<div>
  <h4>Coming soon : Video Solution and More Web Scraping Challenges</h4>
</div>

</body>
<footer>
        <h4>Copyright © 2020 All rights reserved <a href="https://redandgreen.co.uk">Red And Green Web Scraping and Automation</a></h4>
        <!--https://www.youtube.com/c/DrPiCode-->
</footer>
</html>
