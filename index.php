

<!DOCTYPE html>
<html>
<head>
	<title>SKGC</title>
	<link rel='stylesheet' href='indexcss.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://www.gstatic.com/firebasejs/5.9.1/firebase.js"></script>
<script>
  // Initialize Firebase
  // var config = {
  //   apiKey: "AIzaSyCafSu3BUkeWG1zR6FJQtqsXVsB1TjtSN0",
  //   authDomain: "my-cv-2a1ca.firebaseapp.com",
  //   databaseURL: "https://my-cv-2a1ca.firebaseio.com",
  //   projectId: "my-cv-2a1ca",
  //   storageBucket: "my-cv-2a1ca.appspot.com",
  //   messagingSenderId: "525326355975"
  // };
  // firebase.initializeApp(config);
</script>
</head>
<body>
	<header>
		<h1 id='displayName'>Kavindu Gayantha</h1>
		<!-- <h4 id='desctiption'>Undergraduate student of software engineering at university of kelaniya</h4>
	 --></header>
	<nav>
		<!-- <img id='idImage' src='IMG-20181217-WA0139.jpg'>
		 --><!-- <div class="container"> -->
 		 	<img src="IMG-20181217-WA0139.jpg" id='idImage'>
 		 	<div id='imageCaption'>
 		 	Undergraduate of Software Engineering at University of Kelaniya</div>

			<div id='socialMedia'>
			<a href="https://www.facebook.com/profile.php?id=100008929308296" class="fa fa-facebook" title='my facebook profile'></a><!-- </li>
				<li> -->
			<a href=" https://www.linkedin.com/in/kavindu-gayantha-73478615b/" class="fa fa-linkedin" title='my linkedIN profile'></a><!-- /li>
			</ul> -->
			<a href="https://github.com/Kavindu-Gayantha" class="fa fa-github" title='my github profile'></a>
			</div>
  			
		<div class="btn-group">
  		<button class="button" onclick='showProfile()'>Profile</button>
			<button class="button" onclick="showEducation()">Education</button>
  		<button class="button" onclick='showAwards()'>Awards & achivements</button>
  		<button class="button" onclick='showSkills()'>Skills</button>
		</div>
	</nav>
	<section>
		
			
<?php echo "<div id='details-table'>";
			$name="kavindu Gayantha Chandramal Ariyarathna";
			$address="no 495-B,Mahinda mawatha,pitipana north , Homagama";
			$contact='0718732730';
			$email ="s.kavindu.gayantha@gmail.com";
			$currentSituation='undergraduate of university of kelaniya';
			echo "<table><caption>profile</caption>";
			echo "<tr><td>"."Name"."</td><td>".$name;
			echo "</td></tr><tr><td>Address"."</td><td>".$address;
			echo "</td></tr><tr><td>"."contact"."</td><td>".$contact;
			echo "</td></tr><tr><td>"."email"."</td><td><a href='#'>".$email;
			echo "</a></td></tr><tr><td>"."current situation"."</td><td>".$currentSituation; 
			echo "</td></tr></table></div>";


			?>
 
 <?php echo "<div id='details-table-education'>";
			$school="President's college Maharagama";
			$Secondary="University of kelaniya, software engineering";
			$extra='playing badminton since 2003 to 2015, and having school badminton team captainship';
			
			echo "<table><caption>education</caption>";
			echo "<tr><td>"."school"."</td><td>".$school;
			echo "</td></tr><tr><td>secondary education"."</td><td>".$Secondary;
			echo "</td></tr><tr><td>"."extra curricular activites"."</td><td>".$extra;
			
			echo "</td></tr></table></div>";


			?>
			<?php echo "<div id='details-table-awards'>";
			
			echo "<table><caption>awards</caption>";
			echo "<tr><td>"."2018"."</td><td>"."awarded badminton university colours first time";
			echo "</td></tr><tr><td>2018"."</td><td>"."selected our team as IEEE inovation nation final top 8";
			echo "</td></tr><tr><td>"."2019"."</td><td>"."IEEE student branch of university of kelaniya, Committee member of second year";
			
			echo "</td></tr></table></div>";


			 ?> 
			 <!-- it can be done without php. just with html css and js -->
			 <div id='details-table-skills'>
			 <table><caption>skills</caption>
			 <tr><td>public speaking</td><tr>
			 <tr><td>leadership</td></tr>
			 <tr><td>java</td></tr>
			 <tr><td>c language</td></tr>
			 </table>
			 </div>
 
	 <script>
		function showEducation()
		{
			document.getElementById('details-table').style.display='none';
			document.getElementById('details-table-education').style.display='block';	
			document.getElementById('details-table-awards').style.display='none';	
			document.getElementById('details-table-skills').style.display='none';	
				
			
		}
		function showProfile() 
		{
			document.getElementById('details-table').style.display='block';
			document.getElementById('details-table-education').style.display='none';		
			document.getElementById('details-table-awards').style.display='none';	
			document.getElementById('details-table-skills').style.display='none';
		}
		function showAwards()
		{
			document.getElementById('details-table').style.display='none';
			document.getElementById('details-table-education').style.display='none';		
			document.getElementById('details-table-awards').style.display='block';	
			document.getElementById('details-table-skills').style.display='none';
		}
		function showSkills()
		{
			document.getElementById('details-table').style.display='none';
			document.getElementById('details-table-education').style.display='none';		
			document.getElementById('details-table-awards').style.display='none';	
			document.getElementById('details-table-skills').style.display='block';
		}
		</script>
	</section>
	<footer>
		<h5 id='footerNote'>copyright c allright received</h5>
	</footer>
</body>
</html>