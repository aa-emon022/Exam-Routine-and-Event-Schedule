<?php include('session.php');  include('header.php'); include('dbcon.php'); ?>
<body>

<?php include('nav-top1.php'); ?>
    <div class="navbar navbar-fixed-top1">
    <div class="navbar-inner">
    <div class="container">
	<div class="marg">
    <ul class="nav">
  <li class="active">
    <a href="home.php"><i class="icon-home icon-large"></i>Home</a>
  </li>
  
   <li class="divider-vertical"></li>
  <li><a href="schedule.php"><i class="icon-group icon-large"></i>Class Schedule</a></li>
   <li class="divider-vertical"></li>
    <li><a href="exam_schedule.php"><i class="icon-group icon-large"></i>Exam Schedule</a></li>
   <li class="divider-vertical"></li>
  <li><a href="record.php"><i class="icon-list icon-large"></i>Entry</a></li>
   <li class="divider-vertical"></li>
  <li><a href="history_log.php"><i class="icon-table icon-large"></i>History Log</a></li>
  <li class="divider-vertical"></li>
  <li><a href="./cal/index.php"><i class="icon-table icon-large"></i>Calender</a></li>
     <li class="divider-vertical"></li>
  <li><a href="user_account.php"><i class="icon-user icon-large"></i>User Account</a></li>
  <li class="divider-vertical"></li>
  <li><a id="logout" data-toggle="modal" href="#myModal"><i class="icon-signout icon-large"></i>Logout</a></li>
   <li class="divider-vertical"></li>
</ul>
    </div>
    </div>
    </div>
    </div>
<div class="wrapper">



	

<div id="element" class="hero-body-schedule">
<div class="hero-unit-home">
    <div class="alert alert-info">
   <h2>Welcome to Vu Class Schedule System</h2>
    </div>


	</div>	
<div class="peace">
  <center>
    <div id="piecemaker">
      <p>Varendra University</p>
    </div>
    </center>
</div>

	

<div class="sv">
	<div class="hero-unit-mission1">
	<p><h2>Mission</h2></p>
	The mission of the university is to contribute to national development by producing innovative, skilled, and technologically trained manpower. Ours is a knowledge-based society, and we hope to equip our students with knowledge and skill to face global challenges and become leaders of innovation in different fronts of practical life. The mission of VU also includes the promotion of humanism and peace through liberal education. 
	</div>
	
		<div class="hero-unit-mission2">
	<p><h2>The vision of Varendra University is to emerge as one of the leading and premier centers of higher studies in arts, social science, science, engineering and technology. We aim at providing an education of high excellence to our young learners in a congenial and friendly atmosphere, and attracting brilliant students, distinguished scholars, researchers, scientists from home and abroad.</h2></p>

None
	</div>
	
	</div>	
	</div>	
		
	

<?php include('footer.php');?>
</div>
</body>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout.php" class="btn btn-primary">Yes</a>
		</div>
		</div>
		
	
