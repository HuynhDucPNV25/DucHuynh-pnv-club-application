<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
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

    label {
        font-weight: bold;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-check-label {
        margin-left: 5px;
    }

    .form-check {
        margin-bottom: 10px;
    }

    button.btn-primary {
        width: 100%;
        background-color: orange;
    }
</style>
</head>

<body>
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-4 text-right">
                <label for="exampleFormControlInput1">Name</label>
                <br><br>
                <label for="exampleFormControlSelect1">Club you want to apply</label>
                <br><br>
                <label>Be time for you</label>
                <br><br><br><br>
                <label for="exampleFormControlCheckbox">Your Skills</label>
            </div>
            <div class="col-6">
                <form action="result.php" method="get">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="club">
                            <option>Robotic Club</option>
                            <option>English Club</option>
                            <option>It Club</option>
                            <option>Music Club</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="time" id="exampleRadios1" value="Saturday mornings" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Saturday mornings
                        </label>
                        <br>
                        <input class="form-check-input" type="radio" name="time" id="exampleRadios2" value="Saturday afternoons">
                        <label class="form-check-label" for="exampleRadios2">
                            Saturday afternoons
                        </label>
                        <br>
                        <input class="form-check-input" type="radio" name="time" id="exampleRadios3" value="Sunday afternoons">
                        <label class="form-check-label" for="exampleRadios3">
                            Sunday afternoons
                        </label>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Checkbox 1" id="defaultCheck1" name="skills[]">
                                    <label class="form-check-label" for="defaultCheck1">
                                        the best coder
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Checkbox 2" id="defaultCheck2" name="skills[]">
                                    <label class="form-check-label" for="defaultCheck2">
                                        a super star
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Checkbox 3" id="defaultCheck3" name="skills[]">
                                    <label class="form-check-label" for="defaultCheck3">
                                        singer
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Checkbox 4" id="defaultCheck4" name="skills[]">
                                    <label class="form-check-label" for="defaultCheck4">
                                        the best eater
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Checkbox 5" id="defaultCheck5" name="skills[]">
                                    <label class="form-check-label" for="defaultCheck5">
                                        good in arts
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Checkbox 6" id="defaultCheck6" name="skills[]">
                                    <label class="form-check-label" for="defaultCheck6">
                                        a crazy dancer
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Checkbox 7" id="defaultCheck7" name="skills[]">
                                    <label class="form-check-label" for="defaultCheck7">
                                        good in design
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Checkbox 8" id="defaultCheck8" name="skills[]">
                                    <label class="form-check-label" for="defaultCheck8">
                                        good in speeches
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>  
        </div>
        <center>
            <button type="submit" class="btn btn-primary"><b>Submit</b></button></form>
        </center>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0FqU1Pdjy3+jn615lYO6fZ/xp6PTQv5+DTxvewaI6O9b0WczrA5ksx0Jp3C" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>