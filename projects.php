<?php
  include 'nav-bar.php';
?>
 <!DOCTYPE html>
<html>
	<head>
		<title>Projects</title>
    <!--<link rel="stylesheet" type="text/css" media="screen" href="css/main.css">-->
    <link rel="stylesheet" type="text/css" media="screen" href="css/projects.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main_v2.css">
    <script type="text/javascript" src="JavaScript.js"></script>
    <link rel='icon' href='Images/Logo.png'/>
	</head>
	<body>
    <?php echo $nav_bar; ?>

		<main>
            <div class="Projects-Container">
                <div class="Project" id="p1">
                    <img class="Proj-Pic" src="Images/ic_launcher-web.png" />
                    <div class="tab-container">
                        <ul class="tab-links" data-tab-group="1">
                            <li><a id="ts11" class="active" href="#tab1">About the Project</a></li>
                            <li><a id="ts12" href="#tab2">Meet the Team</a></li>
                            <li><a id="ts13" href="#tab3">Enjoy the Project</a></li>
                        </ul>
                        <div id="tb11" data-tab-group="1" data-tab="tab1" class="tab active-content">
                            <h3 class="tab-hdr">About the Project</h3>
                            <div class="tab-content">
                                <p>EventMe is an app which allows users to post public or private events, provide descriptions and location details, and invite their friends in the area.</p>
                            </div>
                        </div>
                        <div id="tb12" data-tab-group="1" data-tab="tab2" class="tab">
                            <h3 class="tab-hdr">Meet the Team</h3>
                            <div class="tab-content">
                                <p>The main contributors to the EventMe app have been Michael McKenna, Liam Moran, and Michael Hall.</p>
                            </div>
                        </div>
                        <div id="tb13" data-tab-group="1" data-tab="tab3" class="tab">
                            <h3 class="tab-hdr">Enjoy the Project</h3>
                            <div class="tab-content">
                                <p>EventMe is still in production, but stay tuned for the first release on iOS and Android!</p>
                            </div>
                        </div>
                    </div>
                        <h1 class="Proj-Title">EventMe</h1>
						<button class="Proj-Expand" id="e1"><img class="Proj-Expand" src="Images/Expand.png" /></button>
                </div>
                <div class="Project" id="p2">
                    <img class="Proj-Pic" src="Images/logoSquare.png" />
                    <div class="tab-container">
                        <ul class="tab-links" data-tab-group="1">
                            <li><a id="ts21" class="active" href="#tab1">About the Project</a></li>
                            <li><a id="ts22" href="#tab2">Meet the Team</a></li>
                            <li><a id="ts23" href="#tab3">Enjoy the Project</a></li>
                        </ul>
                        <div id="tb21" data-tab-group="1" data-tab="tab1" class="tab active-content">
                            <h3 class="tab-hdr">About the Project</h3>
                            <div class="tab-content">
                                <p>This project is the website for the Aggie Coding Club. Since the club is all about coding, we thought it would be fitting to make our own website.</p>
                            </div>
                        </div>
                        <div id="tb22" data-tab-group="1" data-tab="tab2" class="tab">
                            <h3 class="tab-hdr">Meet the Team</h3>
                            <div class="tab-content">
                                <p>We have a very large team working on the website, led by Rohit Mucherla.</p>
                            </div>
                        </div>
                        <div id="tb23" data-tab-group="1" data-tab="tab3" class="tab">
                            <h3 class="tab-hdr">Enjoy the Project</h3>
                            <div class="tab-content">
                                <p>Luckily, you're enjoying this project as we speak! Check out the about us page for more info about the club, the contact page if you'd like to join, or the resources page if you just want to learn more about coding!</p>
                            </div>
                        </div>
                    </div>
                        <h1 class="Proj-Title"> ACC Website </h1>
						<button class="Proj-Expand" id="e2">
                                <img class="Proj-Expand" src="Images/Expand.png" />
                            </button>
                </div>
                <div class="Project kill" id="p3">
                    <img class="Proj-Pic" src="Images/Grover-Cleveland.jpg" />
                    <div class="tab-container">
                        <ul class="tab-links" data-tab-group="1">
                            <li><a id="ts31" class="active" href="#tab1">About the Project</a></li>
                            <li><a id="ts32" href="#tab2">Meet the Team</a></li>
                            <li><a id="ts33" href="#tab3">Enjoy the Project</a></li>
                        </ul>
                        <div id="tb31" data-tab-group="1" data-tab="tab1" class="tab active-content">
                            <h3 class="tab-hdr">About the Project</h3>
                            <div class="tab-content">
                                <p>Tincidunt integer eu augue augue nunc elit dolor, luctus placerat scelerisque euismod, iaculis eu lacus nunc mi elit, vehicula ut laoreet ac, aliquam sit amet justo nunc tempor, metus vel.</p>
                            </div>
                        </div>
                        <div id="tb32" data-tab-group="1" data-tab="tab2" class="tab">
                            <h3 class="tab-hdr">Meet the Team</h3>
                            <div class="tab-content">
                                <p>Tincidunt integer eu augue augue nunc elit dolor, luctus placerat scelerisque euismod, iaculis eu lacus nunc mi elit, vehicula ut laoreet ac, aliquam sit amet justo nunc tempor, metus vel.</p>
                            </div>
                        </div>
                        <div id="tb33" data-tab-group="1" data-tab="tab3" class="tab">
                            <h3 class="tab-hdr">Enjoy the Project</h3>
                            <div class="tab-content">
                                <p>Tincidunt integer eu augue augue nunc elit dolor, luctus placerat scelerisque euismod, iaculis eu lacus nunc mi elit, vehicula ut laoreet ac, aliquam sit amet justo nunc tempor, metus vel.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="Proj-Title">
                            Soccer Tracker App
                            <button class="Proj-Expand" id="e3">
                                <img class="Proj-Expand" src="Images/Expand.png" />
                            </button>
                        </h2>
                    </div>
                </div>
            </div>
		</main>
	</div>
	</body>
</html>