<?php

$conn = mysqli_connect("localhost","root","123456");
mysqli_select_db($conn, "test");

if (isset($_POST['submit']))
{
   
    $surname = $_POST["surname"];
    $fname = $_POST["fname"];
    $file_number = $_POST["file_number"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $idcard = $_POST["idcard"];
    $ward = $_POST["ward"];
    $pregnancies = $_POST["pregnancies"];
    $blood_group = $_POST["blood_group"];
    $reason = $_POST["reason"];
    $transfusions = $_POST["transfusions"];
    $reaction = $_POST["reaction"];
    $request_type = $_POST["request_type"];
    $units = $_POST["units"];
    $blood_type = $_POST["blood_type"];
    $date_required = $_POST["date_required"];
    $time_required = $_POST["time_required"];
    $doctor_name = $_POST["doctor_name"];
    $doctor_tp = $_POST["doctor_tp"];
    $date_request = $_POST["date_request"];
    $time_request = $_POST["time_request"];
    

    
    $reg = "INSERT INTO `bloodrequest` ( surname, 
                                         fname, 
                                         file_number, 
                                         gender, 
                                         dob, 
                                         idcard,  
                                         ward, 
                                         pregnancies, 
                                         blood_group, 
                                         reason, 
                                         transfusions, 
                                         reaction, 
                                         request_type, 
                                         units, 
                                         blood_type, 
                                         date_required, 
                                         time_required, 
                                         doctor_name, 
                                         doctor_tp, 
                                         date_request, 
                                         time_request) 
                                         
                                VALUES ('$surname', 
                                        '$fname', 
                                        '$file_number', 
                                        '$gender', 
                                        '$dob', 
                                        '$idcard', 
                                        '$ward', 
                                        '$pregnancies', 
                                        '$blood_group', 
                                        '$reason', 
                                        '$transfusions', 
                                        '$reaction',  
                                        '$request_type', 
                                        '$units', 
                                        '$blood_type', 
                                        '$date_required', 
                                        '$time_required', 
                                        '$doctor_name', 
                                        '$doctor_tp', 
                                        '$date_request', 
                                        '$time_request') 
                                        ";
    
    $reg_result = mysqli_query($conn,$reg);
    
    if($reg_result==true)
    {
        header("location:test2.html");
    }
    else
    {
//        header("location:../Bloodrequest.php?false");
        print_r("$reg");
    }
    

}

?>