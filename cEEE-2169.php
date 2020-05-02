<!DOCTYPE html>
<html>
<head>
 <title>EEE-2169</title>
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
		<img style="float: center; margin: 0% 0% 0% 45.5%;" src="img/BAUST.png" width="100" align="center" />
	</div>
    <div class="nav">

	<ul>
		<li><a	class="active" href="index.php">Home</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="about.php">About</a></li>
		<li style="float:left"><a  href="index1.php">Quiz</a></li>
	</ul>
    </div>
  </header>
</body>
</html>


<?php

// This will return all files in that folder
$files = scandir("files/CSE/L2 T1/EEE-2169/");

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
        <a href="files/CSE/L2 T1/EEE-2169/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            Download
        </a>
    </p>
    <?php
}