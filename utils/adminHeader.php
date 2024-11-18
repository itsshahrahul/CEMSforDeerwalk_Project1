<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>cems</title>
    <style>
        .bgImage {
            background-size: cover;
            background-position: center center;
            height: 600px;
            margin-bottom: 29px;
        }

        .navbar {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-nav {
            padding: 0;
            margin: 0;
        }

        .navbar-nav li {
            display: inline;
            margin-right: 20px;
        }

        .navbar-nav li a {
            color: #fff; 
            text-decoration: none;
            font-weight: bold;
        }

        .jumbotron {
            background-color: #cce5ff; /
            padding: 50px 20px;
            text-align: center;
            margin-top: 20px;
        }

        .jumbotron h1 {
            font-size: 36px;
            font-weight: bold;
            color:  #6fa8dc; 
        }
        
    </style>
</head>


        <?php require 'utils/styles.php'; ?>


<header class="bgImage" > 
    <nav class="navbar" >
        <div class="container">
            <div class="navbar-header">
             
                <a class = "navbar-brand">
                    College Event Management System
                </a> 
            </div>
            <ul class="nav navbar-nav navbar-right">
            <li><a href = "adminPage.php"><strong>Home</strong></a></li>
            <li><a href = "Stu_details.php"><strong>Student Details</strong></a></li>
                    <li><a href = "Stu_cordinator.php"><strong>Event Incharge</strong></a></li>
                    <li><a href = "Staff_cordinator.php"><strong>Event Co-ordinator</strong></a></li>
                    <li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "index.php">Logout <span class = "glyphicon glyphicon-log-out"></span></a></li>            
        
            </ul>
        </div>
    </nav>
    <div class = "col-md-12">
        <div class = "container">
            <div class = "jumbotron">
                <h1><strong>Explore<br></strong> Your Favorite Event</h1>
                <div class="browse d-md-flex col-md-14" >
                <div class="row">
                  
            </div>
        </div>
    </div>
</header>