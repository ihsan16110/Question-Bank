<?php
include("class/users.php");
$ans=new  users;
$answer=$ans->answer($_POST);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>answer</title>
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
  
</head>
 <header class="header1">
<div class="logo">
	
	<p align ="center"><i><strong>Discipline Knowledge Morality<strong></i></p>

	<h1  align="center"><strong>Bangladesh Army university of Science And Technology<strong></h1>
	<h2 align ="center"><strong>BAUST Question Archives (BAUST Question Bank)<strong></h2>
		<img style="float: center; margin: 0% 0% 0% 45.5%;" src="img/BAUST.png" width="100" align="center" />
	</div>
    <div class="nav">

	<ul>
		<li><a	 href="index.php">Home</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="about.php">About</a></li>
		<li style="float:left"><a  class="active"href=",index1.php">Quiz</a></li>
	</ul>
    </div>
  </header>
<body>
	<center>
	<?php
	$total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
	$attempt_qus=$answer['right']+$answer['wrong'];
	?>
	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
  <h2>Your Quiz results</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Total number of Questions</th>
        <th><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attempted qusetions</td>
        <td><?php echo $attempt_qus;?></td>
      </tr>
      <tr>
        <td>Right answer </td>
        <td><?php echo $answer['right'];?></td>
      </tr>
      <tr>
        <td>Wrong answer</td>
        <td><?php echo $answer['wrong'];?></td>
      </tr>
	  <tr>
        <td>No answer</td>
        <td><?php echo $answer['no_answer'];?></td>
      </tr>
	  <tr>
        <td>Your result</td>
        <td><?php 
		$per=($answer['right']*100)/($total_qus);
		
		echo $per."%";
		?></td>
      </tr>
    </tbody>
  </table></div>
  <div class="col-sm-2"></div>
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>