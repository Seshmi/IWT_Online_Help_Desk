<html>
<head>
<link rel="stylesheet" href="../CSS/FAQnew.css" >
</head>
<body id="body">

<img src="../IMAGES/logo.jpg" width="110px" height="110px">
<img src="../IMAGES/accpic.png" width="50" height="100" class="accpic">
	<div class="dropdown" style="float:right;" id="accbtn">
	  <button class="dropbtn1" >User Name</button>
		<div class="dropdown-content">
		  <a href="User Login page.html">User Login</a>
		  <a href="#O">Lecturer Login</a>
		  <a href="#">University Login</a> 
		  <a href="#">Advertiser login</a>
		</div>
	</div>
<h2><ul class="nav">
		<li class="lii" class="lii a"><a href="#Home">Home</a></li>
		<li class="lii dropdown" class="lii a">
			<a class="dropbtn"  href="Coures.html">Courses</a>
				<div class="dropdown-content">
					<a href="#">Faculty of Computing</a>
					<a href="#">Faculty of Engineering</a>
					<a href="#">Faculty of Business Management</a>
					<a href="#">Faculty of Information Technology</a>
					<a href="#">Faculty of Architecture</a>
					<a href="#">Faculty of Law</a></li>
		<li class="lii dropdown" class="lii a">
			<a class="dropbtn" href="#">University</a>
				<div class="dropdown-content">
					<a href="#">Government University</a>
					<a href="#">Private University</a></li></div>
		<li class="lii" class="lii a"><a href="#Contact">Contact</a></li>
		<li class="lii" class="lii a"><a href="#About">About</a></li>
		<li class="lii" class="lii a"><a href="#E-library">E-library</a></li>
		<li class="lii" class="lii a"><a href="#FAQ">FAQ</a></li>
		<li class="lii" class="lii a"><a href="Feedback">Feedback</a></li>
		<li class="lii" class="lii a"><a href="#My Acc">My account</a></li>
		</h2></ul></hr>
		
<form  action="../PHP/faq.php" method="POST">
<b><font size=15 color="green">FAQ</font></b>
<div class="al">
	<center>
	<label for="email"><b>Enter valid email</b><br><br></label>
	<input type="email" name="email" value="" class="em" required/><br><br>

	<label for="selectuni"><b>Select the Faculty</b><br><br></label>
	<select name="faculty_id" class="sel" required>
		<option value = "">- -select- -</option>
		<option value = "001">Faculty of Computing</option>
		<option value = "002">Faculty of Engineering</option>
		<option value = "003">Faculty of Business Management</option>
		<option value = "004">Faculty of Law</option>
		<option value = "005">Faculty of Medicine</option>
		<option value = "006">Faculty of Humanaties and Science</option>
		<option value = "007">Faculty of Architecture</option>
	</select>
</div>
<br><br>

<div class="alsub1">
<center>
<label for="AskQ"><b>Ask your question</b></label><br><br>

<input type="text" name="question" class="text" required>
</center>
</div>
<center>
<div class="alsub">

	<input type="submit" name="submit" id="btn1" value="Submit Question"  class="bttn"/>
</center>	
</div>
</form>


<div class="footer">
	<div class="footer-content">
		
		<div class="footer-section about">
			<h1 id="text">UniSup.lk</h1>
			<p id="text">This site represents an online helpdesk for university students.This site allows
			students to choose the coures that best suits has their profrssional qualifications.Therefore this site is helpful for students to choose 
			the university for their choice and the coures.</p><br>
				<p id="text">Tel: +94 987-654-321<br>
				E-mail: info@uniSup.com</p>
		</div>
		<div class="footer-section links"></div>
			<div id="footerimgW">
				<a href="https://web.whatsapp.com/"><img src="../IMAGES/whatapp.jpg" width="30px" height="30px"></a>
				<a href="https://www.youtube.com/"><img src="../IMAGES/youtube.png" width="30px" height="30px"></a>
				<a href="https://www.facebook.com/"><img src="../IMAGES/facebook.png" width="30px" height="30px"></a>
			</div>
	</div>
	<div class="footer-bottom" id="text">
		&copy; UniSup.com | Designed By IT Group
	</div> 
</div>

</body>
</html>

	