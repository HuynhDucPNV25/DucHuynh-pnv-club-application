<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
    
        input[type="checkbox"]::before {
            content: '';
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 1px solid grey;
            background-color: white;
            margin-right: 5px;
        }

        input[type="checkbox"]:checked::before {
            background-color: orange;
        }
        .container {
            box-shadow: 2px 2px 4px 0 rgba(0, 0, 0, 0.2);
            margin-top: 50px;
            padding: 30px;
            border: 6px dashed orange;   
        }

        button.btn-primary {
            width: 100%;
            background-color: orange;
        }
        .form-check-input{
            accent-color: orange;
            width: 20px;
            height: 20px;
           
        }
        .form-check-label{
            padding-left: 10px;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container ">
        <div class="row ">
            <div class="col">
                <form action="result.php" method="get" class="">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-right">
                                <label for="name">Name</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-right">
                                <label for="club">Club you want to apply</label>
                            </div>
                            <div class="col-8">
                                <select class="form-control" id="club" name="club">
                                    <option>Robotic Club</option>
                                    <option>English Club</option>
                                    <option>IT Club</option>
                                    <option>Music Club</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-right">
                                <label>Best time for you</label>
                            </div>
                            <div class="col-8 ">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="time" id="morning" value="Saturday mornings">
                                            <label class="form-check-label" for="morning">Saturday mornings</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="time" id="sunday" value="Sunday afternoons">
                                            <label class="form-check-label" for="sunday">Sunday afternoons</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="time" id="afternoon" value="Saturday afternoons">
                                            <label class="form-check-label" for="afternoon">Saturday afternoons</label>
                                        </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-right">
                                <label for="skills">Your Skills</label>
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input  class="form-check-input" type="checkbox" value="the best coder" id="coder" name="skills[]">
                                            <label class="form-check-label" for="coder">the best coder</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="a super star" id="superstar" name="skills[]">
                                            <label class="form-check-label" for="superstar">a super star</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="singer" id="singer" name="skills[]">
                                            <label class="form-check-label" for="singer">singer</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="the best eater" id="eater" name="skills[]">
                                            <label class="form-check-label" for="eater">the best eater</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="good in arts" id="arts" name="skills[]">
                                            <label class="form-check-label" for="arts">good in arts</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="good in arts" id="dancer" name="skills[]">
                                            <label class="form-check-label" for="arts">a crazy dancer</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="good in arts" id="design" name="skills[]">
                                            <label class="form-check-label" for="arts">good in design</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="good in arts" id="arts" name="skills[]">
                                            <label class="form-check-label" for="arts">good in speeches</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>