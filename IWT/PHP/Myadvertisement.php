<!DOCTYPE html>
<html>
<body id="bo">
	<img src="../IMAGES/logo.jpg" width="110px" height="110px">
	<img src="../IMAGES/accpic.png" width="100" height="100" class="accpic">
		<div class="dropdown" style="float:right;" id="accbtn">
		  <button class="btn btn1" class="dropbtn1" >Account</button>
			<div class="dropdown-content">
			  <a href="#">User Login</a>
			  <a href="#">Lecturer Login</a>
			  <a href="#">University Login</a> 
			  <a href="Advertiser Login.html">Advertiser login</a>
			</div>
		</div>
	<h2><ul class="nav">
			<li class="lii" class="lii a"><a href="#Home">Home</a></li>
			<li class="lii dropdown" class="lii a"></li>
			<li class="lii dropdown" class="lii a">
		<li class="lii" class="lii a"><a href="Advertiser Profile.html">My Account</a></li>
		<li class="lii" class="lii a"><a href="Myadvertisement.php">My Advertisements</a></li>
		<li class="lii" class="lii a"><a href="#Contact">Contact</a></li>
		
		<li class="lii" class="lii a"><a href="About.html">About</a></li>
		</h2></ul></hr>
	
    
<center><h2>Post Advertisements</h2></center>

<center><table border="2">
  <tr>
    <td><b>ID</b></td>
    <td><b>Advertisement</b></td>
    <td><b>Days Left</b></td>
    <td><b>Published Date & Time</b></td>
    <td>Delete</td>
  </tr>

<?php



session_start();


$nam=$_SESSION{"mail"};
$db = mysqli_connect("localhost","root","","helpdesk");


$records = mysqli_query($db,"select * from advertisement"); 

while($data = mysqli_fetch_array($records))

{
?>
<?php 
$pday = $data['published_date_time'];
$tday = date("Y/m/d");
$date1=date_create($tday);
$date2=date_create($pday);
$diff=date_diff($date1,$date2);
?>

  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo '<img src="data:image;base64,'.base64_encode($data['image']).' " alt="Image" style="width:100px; height:100px ">'; ?>  </td>
    <td><?php echo $diff->format('%d days'); ?></td>
	<td><?php echo $data['published_date_time']; ?></td>   
    <td><a href="My advertisement delete.php?id=<?php echo $data['id']; ?>"><input type="button" onclick="but(); " value="Delete"></a></td>
  </tr>	
<?php
}
?>
</table></center>

<script>

  function but(){
    var retVal = confirm("Do you want to continue?");
    if (retVal== true){
      document.write("User wants to continue!");
      return true;
    }
    else{
      document.write("User doesn't want to continue!");
      return false;
    }
  }

</script>

</div>
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