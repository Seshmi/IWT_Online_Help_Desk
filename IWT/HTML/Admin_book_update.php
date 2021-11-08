


<html>
    <head>
        <title>Book Delete</title>
        <link rel="stylesheet" href="../CSS/book_update.css">
    </head>
<body>
    <img src="../IMAGES/logo.jpg" width="110px" height="110px">
    
    <h2><ul class="nav">
		<li class="lii" class="lii a"><a href="../HTML/admin_home.html">Home</a></li>
		
	</h2></ul>
</hr>
    
<!-------------------------------content----------------------------------->
<div class="ta">
<center>
<table border="2">
<tr>

    <td><b>ID</b></td>
	<td><b>Book ID</b></td>
    <td><b>Name</b></td>
    <td><b>Image</b></td>
    <td><b>Details</b></td>
    <td><b>Price</b></td>
    <td><b>Oparetions</b></td>
  </tr>


<?php
session_start();

$connection=mysqli_connect('localhost','root','','helpdesk');

$query="select * 
		from library";

$records = mysqli_query($connection,$query); 

while($data = mysqli_fetch_array($records))
{
	?>
  		<tr>
		<td><?php echo $data['ID_no']; ?></td>
		<td><?php echo $data['ID']; ?></td>
    	<td><?php echo $data['Name']; ?></td>
    	<td><?php echo '<img src="data:image;base64,'.base64_encode($data['image']).' " alt="Image" style="width:100px; height:100px ">'; ?>  </td>
    	<td><?php echo $data['details']; ?></td>
		<td><?php echo $data['Price']; ?></td>
		<td><a href="book_delete.php? rn=<?php echo $data['ID']; ?>">Delete</td>
		
		</tr><br>	
	<?php
}
?>
</table>
</center>
</div>
<!-------------------------------content end-------------------------------->
    
<div class="footer">
	<div class="footer-content">
		
		<div class="footer-section about">
			<h1 id="text">UniSup.lk</h1>
			<p id="text">This site represents an online helpdesk for university students.This site allows
			students to choose the coures that best suits has their profrssional qualifications.Therefore this site is helpful for students to choose 
			the university for their choice and the coures.</p>
				<p id="text">Tel: +94 987-654-321<br>
				E-mail: info@uniSup.com</p>
		</div>
		<div class="footer-section links"></div>
			<div id="footerimgW">
				<a href="https://web.whatsapp.com/"><img src="../IMAGES/whats.jpeg" width="30px" height="30px"></a>
				<a href="https://www.youtube.com/"><img src="../IMAGES/you.jpeg" width="30px" height="30px"></a>
				<a href="https://www.facebook.com/"><img src="../IMAGES/fb.jpeg" width="30px" height="30px"></a>
			</div>
	</div>
	<div class="footer-bottom" id="text">
		&copy; UniSup.com | Designed By IT Group
	</div> 
</div>
</body>
</html>


