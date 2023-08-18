<?php
// $connectionTimeoutSeconds = 120;  // Default of 15 seconds is too short over the Internet, sometimes.
//             $serverName = "a9yl7f8a5m.database.windows.net,1433";
//             $connectionInfo = array("Database"=>"db_6752cecb_1f7f_44c0_8aa0_65df1f5a0ef6", "UID"=>"db_6752cecb_1f7f_44c0_8aa0_65df1f5a0ef6_ExternalWriter", "PWD"=>"R&58vuQj+9yncwa", "LoginTimeout" => $connectionTimeoutSeconds);
//             $conn = sqlsrv_connect($serverName, $connectionInfo);
//             if ($conn === false) {
//                 die(print_r(sqlsrv_errors(), true));
//             }
// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "craigclifford@ospcf", "pwd" => "Icarus1..1", "Database" => "HiveX_2018-07-13T03-00Z_Copy", "LoginTimeout" => 120, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:ospcf.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from themes.3rdwavemedia.com/college-green/1.5.3/course-single.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 14 Jul 2016 21:10:19 GMT -->
<head>
    <title>Ohio School of Phlebotomy - Clinical Medical Assisting</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="assets/images/bw_min_osp_logo.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/plugins/pretty-photo/css/prettyPhoto.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="wrapper">
    <!-- ******HEADER****** -->
    <header class="header">
        <div class="top-bar">
            <div class="container">
                <ul class="social-icons col-md-6 col-sm-6 col-xs-12 hidden-xs">
                    <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
                    <li><a href="http://www.facebook.com/ohiophlebotomy" ><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" ><i class="fa fa-youtube"></i></a></li>
                    <!-- <li><a href="#" ><i class="fa fa-linkedin"></i></a></li> -->
                    <!-- <li><a href="#" ><i class="fa fa-google-plus"></i></a></li> -->
                    <!-- <li class="row-end"><a href="#" ><i class="fa fa-rss"></i></a></li> -->
                </ul><!--//social-icons-->
                <form class="pull-right search-form" role="search" method="GET" action="searchResults.php">
                    <div class="form-group">
                        <input type="text" name="classdata" class="form-control" placeholder="Search for class...">
                    </div>
                    <button type="submit" class="btn btn-theme">Go</button>
                </form>
            </div>
        </div><!--//to-bar-->
        <div class="header-main container">
            <h1 class="logo col-md-4 col-sm-4">
                <a href="index.php"><img class="img-resp" id="logo" style="width:80%;heigth:auto" src="assets/images/bw_osp_logo.png" alt="Logo"></a>
            </h1><!--//logo-->
            <div class="info col-md-8 col-sm-8">
                <ul class="menu-top navbar-right hidden-xs">
                    <li class="divider"><a href="index.php">Home</a></li>
                    <li class="divider"><a href="faq.php">FAQ</a></li>
                    <li class="divider"><a href="contact.html">Contact</a></li><li><a href="facultyLogin.php">Faculty</a></li>
                </ul><!--//menu-top-->
                <br />
                <div class="contact pull-right">
                    <p class="phone"><i class="fa fa-phone"></i>Call us today (614) 262-6691</p>
                    <p class="email"><i class="fa fa-envelope"></i><a href="mailto:info@ohiophlebotomy.com">info@ohiophlebotomy.com</a></p>
                </div><!--//contact-->
            </div><!--//info-->
        </div><!--//header-main-->
    </header><!--//header-->

    <!-- ******NAV****** -->
    <nav class="main-nav" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><!--//nav-toggle-->
            </div><!--//navbar-header-->
            <div class="navbar-collapse collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="index.php">Home</a></li>
                    <li class="active nav-item dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Courses <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="courses.php">Course Offerings</a></li>
                            <li class="dropdown-header">Courses</li>
                            <li><a href="plb.php">Phlebotomy</a></li>
                            <li><a href="acp.php">Accelerated Phlebotomy</a></li>
                            <li><a href="cma.php">Clinical Medical Assisting</a></li>
                            <li><a href="ekg.php">EKG Technician</a></li><li><a href="cla.php">Clinical Laboratory Assisting</a></li>
                            <li class="dropdown-header">Workshops</li>
                            <li><a tabindex="-1" href="awc.php">Advanced Wound Care</a></li><li><a tabindex="-1" href="apt.php">Advanced Phlebotomy Techniques</a></li>
                            <li><a tabindex="-1" href="dph.php">Donor Phlebotomy</a></li><li><a tabindex="-1" href="cpr.php">Red Cross CPR/AED/First Aid</a></li>
                            <li><a tabindex="-1" href="ivp.php">IV Infusion</a></li>
                            <!--<li><a tabindex="-1" href="pcs.php">Patient Care Services</a></li>-->
                            <li><a tabindex="-1" href="pmd.php">Paramedical Examiner</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a href="events.php">Events</a></li><li class="nav-item"><a href="news.php">News</a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Discover OSP <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="team.php">Leadership Team</a></li>
                            <li><a href="jobs.php">Jobs at OSP</a></li>
                            <li><a href="gallery.php">OSP Student Gallery</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="privacy.html">Privacy Policy</a></li>
                            <li><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                        </ul>
                    </li><!--//dropdown-->
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Alumni Resources <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="career.php">Career Assistance</a></li>
                            <li><a href="resumereview.php">Resume Review</a></li>
                            <li><a href="jobboard.php">Alumni Job Boards</a></li>
                            <li><a href="counseling.php">Career Counseling </a></li>
                            <li><a href="transcript.php">Transcript Request</a></li>
                            <li><a href="certificate.php">Replacement Certificates</a></li>
                        </ul>
                    </li><!--//dropdown-->
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Community Resources <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="becomeext.php">Become an Externship Site</a></li>
                            <li><a href="postjob.php">Post a Job for OSP Grads</a></li>
                            <li><a href="requestvolunteers.php">Request Student Volunteers</a></li>
                            <li><a href="hosthiringfair.php">Host a Hiring Fair </a></li>
                            <li><a href="on-sitetraining.php">On-Site Training for Employers</a></li>
                            <li><a href="verifyedu.php">Verify a OSP Certificate</a></li>
                        </ul>
                    </li><!--//dropdown-->
                    <li class="nav-item"><a href="register2.php">Register</a></li><li class="nav-item"><a href="payments.php">Payments</a></li>
                </ul><!--//nav-->
            </div><!--//navabr-collapse-->
        </div><!--//container-->
    </nav><!--//main-nav-->

    <!-- ******CONTENT****** -->
    <div class="content container">
        <div class="page-wrapper">
            <header class="page-heading clearfix">
                <h1 class="heading-title pull-left">Clinical Medical Assisting</h1>
                <div class="breadcrumbs pull-right">
                    <ul class="breadcrumbs-list">
                        <li class="breadcrumbs-label">You are here:</li>
                        <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                        <li><a href="courses.php">Course</a><i class="fa fa-angle-right"></i></li>
                        <li class="current">Clinical Medical Assisting</li>
                    </ul>
                </div><!--//breadcrumbs-->
            </header>
            <div class="page-content">
                <div class="row page-row">
                    <div class="course-wrapper col-md-8 col-sm-7">
                        <article class="course-item">
                            <p class="featured-image page-row"><img class="img-responsive" src="assets/images/courses/medast.jpg" alt=""/></p>
                            <div class="page-row box box-border">
                                <ul class="list-unstyled no-margin-bottom">
                                    <li><strong>Start date:</strong> <em>Revolving</em></li>
                                    <li><strong>Duration: </strong> <em>11 Weeks</em></li>
                                    <li><strong>Level: </strong> <em>Beginner</em></li>
                                    <li><strong>Location: </strong> <em>On-Site</em></li>
                                </ul>
                            </div><!--//page-row-->
                            <div class="page-row">
                                <div style=margin-top:10px;>
                                    <p>Because of the high demand for Medical Assistants with phlebotomy skills, OSP offers Clinical Medical Assistant programs suitable for all experience levels. We are committed to teaching the essential fundamentals for starting a career as a Medical Assistant. Students gain valuable experience in both hands on teaching and understanding the premise of direct patient care.
                                    </p>
                                    <p>Our comprehensive courses will allow you to learn the techniques for performing accurate vitals, medical histories, phlebotomy, CLIA-waived testing, wound dressing, injections and front office standard procedures. Our instructors will guide you as you gain a thorough understanding of the following:
                                    </p>
                                    <li>EKG Administration</li>
                                    <li>Laboratory & CLIA-Waived Tests</li>
                                    <li>Phlebotomy & Specimen Handling</li>
                                    <li>Medications & Pharmacology</li>
                                    <li>Patient & Exam Room Preparation</li>
                                    <li>Charting & Medical Histories</li>
                                    <li>HIPAA & Patient's Rights</li>
                                    <li>Standard Precautions & Safety</li>
                                    <li>Medical Terminology</li>
                                    <li>Anatomy & Physiology</li>
                                    <li>Injections & Wound Dressing</li>
                                    <li>Professionalism & Office Tasks</li>
                                    <br>
                                    <p><strong>Clinical Medical Assisting Programs Admissions Requirements:</strong></p>
                                    <li>18 Years of Age or Older</li>
                                    <li>High School Diploma, GED, or International High School Diploma Equivalency</li>
                                    <br>
                                    <p>For 11 weeks, students will met twice a week for lecture and hands-on labs (CMA). Students with an initial overall grade of B or higher and instructor recommendation are eligible for an optional clinical externship placement in the 3 months following the end of the program, by registering for CMX.</p>

                                    <li>CMA Total Cost: $1,800</li>
                                    <li>CMX Total Cost: $300 <span style="color:red">(optional)</span></li>
                                    <br>
                                    <p style="font-size:12px;">See upcoming class dates on the schedule page and register today to secure your seat in an upcoming session!</p>
                                </div><!--//sort-->
                                <br>
                                <div class="tabbed-info page-row">
                                    <ul class="nav nav-tabs" id="nav-tabs">
                                        <li class="active"><a href="#tab1" data-toggle="tab">Course structure</a></li>
                                        <li><a href="#tab2" data-toggle="tab">Fees</a></li>
                                        <li><a href="#tab3" data-toggle="tab">Payment Plans</a></li>
                                        <li><a href="#tab4" data-toggle="tab">Externships</a></li>
                                        <li><a href="#tab5" data-toggle="tab" style="color:red">Certification</a></li>
                                        <li><a href="#tab6" data-toggle="tab">Job Outlook</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <p>The 11-Week medical assisting program consists of the three/four following parts:</p>
                                            <div class="table mini6">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>Lecture</th>
                                                        <th>Skills Lab</th>
                                                        <th>Assessments</th>
                                                        <th>Externship</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Two sessions per week for 11 weeks, with each session lasting 4 hours.</td>
                                                        <td>Mechanics of equipment and hands-on guidance.</td>
                                                        <td>Nine quizzes are required and given weekly in class.</td>
                                                        <td><b>Optional</b> for graduates with a B or higher and instructor recommendation.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>A book is provided to you for reference during and after the program.</td>
                                                        <td>Anthropometric measurements, vital signs, and patient interaction simulations.</td>
                                                        <td>Comprehensive multiple-choice final examination and national certification exam.</td>
                                                        <td>40-hour to 120-hour placement in a clinical patient care setting.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Material is presented by a qualified and state approved instructor and overseen by a physician.</td>
                                                        <td>Sample collection, preparation, handling, and comprehensive charting skills.</td>
                                                        <td>Final evaluation of your practical skills at the end of the program.</td>
                                                        <td>Coordinated by the school at one of our partner facilities.</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div><!--//table-responsive-->
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <p>The following is the break-down for tuition and fees for the Clinical Medical Assisting program:</p>
                                            <ul>
                                                <li>Registration Fee: $100</li>
                                                <li>Tuition: $1000</li>
                                                <li>Laboratory Fee: $450</li>
                                                <li>Textbook Fee: $100</li>
                                                <li>National Certification Exam Fee: $150</li>
                                            </ul>
                                            <i style="color:grey">Registration fee is due to hold your seat in the program and is nonrefundable after 3 business days</i>
                                        </div>
                                        <div class="tab-pane" id="tab3">
                                            <p>Payment plans are available to divide the cost of the program over the time you are enrolled. These plans are provided at no additional cost and available to all students. You can choose one of the three payment plans listed below to pay for your enrollment in the Clinical Medical Assisting program at OSP:</p>
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Plan A</th>
                                                        <th>Plan B</th>
                                                        <th>Plan C</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th>Registration Fee</th>
                                                        <td>$100 at Registration</td>
                                                        <td>$100 at Registration</td>
                                                        <td>$100 at Registration</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Week 1</th>
                                                        <td>$850</td>
                                                        <td>$160</td>
                                                        <td>$300</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Week 2</th>
                                                        <td>$85</td>
                                                        <td>$160</td>
                                                        <td>$0</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Week 3</th>
                                                        <td>$85</td>
                                                        <td>$160</td>
                                                        <td>$300</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Week 4</th>
                                                        <td>$85</td>
                                                        <td>$160</td>
                                                        <td>$0</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Week 5</th>
                                                        <td>$85</td>
                                                        <td>$160</td>
                                                        <td>$300</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Week 6</th>
                                                        <td>$85</td>
                                                        <td>$160</td>
                                                        <td>$0</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Week 7</th>
                                                        <td>$85</td>
                                                        <td>$160</td>
                                                        <td>$300</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Week 8</th>
                                                        <td>$85</td>
                                                        <td>$160</td>
                                                        <td>$0</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Week 9</th>
                                                        <td>$85</td>
                                                        <td>$160</td>
                                                        <td>$300</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Week 10</th>
                                                        <td>$85</td>
                                                        <td>$160</td>
                                                        <td>$0</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Week 11</th>
                                                        <td>$85</td>
                                                        <td>$100</td>
                                                        <td>$200</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div><!--//table-responsive-->
                                        </div>
                                        <div class="tab-pane" id="tab4">
                                            <p>Ohio School of Phlebotomy does not require students to participate in clinical externships because the various needs of students do not make it a necessary aspect of the educational experience for all of our learners. If you believe the externship would be beneficial to you as you get started in the field of medical assisting, externships are available for graduates of the Clinical Medical Assisting. Students are eligible for placement within 3 months of the last day of program schedule. Students must have completed the entire program, including successfully passing the CCMA exam, and must have finished the program with an initial overall grade of B or higher. A positive recommendation letter from your instructor is required to be eligible to placement.<br>
                                                <br>The total cost of placement in a Clinical Medical Assisting externship is $300 ($100 due at time of registration, $200 due at time of acceptance of the assignment).<br>
                                                <br>The clinical externship is between 40-hours and 120-hours in length, depending on the preference of the hosting facility, and is an unpaid placement. Our externship coordinator will determine the site and date of your placement with one of our many partner facilities and will communicate with you about the requirements that must be completed before placement. These vary based on site, but include health and other screenings such as immunization records, TB tests, background checks, and health assessments by a physician. The cost of completing these requirements is an out-of-pocket expense for the student. Placements can be anywhere within the central Ohio region and the schedule will be set by the hosting facility. Hours are not flexible and almost always performed during normal business hours on weekdays, Monday through Friday, but the exact schedule will be facility-dictated. </p>
                                            <ul>
                                                <li><a href="http://www.ohiophlebotomy.com/register2.php">Register for a CMX (Clinical Medical Assisting Externship) placement today</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="tab5">
                                            <p>The Ohio School of Phlebotomy is an approved Clinical Medical Assisting certificate program through the Ohio State Board of Career Colleges and Schools. Students who have successfully completed the Clinical Medical Assisting program will sit for an approved national examination through the National Healthcareer Association (NHA) to become a <strong>Certified Clinical Medical Assistant (CCMA)</strong> on the last day of the program. Successful completion of the CCMA exam is required to pass the program at OSP so every single graduate of the CMA program leaves school certified and ready for the job market. <br>
                                                <br>Students do not need to register for the CCMA exam until directed to do so by their instructor. The following is a list of dates when current and future classes will be participating in the CCMA exam for the reference of students who need to schedule a retake or makeup exam:</p>

                                            <?php
                                            include_once 'connectsql.php';
                                            $tsql = "SELECT id, exam, FORMAT([testdate], 'MMMM dd, yyyy') as testdate,
                                            testtime,school, FORMAT([closed], 'MMMM dd, yyyy') as closed 
                                            FROM  access.nha 
                                            where school = 'OSP' AND exam = 'CMA' AND closed > GETDATE() order by testdate DESC";
                                            $stmt = sqlsrv_query($conn, $tsql);
                                            $rows = sqlsrv_has_rows( $stmt );
                                            if ($rows == 'true') {
                                                echo '<div style="margin:0px;padding:0px;">
                                                                <div class="div2" style="margin-bottom:18px;">
                                                                <div class="div1">
                                                                <table class="tableclass">
                                                                <tr><th>TESTING DATE</th><th>EXAM TIME</th><th><span class="hidden-xs">REGISTRATION</span><span class="visible-xs-inline">REG</span> DATE</th></tr>';
                                                while ($row = sqlsrv_fetch_array($stmt)){
                                                    echo "<tr><td>" .$row[exam]. " - ".$row[testdate] . "</td><td>" . $row[testtime] . " </td><td>" . $row[closed] . " </td></tr>";
                                                }
                                                echo '
                                                        </table></div></div></div>';
                                            } else {
                                                echo "<div class=\"div2\" style=\"margin-bottom:18px;\"><div class=\"div1\"><h5 class=\"h41\">No dates scheduled. Please call the office</h5></div></div>";
                                            }
                                            ?>
                                            <ul>
                                                <li><a href="www.nhanow.com">Register through the NHA website</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="tab6">
                                            <p>One of the major factors to consider when pursuing education in any field is the what the hiring market looks like for students after graduation. While no school can guarantee that graduates will find a job, OSP is committed to providing career assistance services that will guide the student through the job application process.</p>
                                            <div class="table mini6">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>Quick Facts</th>
                                                        <th>Medical Assistants </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th>2015 Median Pay</th>
                                                        <td>$30,590 per year ($14.71 per hour)</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Typical Entry-Level Education</th>
                                                        <td>Postsecondary nondegree award</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Work Experience Required in a Related Occupation</th>
                                                        <td>None</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Additional On-the-job Training Required</th>
                                                        <td>None</td
                                                    </tr>
                                                    <tr>
                                                        <th>Number of Jobs (2014)</th>
                                                        <td>591,300</td
                                                    </tr>
                                                    <tr>
                                                        <th>Job Outlook (2014-2024)</th>
                                                        <td>23% (Much faster than average)</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Employment Change (2014-2024)</th>
                                                        <td>138,900</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p><b>Data Table From: </b>Bureau of Labor Statistics, U.S. Department of Labor, <i>Occupational Outlook Handbook, 2016-17 Edition,</i>  Medical Assistants, on the Internet at <a href="http://www.bls.gov/ooh/healthcare/medical-assistants.htm">http://www.bls.gov/ooh/healthcare/medical-assistants.htm</a> (data retrieved September 12, 2016).</p>
                                            </div><!--//table-responsive-->
                                        </div>
                                    </div><!--//tabbed-info-->




                                    <div style="margin-top:20px">
                                        <p style="color:red">The NHA CCMA exam is required to complete the Clinical Medical Assisting class and is administered on the final day in class.</p>
                                        <div class="div2">
                                            <div class="div1">
                                                <?
                                                $school = "OSP";
                                                $classnm = "CMA";
                                                include_once 'connectsql.php';
                                                //$conn = sqlsrv_connect($serverName, $connectionOptions);
                                                $tsql = "SELECT top 1 classtitle, day FROM  access.CurrentClasses WHERE ClassName = '$classnm' order by classkeyid DESC";
                                                $data = sqlsrv_query($conn, $tsql);
                                                $row = sqlsrv_fetch_array($data);
                                                $ClassNameLong = $row[0];

                                                if ($classnm == "PLB") {
                                                    $classlen = "Classes meet twice a week for 6 weeks.";
                                                } elseif ($classnm == "AcP") {
                                                    $classlen = "Classes meet twice a week for 4 weeks.";
                                                } elseif ($classnm == "ACC") {
                                                    $classlen = "Classes meet once a week for 6 weeks.";
                                                } elseif ($classnm == "EKG") {
                                                    $classlen = "Classes meet twice a week for 6 weeks.";
                                                } elseif ($classnm == "CMA") {
                                                    $classlen = "Classes meet two or three times a week for 11 or 7.5 weeks depending on class selected.";
                                                } elseif ($classnm == "IVP") {
                                                    $classlen = "Classes meet twice a week for 2 weeks. ";
                                                } elseif ($classnm == "CLA") {
                                                    $classlen = "Classes meet twice a week for 6 weeks. ";
                                                } elseif ($classnm == "CR1") {
                                                    $classlen = "Classes meet twice a week for 3 weeks. ";
                                                } elseif ($classnm == "CR2") {
                                                    $classlen = "Classes meet twice a week for 3 weeks. ";
                                                } elseif ($classnm == "CMX") {
                                                    $classlen = "Session meets five times a week for 1 weeks. ";
                                                }else {
                                                    $classlen = "Classes meet for one session.";
                                                }
                                                ?>
                                                <h2 class="h21">Upcoming <?php echo date("Y"); echo "/"; echo date("Y",strtotime("+1 year")); echo " ";?><? echo htmlspecialchars($ClassNameLong)?> Schedule</h2>
                                                <h4 class="h41"><? echo htmlspecialchars($classlen)?></h4>
                                                <?php
                                                $school = "OSP";
                                                $ClassX = "CMA";
                                                include_once 'connectsql.php';
                                                //$conn = sqlsrv_connect($serverName, $connectionOptions);
                                                $tsql = "SELECT COUNT(DISTINCT DaySession) FROM  access.CurrentClasses WHERE ClassName = '$ClassX' AND School = '$school' AND Status = 'Open'";
                                                $getClasses = sqlsrv_query($conn, $tsql);
                                                $row1 = sqlsrv_fetch_array($getClasses);
                                                $tabs = $row1[0];
                                                if ($tabs == '0'){ echo "<div style='border:1px solid LightGray;margin:10px;'><h4 style='text-align:center;color:gray;font-family:\"Times\";'>There are no classes scheduled at this time</h4></div>"; }
                                                $tsql = "SELECT DISTINCT tableheader2 FROM  access.CurrentClasses WHERE ClassName = '$ClassX' AND School = '$school' AND Status = 'Open'";
                                                $getClasses = sqlsrv_query($conn, $tsql);

                                                while ($row1 = sqlsrv_fetch_array($getClasses)) {

                                                    echo "<table class='tableclass'>";
                                                    echo "<tr><th colspan=4 class='th1' style='background: rgba(15, 100, 60, 0.25);'>$row1[0]</th></tr>";
                                                    // echo "<tr><th colspan=4 style='background-color: white;'> </th></tr>";
                                                    echo "<tr><th>CLASS/ID</th><th>START DATE</th><th>END DATE</th><th>SEATS</th></tr>";

                                                    $tsql0 = "SELECT COUNT(classkeyid) FROM  access.CurrentClasses WHERE tableheader2 = '$row1[0]' AND school = '$school' AND status = 'Open'";
                                                    $getrows = sqlsrv_query($conn, $tsql0);
                                                    $rows = sqlsrv_fetch_array($getrows);
                                                    $rowz = $rows[0]+2;
                                                    //  echo $rowz;

                                                    $tsql1 = "SELECT [ClassName], FORMAT([ClassStartDate], 'MMMM dd, yyyy'), FORMAT(coalesce(classenddate,[ClassEndDateC]), 'MMMM dd, yyyy'), [Status], [classkeyid] FROM (SELECT TOP $rowz * FROM access.CurrentClasses WHERE tableheader2 = '$row1[0]' ORDER BY ClassStartDate DESC) CurrentClasses ORDER BY ClassStartDate ASC";
                                                    $getProducts1 = sqlsrv_query($conn, $tsql1);
                                                    if ($getProducts1 == FALSE)
                                                        die(FormatErrors(sqlsrv_errors()));

                                                    while ($row = sqlsrv_fetch_array($getProducts1)){




                                                        $tsql2 = "SELECT COUNT(id) from  access.registrations where program = '$row[classkeyid]' AND regfeepaid = '1'";
                                                        $getProducts2 = sqlsrv_query($conn, $tsql2);
                                                        if ($getProducts2 == FALSE)
                                                            die(FormatErrors(sqlsrv_errors()));
                                                        $row2 = sqlsrv_fetch_array($getProducts2);
                                                        if ($row[0] == "PLB" || $row[0] == "AcP") {
                                                            $remainx = 28 - $row2[0];
                                                            $remain = ($remainx > 5 ? "Open" : "Limited");
                                                        } elseif ($row[0] == "CMA" || $row[0] == "CLA" || $row[0] == "EKG") {
                                                            $remainx = 14 - $row2[0];
                                                            $remain = ($remainx > 4 ? "Open" : "Limited");

                                                        } else {
                                                            $remainx = 6 - $row2[0];
                                                            $remain = ($remainx > 2 ? "Open" : "Limited");
                                                        }

                                                        if ($row[3] == "Open") {
                                                            if (strpos($row[1], '2018') !== FALSE) {
                                                                echo "<tr><td>" . $row[0] . $row[4] . " </td><td>" . $row[1] . " </td><td>" . $row[2] . " </td><td>" . $row[3] . " </td></tr>";
                                                            } else {

                                                                echo "<tr style='font-weight:500; background-color: rgba(200, 10, 10, 0.05);'><td>" . $row[0] . $row[4] . " </td><td>" . $row[1] . " </td><td>" . $row[2] . " </td><td>" . $remain . " </td></tr>";
                                                            }
                                                        } else {
                                                            echo "<tr style='color: rgba(0, 0, 0, 0.41);'><td>" . $row[0] . $row[4] . " </td><td>" . $row[1] . " </td><td>" . $row[2] . " </td><td>" . $row[3] . " </td></tr>";
                                                        }
                                                    }
                                                    echo "</table><div class='div3'></div>";
                                                }
                                                // sqlsrv_free_stmt($getProducts);
                                                echo "<div class='div4'>";
                                                echo "OHIO SCHOOL OF PHLEBOTOMY<br>2017";
                                                echo "</div>";
                                                ?>
                                            </div>
                                        </div>
                                    </div><!--//sort-->
                                </div><!--//page-row-->

                        </article><!--//course-item-->
                    </div><!--//course-wrapper-->
                    <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                        <section class="widget has-divider">
                            <h3 class="title">Why Medical Assisting</h3>
                            <p>Medical Assistants are consistently in high demand because of the breadth of their skillset. The varied abilities and knowledge MAs bring to the hospital, practice, or other clinical environment makes them indispensable to most healthcare facilities. It's a great entry-level job that can become a long-term career or lead you to the next step.</p>

                        </section><!--//widget-->
                        <section class="widget has-divider">
                            <h3 class="title">Register Online</h3>
                            <p>Hold your seat in an upcoming class today! It's easy, secure, and only takes about 5 minutes.</p>
                            <p class="promo-badge">
                                <a class="FireBush" href="register2.php">
                                    <span class="off" >Register</span>
                                    <br>
                                    <span class="off" >online!</span></span>
                                </a>
                            </p>
                        </section><!--//widget-->
                        <section class="widget has-divider">
                            <h3 class="title">Inquire about this course</h3>
                            <p>Please call with any questions. We are happy to help in any way we can.</p>
                            <p class="tel"><i class="fa fa-phone"></i>Tel: (614) 262-6691</p>
                            <p class="email"><i class="fa fa-envelope"></i>Email: <a href="mailto:info@ohiophlebotomy.com">info@ohiophlebotomy.com</a></p>
                        </section><!--//widget-->
                        <section class="widget has-divider">
                            <h3 class="title">Related courses</h3>
                            <ul class="list-unstyled">
                                <li><a href="ivp.php"><i class="fa fa-book"></i> IV Infusion Workshop</a></li>
                                <li><a href="awc.php"><i class="fa fa-book"></i> Suture & Advanced Wound Care Workshop</a></li>
                                <li><a href="apt.php"><i class="fa fa-book"></i> Advanced Phlebotomy Techniques</a></li>
                            </ul>
                        </section><!--//widget-->
                        <?php
                        include_once 'connectsql.php';
                        $tsql = "SELECT id, exam, CONVERT(varchar,testdate,100) as testdatex,testtime,school, CONVERT(varchar,closed,100) as closed FROM  access.nha where school = 'OSP' AND exam = 'CMA' AND closed > GETDATE() order by testdate ASC";
                        $stmt = sqlsrv_query($conn, $tsql);
                        $rows = sqlsrv_has_rows( $stmt );
                        if ($rows == 'true') {
                            echo '<section class="widget has-divider">
                                <h3 class="title">Upcoming CCMA Exam dates</h3>
                                <div style="margin:0px;padding:0px;">
                                <div class="div1">
                                    <table class="tableclass mini">
                                    <tr><th>DATE</th><th>TIME</th><th>REG CLOSES</th></tr>';
                            while ($row = sqlsrv_fetch_array($stmt)){
                                echo "<tr><td>".$row[testdatex] . "</td><td>" . $row[testtime] . " </td><td>" . $row[closed] . " </td></tr>";
                            }
                            echo '
                                    </table></div></div></section>';
                        }
                        ?>
                    </aside>
                </div><!--//page-row-->
            </div><!--//page-content-->
        </div><!--//page-->
    </div><!--//content-->
</div><!--//wrapper-->

<!-- ******FOOTER****** -->
<?php $footer = file_get_contents('footer.html'); print $footer; ?>

<!-- Javascript -->
<script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
<script type="text/javascript" src="assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="assets/plugins/jflickrfeed/jflickrfeed.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

</body>

<!-- Mirrored from themes.3rdwavemedia.com/college-green/1.5.3/course-single.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 14 Jul 2016 21:10:19 GMT -->
</html>

