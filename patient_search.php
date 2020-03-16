<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>


<body>


<?php
include ("func.php");
if(isset($_POST['patient_search_submit']))
{
    $contact=$_POST['search'];
    $query="select * from doctorapp where contact='$contact'";
    $result = mysqli_query($con,$query);
    echo "
    <div class=\"jumbotron\" style=\"background: url('images/backgroundimage.jpeg') no-repeat; background-size:cover;height:200px;\"><div>

    <br><br><br><br><br><br><br>
    
    <div class='card-body bg-info text-white'>
            <div class='row'>
                <div class='col-md-1'>
            <a href='patien_details.php' class='btn btn-light'>Back</a>
                </div>
            <div class='col-md-3'>Patient Details</div>
                <div class='col-md-8'>
                </div>
            </div>
        </div>

    <div class='card-body'>
    <table class='table'>
        <thead class='thead-white'>
        <tr>

            <th scope='col'>Full Name</th>
            <th scope='col'>Email</th>
            <th scope='col'>Telephone</th>
            <th scope='col'>Doctor Appointment</th>
        </tr>
        </thead>";

    while($row=mysqli_fetch_array($result)){
        $fname=$row['fname'];
        $email=$row['email'];
        $contact=$row['contact'];
        $docapp=$row['docapp'];
        echo" <tr>
            <td>$fname</td>
            <td>$email</td>
            <td>$contact</td>
            <td>$docapp</td>
           </tr>";
    }
echo "</tbody></table></div></div>";
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>