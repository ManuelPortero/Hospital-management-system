<!DOCTYPE html>
<?php include ("func.php");?>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Patient Details</title>
</head>
<body class="bg-light">
<div class="jumbotron" style="background: url('images/backgroundimage.jpeg') no-repeat; background-size:cover;height:200px;" ></div>

<div class="container ">

    <div class="card">
        <div class="card-body bg-info text-white">
            <div class="row">
                <div class="col-md-1">
            <a href="admin-panel.php" class="btn btn-light">Back</a>
                </div>
            <div class="col-md-3">Patient Details</div>
                <div class="col-md-8">
                    <form class="form-group" action="patient_search.php" method="post">
                        <div class="row">
                            <div class="col-md-10"><input type="text" name="search" class="form-control"></div>
                            <div class="col-md-2"> <input type="submit" name="patient_search_submit" value="Search " placeholder="enter contact" class="btn btn-light"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<div class="card-body">
    <table class="table">
        <thead class="thead-white">
        <tr>

            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Telephone</th>
            <th scope="col">Doctor Appointment</th>
        </tr>
        </thead>
        <tbody>
        <?php get_patien_details(); ?>
        </tbody>
    </table>

</div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>