
<?php include('header.php'); include('hover.php'); include('admin/dbcon.php'); ?>

<script type="text/javascript">
	$(document).ready(function()
		{
		$('.more').hide();
		
		 $("#click").click(function () {
      $(".more").toggle("slow");
      $("#click").hide("slow");
    });
	
	

		
		});
</script>
<script type="text/javascript">
	$(document).ready(function()
		{
		$('.more1').hide();
		
		 $("#click1").click(function () {
      $(".more1").toggle("slow");
      $("#click1").hide("slow");
    });
	
	

		
		});
</script>

</head> 
<body>

<div class="coat">

<div class="wrapper_home">
<div class="navbar navbar-fixed-top">
 <div class="navbar">
  <div class="navbar-inner1">
  <div class="nav_jkl">
    <div class="container">
<ul class="nav">
<a class="brand" href="#">
<font color="white">Class Schedule Viewer</font>
</a>
  <li class="active">
    <a href="index.php"><i class="icon-home icon-large"></i>Home</a>
  </li>
  <li class="dropdown">
    <a href="#"
          class="dropdown-toggle"
          data-toggle="dropdown">
          <i class="icon-search icon-large"></i>Exam Schedule
          <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">

      
      <li><a  data-toggle="modal" href="#exam_CYS">Department</a></li>
      <li><a data-toggle="modal" href="#exam_room">Room</a></li>
    
    </ul>
  </li>
   <li class="divider-vertical"></li>
  <li class="dropdown">
    <a href="#"
          class="dropdown-toggle"
          data-toggle="dropdown">
          <i class="icon-search icon-large"></i>Class Schedule
          <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
     
      <li><a data-toggle="modal" href="#teacher">Teacher</a></li>
      <li><a data-toggle="modal" href="#CYS">Department</a></li>
      <li><a href="#room"  data-toggle="modal">Room</a></li>
    
    </ul>
  </li>
      <li class="divider-vertical"></li>
  <li><a href="help.php" class="help" id="help"><i class="icon-question-sign icon-large"></i>Help</a></li>

    <li class="divider-vertical"></li>
  <li><a href="admin/index.php" class="admin"><i class="icon-user icon-large"></i>Admin Login</a></li>
 
	</ul>
    </div>
    </div>
  </div>
</div>
</div>

<div class="hero-unit">
<div id="myCarousel" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img src="img/11.jpg" width="1090" height="250"></div>
    <div class="item"><img src="img/22.jpg" width="1090" height="250"></div>
    <div class="item"><img src="img/33.jpg" width="1090" height="250"></div>
    <div class="item"><img src="img/44.jpg" width="1090" height="250"></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next"></a>
</div>
</div>

<div class="hero-unit-bud">
<div class="jkl">

</div>
<ul class="nav nav-tabs"> 
	
  <li class="active"><a class="news" href="#home" data-toggle="tab"><font color="white"><i class="icon-list-alt icon-large"></i></font><font color="orange">News And Events</font></a></li>
  <li><a class="calendar" href="indexx.php" ><font color="white"><i class="icon-list-alt icon-large"></i></font><font color="orange">Calendar of Events</font></a></li>

  
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home">
  <div class="hero-unit-y">

  


<div class="index-text">


<div class="more1">

</div>



</div>
<div class="turn-over">


</div>
     </div>
	</br>
  <div class="hero-unit-y">
<p></p>



<p>OFF Day</p>



</br>
</br>
<div class="more">
<p>

 </p>
</div>


 </div>
  </div>
  
  <div class="tab-pane" id="profile">
    <div class="hero-unit-y">
  <div class="hero-unit-y">
  <div class="about_nav">

  <ul class="nav nav-tabs nav-stacked">
 
<ul class="nav nav-tabs nav-stacked">
  <li class="active"><a href="#"><font color="white"><i class="icon-book icon-large"></i></font><font color="orange">History</font></a></li>
  <li><a data-toggle="modal" href="#mission"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange">Mission</font></a></li>
  <li><a data-toggle="modal" href="#vision"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange">Vision</font></a></li>
  <li><a data-toggle="modal" href="#mandate"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange"></font></a></li>
  <li><a data-toggle="modal" href="#hymm"><font color="white"><i class=" icon-music icon-large"></i></font><font color="orange">vu</font></a></li>


</ul>
</ul>
  
  </div>


  <div class="history_chmsc">
  <p><h2>Vu History</h2></p>
  <hr>
  <p>

</p>
 </div>
 </div>
 </div>
  </div>

  <div class="tab-pane" id="settings">
                  

  </div>

  
    <div class="tab-pane" id="calendar">
    <div class="hero-unit-y">
		<p><h3><i class="icon-calendar icon-large"></i>&nbsp;&nbsp;Calendar of Events</h3></p>
		<hr>
	<div class="cal">
