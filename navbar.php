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

                <li class="menu-item dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="menu-item dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">M.Sc.</a>
                        <ul class="dropdown-menu">
                            <li class="menu-item "><a href="#">2 Yr M.Sc.</a></li>
                            <li class="menu-item "><a href="#">5 Yr M.Sc.</a></li>

                        </ul>
                    </li>
                    <li><a href="http://gate.iitk.ac.in/">Mtech.</a> </li>
                    <li><a href="http://www.iitkgp.ac.in/topfiles/phd.php">Phd.</a> </li>
                    <!--li class="menu-item dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">M.Sc.</a>
                        <ul class="dropdown-menu">
                            <li class="menu-item "><a href="#">Page with comments</a></li>
                            <li class="menu-item "><a href="#">Page with comments disabled</a></li>

                        </ul>
                    </li-->
                </ul>
                </li>

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
                <li><a href="10.109.60.60/MathsDepartment">Department of Mathematics</a></li>
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
    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
        // Avoid following the href location when clicking
        event.preventDefault();
        // Avoid having the menu to close when clicking
        event.stopPropagation();
        // If a menu is already open we close it
        //$('ul.dropdown-menu [data-toggle=dropdown]').parent().removeClass('open');
        // opening the one you clicked on
        $(this).parent().addClass('open');

        var menu = $(this).parent().find("ul");
        var menupos = menu.offset();

        if ((menupos.left + menu.width()) + 30 > $(window).width()) {
            var newpos = - menu.width();
        } else {
            var newpos = $(this).parent().width();
        }
        menu.css({ left:newpos });

    });
</script>



