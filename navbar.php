  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">LOGO</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar">
            <ul class="nav navbar-nav" id="navbarlist">
                <li class="active"><a href="index.php">Home</a></li>
               
                <li><a href="department.php">Department</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academics<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="sports_gc.php">Courses Offered</a></li>
                    <li><a href="tech_gc.php">Curricula</a></li>
                    <li><a href="soccult_gc.php">Subjects Offered</a></li>
                </ul>
                <li class="dropdown"><a href="fests.php">Admission</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Research<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="sports_gc.php">Overview</a></li>
                    <li><a href="publications.php">Publications</a></li>
                    <li><a href="sponsoredprojects.php">Sponsored Projects</a></li>
                    <li><a href="soccult_gc.php">Thesis Submitted</a></li>
                    <li><a href="soccult_gc.php">Projects</a></li>
                </ul>
                <li><a href="officebearers.php">Jobs</a></li>
                <li><a href="officebearers.php">Colloquium</a></li>

                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="10.109.60.60/GymkhanaRevamped">Department of Mathematics</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quick Links <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="www.iitkgp.ac.in">IIT Kharagpur</a></li>
                    <li><a href="http://noticeboard.iitkgp.ernet.in/">Institute Notice Board</a></li>
                    <li><a href="http://www.webmath.iitkgp.ernet.in/feedback.php">Feedback</a></li>
                </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
        </nav>
  <script>
      $('li').click(function() {
          if ( ! $(this).hasClass('active')) {
              $('li.active').removeClass('active');
              $(this).addClass('active');
              // Do more stuff here
          }
      });
  </script>