<p>First Semester	June 6, 2012 to October 12, 2012 (18 weeks)</p>
<p>Semestral Break	Oct. 13, 2012 to November 4, 2012</p>
<p>Second Semester	Nov. 5, 2012 to March 22, 2012 (18 weeks)</p>
<p>Summer Break	March 26, 2012 to April 8, 2012</p>
<p>Summer	April 8 , 2012 to May 24, 2012</p>
<p><h3>June</h3></p>
<hr>
<div class="june">
<img src="img/calendar1.png"  width="200" height="200">
</div>
<div class="june1">
<p>June 6, 2012 to October 7, 2012 � First Semester AY 2012-2013</p>
<p>June 4-5, 2012	Orientation with the Parents of the College Freshmen</p>
<p>June 6	College Personnel General Assembly</p>
<p>June 7	First Day of Classes</p>
<p>June 13	Orientation with Students by College/Campus/Department</p>
<p>June 20,21,22	Branch/Campus Visit for Administrative/Academic/Accreditation/Concerns</p>
<p>June	Club Organizations (By Discipline/Programs) Student Affiliation/Induction Programs</p>
<hr>
</div>
<p><h3>July</h3></p>
<hr>
<div class="july">
<img src="img/calendar2.png"  width="200" height="200">
</div>
<div class="july1">
<p>July	Nutrition Month (Sponsor: Laboratory School)</p>
<p>July 12, 13	Long Tests</p>
<hr>
</div>
<p><h3>August</h3></p>
<hr>
<div class="august">
<img src="img/calendar3.png"  width="200" height="200">
</div>
<div class="august1">
<p>August 9, 10	Midterm Examinations</p>
<p>August 20	Araw ng Lahi</p>
<p>August 24	Submission of Grade Sheets for Midterm</p>
<p>August	Recognition Program (Dean�s List)</p>
<p>August 26	National Heroes Day (Regular Holiday)</p>
<p>August 29, 30, 31	Sports and Cultural Meet</p>
<hr>
</div>
<p><h3>September</h3></p>
<hr>
<div class="september">
<img src="img/calendar4.png"  width="200" height="200">
</div>
<div class="september1">
<p>September 20, 21	Long Tests</p>
<hr>
</div>
<p><h3>October</h3></p>
<hr>
<div class="october">
<img src="img/calendar5.png"  width="200" height="200">
</div>
<div class="october1">
<p>October 5	Teachers� Day / World Teachers� Day</p>
<p>October 11, 12	Final Examination</p>
<p>October 13	Semestral Break</p>
<hr>
</div>
<p><h3>November</h3></p>
<hr>
<div class="november">
<img src="img/calendar6.png"  width="200" height="200">
</div>
<div class="november1">
<p>November. 5, 2012 to March 24, 2013 � Second Semester AY 2012-2013</p>
<p>November 5	Start of Classes</p>
<p>November 22, 23	Intercampus Sports and Cultural Fest</p>
<hr>
</div>
<p><h3>December</h3></p>
<hr>
<div class="december">
<img src="img/calendar7.png"  width="200" height="200">
</div>
<div class="december1">
<p>December 6, 7	Long Tests</p>
<p>December 14	Thanksgiving Celebrations</p>
<p>December 18	Start of Christmas Vacation</p>
<p>December 25	Christmas Day (Regular Holiday)</p>
<p>December 30	Rizal Day (Regular Holiday)</p>
<hr>
</div>
<p><h3>January</h3></p>
<hr>
<div class="jan">
<img src="img/calendar8.png"  width="200" height="200">
</div>
<div class="jan1">
<p>January 3, 2013	Classes Resume</p>
<p>January 10, 11	Midterm Examinations</p>
<p>January 28	Submission of Grades Sheets for Midterm</p>
<hr>
</div>
<p><h3>February</h3></p>
<hr>
<div class="feb">
<img src="img/calendar9.png"  width="200" height="200">
</div>
<div class="feb1">
<p>February 14, 15	Long Tests</p>
<p>February 18, 19, 20, 21, 22	College Week Celebrations</p>
<hr>
</div>
<p><h3>March</h3></p>
<hr>
<div class="march">
<img src="img/calendar10.png"  width="200" height="200">
</div>
<div class="march1">
<p>March 7, 8	Final Examinations (Graduating)</p>
<p>March 14, 15	Final Examinations (Non-Graduating)</p>
<p>March 18, 19, 20, 21, 22	Recognition / Graduation Rites</p>
<p>March 25	Last Day of Service for Faculty</p>
<hr>
</div>
	</div>
	<hr>
	</div>
  </div>
  
</div>
</div>
<div class="hero-unit-bud">
 <div class="hero-unit-yy">
<p><font color="white"><b>Related Sites</b></font></p>
<a href="https://vu.edu.bd/"><font color="white">Vu Web</font></a> 

</div>
</div>
<?php include('footer.php'); ?>
</div>
</div>


</body>


<div class="modal hide fade" id="pic">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
<div class="turn">
<img src="img/turnover.jpg" width="500" height="350"/>
</div>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>

<div class="modal hide fade" id="mission">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	 

	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
		
		
		<div class="modal hide fade" id="vision">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	

	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>

		
				<div class="modal hide fade" id="mandate">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	 
 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
		
						<div class="modal hide fade" id="hymm">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
