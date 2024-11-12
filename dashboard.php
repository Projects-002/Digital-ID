<?php
include('database/db.php');

session_start();
if(!isset($_SESSION['user'])){
    header('location: index.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
</head>
<body>
    <div class="container-fluid">
        <!-- Header -->
        <header class="dashboard-header bg-success text-white text-center p-3">
            <h1>Welcome to the User Dashboard</h1>
            <nav>
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link text-white" href="#">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="courses.php">News</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Feedback</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Profile</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>

        <!-- Main Dashboard Section -->
        <section class="dashboard-main row mt-4">

            <!-- Assessments Section -->
            <div class="col-md-6 d-flex align-items-center justify-content-center mb-3">
                        <div class="certificate-container">
                            <!-- Borders -->
                            <div class="outer-border"></div>
                            <div class="inner-border"></div>

                            <!-- Header -->
                            <div class="certificate-header">
                                <h1>Digital Identity</h1>
                                <h2>This is awarded to</h2>
                                <div class="decorative-line"></div>
                            </div>

                            <!-- Awardee Name -->
                            <div class="certificate-awardee">

                                        <p class="alert alert-warning" role="alert">Ismael Bett</p>
                                
                            </div>

                            <!-- Certificate Body -->
                            <div class="certificate-body">
                                <p>The above name is recognized as a student at Zetech University</p>
                            </div>

                            <!-- Footer with Signatures and Badge -->
                            <div class="certificate-footer">
                                <div class="signature">
                                    <hr>
                                    <p>Hope</p>
                                    <small>Head Manager</small>
                                </div>
                                <div class="certificate-badge">
                                    <img src="https://img.icons8.com/emoji/48/000000/sports-medal-emoji.png" alt="Medal Icon">
                                </div>
                                <div class="signature">
                                    <hr>
                                    <p>Ismael Bett</p>
                                    <small>CEO and Founder</small>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </div>



    <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/67324dca2480f5b4f59bccc1/1ice7vo6r';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
    <!--End of Tawk.to Script-->



    <!-- Certificate styles -->

    <style>
        body {
            font-family: 'Times New Roman', serif;
            background-color: #f0f2f5;
        }
        .certificate-container {
            width: 90%;
            margin: 50px auto;
            padding: 40px;
            background: white;
            position: relative;
            border: 10px solid #f4f4f4;
            border-radius: 15px;
        }
        .certificate-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .certificate-header h1 {
            font-size: 2.8rem;
            font-weight: bold;
            color: #2f2f37;
        }
        .certificate-header h2 {
            font-size: 1.5rem;
            font-weight: normal;
            color: #2f2f37;
            margin-bottom: 50px;
        }
        .certificate-awardee {
            text-align: center;
            font-size: 2rem;
            font-weight: normal;
            margin-top: -20px;
            padding-bottom: 10px;
        }
        .certificate-body {
            text-align: center;
            font-size: 1.25rem;
            font-style: italic;
            color: #555;
            margin-top: 20px;
            margin-bottom: 40px;
        }
        .certificate-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 50px;
            padding: 0 60px;
        }
        .certificate-footer .signature {
            text-align: center;
            margin-top: 20px;
        }
        .certificate-footer .signature p {
            font-weight: bold;
            font-size: 1.1rem;
            color: #2f2f37;
        }
        .certificate-footer .signature small {
            font-size: 1rem;
            color: #888;
        }
        .certificate-badge {
            text-align: center;
            margin: 20px;
        }
        .certificate-badge img {
            width: 50px;
        }

        /* Borders */
        .outer-border {
            position: absolute;
            top: -25px;
            left: -25px;
            right: -25px;
            bottom: -25px;
            border: 8px solid #f2f2f2;
        }

        .inner-border {
            position: absolute;
            top: -15px;
            left: -15px;
            right: -15px;
            bottom: -15px;
            border: 4px solid #c7a64b;
        }

        /* Decorative line under the awardee name */
        .decorative-line {
            width: 150px;
            height: 3px;
            background-color: #c7a64b;
            margin: 0 auto;
        }
    </style>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript for Responsive Features -->
    <script>
        // Add additional interactivity or dynamic responsiveness with JavaScript if necessary
        window.onload = function () {
            console.log("Page loaded successfully!");
            // You can add JavaScript logic to enhance dashboard functionality if needed.
        }
    </script>




</body>
</html>
