<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body class=" bg-light">
<br>
<br>
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="list-group">
                    <a href="" class="bg-info list-group-item active">Patients</a>
                    <a href="patien_details.php" class="list-group-item ">Patient Details</a>

                </div>
                <hr>
                    <div class="jumbotron" style="background: url('images/header2.png') no-repeat; background-size:100%;height:30px;" >

                    </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body bg-info">
                        <h5 class="text-white">Book an appointment</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-group" action="func.php" method="post">
                            <label>Full Name :</label>
                            <input type="text" name="fname" class="form-control"><br>
                            <label>Email</label>
                            <input type="text" name="email" class="form-control"><br>
                            <label>Telephone:</label>
                            <input type="text" name="contact" class="form-control"><br>
                            <label>Doctor Appointment :</label>
                            <select class="form-control" name="docapp">
                                <option value="Dr Portero 6pm-8pm"> Dr Portero 6pm-8pm</option>
                                <option value="Dr Portero 4pm-6pm"> Dr Portero 4pm-6pm</option>
                            </select><br>
                            <input type="submit" name="pat_submit" value="Enter Appointment">
                        </form>


                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>