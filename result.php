<!doctype html>
<html lang="en">

<head>
    <title>Result</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            box-shadow: 2px 2px 4px 0 rgba(0, 0, 0, 0.2);
            margin-top: 50px;
            padding: 30px;
            background-color: pink;
        }

        img {
            width: 100px;
            height: 80px;
        }

        h1 {
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 10px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Phương thức Get -->
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "GET") {
                        $name = $_GET["name"];
                        $club = $_GET["club"];
                        $time = $_GET["time"];
                        $skills = isset($_GET["skills"]) ? $_GET["skills"] : array();
                        echo "<center>";
                        echo "<img style='width:100px;height:80px;' src='https://png.pngtree.com/png-clipart/20190614/original/pngtree-vector-award-icon-png-image_3773685.jpg'>";
                        echo "<h1><strong>Thank you</strong> $name !!</h1>";
                        echo "<p>We received your application for the $club</p>";

                        if (!empty($skills)) {
                            echo "<p>You are a " . implode(" and ", $skills) . "</p>";
                        } else {
                            echo "<p>None selected</p>";
                        }

                        echo "<p>You will be available on $time</p>";
                        echo "</center>";
                    } else {
                        echo "<p>Have a Nice day</p>";
                    }
                ?>

                <!-- Phương thức Post -->
                <!-- <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name = $_POST["name"];
                        $club = $_POST["club"];
                        $time = $_POST["time"];
                        $skills = isset($_POST["skills"]) ? $_POST["skills"] : array();
                        echo "<center>";
                        echo "<img style='width:100px;height:80px;' src='https://png.pngtree.com/png-clipart/20190614/original/pngtree-vector-award-icon-png-image_3773685.jpg'>";
                        echo "<h1><strong>Thank you</strong> $name !!</h1>";
                        echo "<p>We received your application for the $club</p>";

                        if (!empty($skills)) {
                            echo "<p>You are a " . implode(" and ", $skills) . "</p>";
                        } else {
                            echo "<p>None selected</p>";
                        }
                        echo "<p>You will be available on $time</p>";
                        echo "</center>";
                    } else {
                        echo "<p>Have a good day</p>";
                    }
                ?> -->
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0FqU1Pdjy3+jn615lYO6fZ/xp6PTQv5+DTxvewaI6O9b0WczrA5ksx0Jp3C" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>