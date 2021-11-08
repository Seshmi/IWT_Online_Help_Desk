<html>
    <head>
        <title>
            Home page
        </title>
        <link rel="stylesheet" href="../CSS/Reg_home.css">
    </head>
    
    <img src="../IMAGES/logo.jpg" width="110px" height="110px">
    
    <img src="../IMAGES/account.png" width="100" height="100" class="accpic">
    
    <div class="dropdown" style="float:right;" id="accbtn">
	  <button class="btn btn1" class="dropbtn1" >Account</button>
		<div class="dropdown-content">
		  <a href="../HTML/Non_Reg_home.php">Logout</a>
		  
		</div>
	</div>

    <h2><ul class="nav">
		<li class="lii" class="lii a"><a href="#">Home</a></li>
		<li class="lii dropdown" class="lii a">
			<a class="dropbtn"  href="../HTML/Coures  page - logout.html">Coures</a>
				<div class="dropdown-content">
					<a href="Faculty Computing - logout.html">Faculty of Computing</a>
					<a href="Faculty of Engineering - logout.html">Faculty of Engineering</a>
					<a href="">Faculty of Business Management</a>
					<a href="">Faculty of Information Technology</a>
					<a href="">Faculty of Architecture</a>
					<a href="">Faculty of Law</a></li>
		<li class="lii dropdown" class="lii a">
			<a class="dropbtn" href="#">University</a>
				<div class="dropdown-content">
					<a href="../HTML/government university page - logout.html">Government University</a>
					<a href="../HTML/private university page - logout.html">Private University</a></li></div>
		<li class="lii" class="lii a"><a href="../HTML/Reg_contact.html">Contact</a></li>
		<li class="lii" class="lii a"><a href="#About">FAQ</a></li>
		<li class="lii" class="lii a"><a href="../HTML/Elibrary.html">E-library</a></li>
		<li class="lii" class="lii a"><a href="../HTML/feedback.html">Feedback</a></li>
        <li class="lii" class="lii a"><a href="../HTML/About.html">About</a></li>
        <li class="lii" class="lii a"><a href="../PHP/User PorfileP.php">My Account</a>
		</h2></ul></hr>
  
<!------------------------------ content ---------------------------------->    
    <body onload="slider()">
        <div class="banner">
            <div class="slider">
                <img src="../IMAGES/pic10.jpg" id="slideImg"class="cccc">
            </div>
            <div class="overlay">
                
                <div class="content">
                    <h1>let's start to learn</h1>
                    <h2>Education is the key to unlock the golden door of freedom...<br><br>
                    - George Washington Carver -</h2>

                    <!----------------question--------------->

                    <center>
                    <div class="container">
                    <?php
                    $connection = mysqli_connect('localhost','root','','userinput');
                    $query = "SELECT *
                              FROM question";
                    $results = mysqli_query($connection,$query);
                    if($results)
                    {    
                        while($record = mysqli_fetch_array($results))
                        {
                         ?>
                         <div class="question"><?php echo $record['question']?>  </div>    
                         <?php
                        }
                    }
                    else
                    {
                        echo "no book";
                    }
                    ?>
                    </div>
                    </center>
                    <!----------------question end--------------->
                    
                    <h3>News peak!!</h3>
                    <br><br><br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>
                    
            
            
           
                    <div class="box">
                    <center>
                    <div class="container2">
                    <?php

                    $connection = mysqli_connect('localhost','root','','helpdesk');

                    $query = "SELECT *
                     FROM `library`";

                    $results = mysqli_query($connection,$query);

                    if($results)
                    {    
                        while($record = mysqli_fetch_array($results))
                        {
                        ?>
                        <?php echo '<img src="data:image;base64,'.base64_encode($record['image']).' " alt="Image" style="width:390px; height:235px "> <br>'; ?>  
                        <?php
                        }
                    }
                    else
                    {
                        echo "no book";
                    }

                    ?>
                    </div>
                    </center>
                    </div>
                   
                    
                    <!--<div>
                        <a href="../HTML/Registration.html"><button type="button" class="button">Sign In</button></a>
                        <a href=""><button type="button" class="button" id="btn2">Sign Up</button></a>

                    </div>-->
                </div>

            </div>
        </div>
<script>
    var slideImg=document.getElementById("slideImg");
    var images=new Array(
        "../IMAGES/pic6.jpg",
        "../IMAGES/pic7.jpg",
        "../IMAGES/pic8.jpg",
        "../IMAGES/pic9.jpg"
    );
    var len=images.length;
    var i=0;
    function slider(){
        if(i>len-1)
        {
            i=0;
        }
        slideImg.src=images[i];
        i++;
        setTimeout('slider()',3500);
    }
</script>

<!--------------------------advertistment--------------------------->

<div class="addslid1">
    <div id="addslider">
        <figure >
        <img  src="../IMAGES/add9.jpg"  height="550px">
        <img  src="../IMAGES/add10.jpg" height="550px">
        <img  src="../IMAGES/add11.jpg"height="550px">
        <img  src="../IMAGES/add12.jpg" height="550px">
        <img  src="../IMAGES/add13.jpg" height="550px">
        
        </figure>
    </div>
</div>

<div class="addslid2">
    <div id="addslider">
        <figure>
        <img  src="../IMAGES/add10.jpg"  height="550px">
        <img  src="../IMAGES/add12.jpg" height="550px">
        <img  src="../IMAGES/add13.jpg"height="550px">
        <img  src="../IMAGES/add9.jpg" height="550px">
        <img  src="../IMAGES/add11.jpg" height="550px">
        </figure>
    </div>
</div>




<!----=-----------------advertistment end--------------------------->




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