<
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>


				<div class="modal hide fade" id="teacher">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

   
  <h2>Search Teacher Schedule</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="search_teacher_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Teacher:</label>
    <div class="controls">
   <select name="teacher" class="span333">
	<option>--Select--</option>
		<?php $teacher_query=mysqli_query($conn,"select * from teacher")or die(mysqli_error());
while($teacher_row=mysqli_fetch_array($teacher_query)){
	?>
	<font size="30"><option><?php echo $teacher_row['Name'] ?></option></font>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
    <option>3rd</option>
    <option>4th</option>
    <option>5th</option>
    <option>6th</option>
    <option>7th</option>
    <option>8th</option>
    <option>9th</option>
    <option>10th</option>
    <option>11th</option>
    <option>12th</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">Section:</label>
    <div class="controls">
   <select name="sy" class="span333">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
  
  
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
				
				
								<div class="modal hide fade" id="CYS">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">


  <h2>Search Course Year Section Schedule</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="CYS_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Course Year Section:</label>
    <div class="controls">
   <select name="CYS" class="span333">
	<option>--Select--</option>
	<?php $CYS_query=mysqli_query($conn,"select * from course")or die(mysqli_error());
while($CYS_row=mysqli_fetch_array($CYS_query)){
	?>
	<option><?php echo $CYS_row['course_year_section']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
    <option>3rd</option>
    <option>4th</option>
    <option>5th</option>
    <option>6th</option>
    <option>7th</option>
    <option>8th</option>
    <option>9th</option>
    <option>10th</option>
    <option>11th</option>
    <option>12th</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">Section:</label>
    <div class="controls">
   <select name="sy" class="span333">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
		
		
					<div class="modal hide fade" id="room">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

  <h2>Search Rooms Schedule</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="search_room_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Rooms:</label>
    <div class="controls">
   <select name="room" class="span333">
	<option>--Select--</option>
	<?php $room_query=mysqli_query($conn,"select * from room")or die(mysqli_error());
while($room_row=mysqli_fetch_array($room_query)){
	?>
	<option><?php echo $room_row['room_name']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
    <option>3rd</option>
    <option>4th</option>
    <option>5th</option>
    <option>6th</option>
    <option>7th</option>
    <option>8th</option>
    <option>9th</option>
    <option>10th</option>
    <option>11th</option>
    <option>12th</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">Section:</label>
    <div class="controls">
   <select name="sy" class="span333">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
	
	
					<div class="modal hide fade" id="exam_teacher">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

	    
  
  <h2>Search Teacher Schedule On Exam Day</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="exam_teacher_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Teacher:</label>
    <div class="controls">
   <select name="teacher" class="span333">
	<option>--Select--</option>
		<?php $teacher_query=mysqli_query($conn,"select * from teacher")or die(mysqli_error());
while($teacher_row=mysqli_fetch_array($teacher_query)){
	?>
	<font size="30"><option><?php echo $teacher_row['Name'] ?></option></font>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
    <option>3rd</option>
    <option>4th</option>
    <option>5th</option>
    <option>6th</option>
    <option>7th</option>
    <option>8th</option>
    <option>9th</option>
    <option>10th</option>
    <option>11th</option>
    <option>12th</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">Section:</label>
    <div class="controls">
   <select name="sy" class="span333">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
	  

 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
		
		
		
					<div class="modal hide fade" id="exam_room">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

  <h2>Search Rooms Schedule On Exam Day</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="exam_room_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Rooms:</label>
    <div class="controls">
   <select name="room" class="span333">
	<option>--Select--</option>
	<?php $room_query=mysqli_query($conn,"select * from room")or die(mysqli_error());
while($room_row=mysqli_fetch_array($room_query)){
	?>
	<option><?php echo $room_row['room_name']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
    <option>3rd</option>
    <option>4th</option>
    <option>5th</option>
    <option>6th</option>
    <option>7th</option>
    <option>8th</option>
    <option>9th</option>
    <option>10th</option>
    <option>11th</option>
    <option>12th</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">Section:</label>
    <div class="controls">
   <select name="sy" class="span333">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
	
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
		
					
								<div class="modal hide fade" id="exam_CYS">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

 
  <h2>Search Course Year Section Schedule On Exam Day</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal" method="POST" action="exam_CYS_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Department:</label>
    <div class="controls">
   <select name="CYS" class="span333">
	<option>--Select--</option>
	<?php $CYS_query=mysqli_query($conn,"select * from course")or die(mysqli_error());
while($CYS_row=mysqli_fetch_array($CYS_query)){
	?>
	<option><?php echo $CYS_row['course_year_section']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
    <option>3rd</option>
    <option>4th</option>
    <option>5th</option>
    <option>6th</option>
    <option>7th</option>
    <option>8th</option>
    <option>9th</option>
    <option>10th</option>
    <option>11th</option>
    <option>12th</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">Section:</label>
    <div class="controls">
   <select name="sy" class="span333">
	<option>--Select--</option>
<?php $sy_query=mysqli_query($conn,"select * from sy")or die(mysqli_error());
while($sy_row=mysqli_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['sy']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
  
  
 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
			
		
</html>



