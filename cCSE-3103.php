<!DOCTYPE html>
<html>
<head>
 <title>CSE-3103</title>
<style>

.myDIV_left {
padding: 50px 0;
    padding: 50px 0;
    background-color: #add8e682;

    float: left;
    width: 35%;
        margin: 50px 170px 0 0px;
    text-align: center;
    boder-radius: 15px;
    border: 2px slateblue;
    boder-radius: 20px;
    float: right;
    border: 2px solid #add8e682;
    border-radius: 15px;
    color: white;
	    height: 500px;
}
.myDIV_right{
	    margin: 50px 0 0 170px;
	float: left;
	
padding: 50px 0;
    padding: 50px 0;
    background-color: #add8e682;
    float: left;
    width: 35%;
    text-align: center;
    boder-radius: 15px;
    border: 2px slateblue;
    boder-radius: 20px;
    border: 2px solid #add8e682;
    border-radius: 15px;
    color: white;
	    height: 500px;
}


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


img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: #4CAF50;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}

.body
{
  color: black;
}

img {
  border-radius: 5%;
}
</style>
</head>
<body class="body">
 <header class="header1">
<div class="logo">
  
  <p align ="center"><i><strong>Discipline Knowledge Morality<strong></i></p>

  <h1  align="center"><strong>Bangladesh Army university of Science And Technology<strong></h1>
  <h2 align ="center"><strong>BAUST Question Archives (BAUST Question Bank)<strong></h2>
     <a href="index.php">
    <img style="float: center; margin: 0% 0% 0% 45.5%;" src="img/BAUST.png" width="100" align="center" />
  </a>
  </div>
  
  
  <div class="navbar">
  <a href="index.php" class="active">Home</a>
  <a href="contact.php">Contact</a>
  <a href="about.php">About</a>
  <a href="index1.php">Quiz</a>
  <a href="slideshowofbaust.php">Achivements</a>
  
  <div class="dropdown" style="float:right">
  <button class="dropbtn" onclick="myFunction()">Goto
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="cse.php" >CSE</a>
    <a href="eee.php" >EEE</a>
    <a href="me.php" >ME</a>
    <a href="ipe.php">IPE</a>
    <a href="english.php">English</a>
    <a href="dba.php" >DBA</a>
  </div>
  </div> 
</div>
    
  </header>
    </div>
</body>
</html>


<?php

// This will return all files in that folder
$files = scandir("files/CSE/L3 T1/CSE-3103/");

// If you are using windows, first 2 indexes are "." and "..",
// if you are using Mac, you may need to start the loop from 3,
// because the 3rd index in Mac is ".DS_Store" (auto-generated file by Mac)
for ($a = 2; $a < count($files); $a++)
{
    ?>
    <p>
    	<!-- Displaying file name !-->
        <?php echo $files[$a]; ?>

        <!-- href should be complete file path !-->
        <!-- download attribute should be the name after it downloads !-->
        <a style="margin: 5px;text-decoration: none; color:red; "href="files/CSE/L3 T1/CSE-3103/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            Download
        </a>
        <a style="margin: 10px;text-decoration: none; color: green;" href="files/CSE/L3 T1/CSE-3103/<?php echo $files[$a]; ?>">View</a>
    </p>
    <?php
}