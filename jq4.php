<html>
<head>

  <title>Web Scraping Challenge - JSON from API</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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


<h4>The 'click me' button is using jQuery $.get - but can you work out how to scrape the same data using Python?</h4>
<h4><b>What is the currency of the Aland Islands?</b></h4>
<h2 class="name"></h2>
<button class="clickme">Click me - jQuery API</button>
<br>
<h5 class="where"></h5>
<br>
<button id="hint">Get a hint</button>
<h5>only use this if you are stuck</h5>
<script>
  $(document).ready(function(){
    // jQuery Code in here
    $("button.clickme").on("click",function(){
      $.get('https://restcountries.eu/rest/v2/all?fields=name;capital;currencies',function(data){
        $("h2.name").text(JSON.stringify(data[1].currencies))
        $("h5.where").text("Can you work out where that text comes from?")
        $("button.clickme").hide()
      })
    })
  })
</script>

<h5 class="tip"></h5>
<script>
  $(document).ready(function(){
    // jQuery Code in here
    $("#hint").click(function(){
    $("h5.tip").text("view source and check for JSON - can you get data from it? How would you get the text (content) using Scrapy and Python, *read up on JSON.stringify")
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
