<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="masthead"<?php include 'modules/masthead.php'; ?></div>
    <div class="navigation"<?php include 'modules/navigation.php'; ?></div>
    <div class="content"<?php include 'modules/content.php'; ?></div>
    <div class="footer"<?php include 'modules/footer.php'; ?></div>
  </body>
  <h2>
    <title>Masthead and Navigation</title>
    <link href="https://github.com/mschumacher1/Assignments- January_30/blob/master/January_30!=Open+Sans" rel="stylesheet">
    <link href="https://github.com/mschumacher1/Assignments -Febuary_6/blob/master/Assignments%20Febuary_06
    <link rel="stylesheet" href="styles/navigation.processed.css">
  </h2>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</h2>
<body>
 <div class="masthead">
      <div class="masthead-logo"></div>
    </div>
<ul>
  <li><a href="home">Home</a></li>
  <li><a href="news">Contact Form</a></li>
  <li><a href="contact">Bio Page</a></li>
</ul>

</body> 
</html>
