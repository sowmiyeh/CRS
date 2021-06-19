<?php
//Database Connection
include_once 'databaase.php';


if(isset($_POST['submit'])){
    $FullName = $_POST['Name'];
    $Regnumber = $_POST['RegisterNumber'];
    $Email =$_POST['Email'];
    $Mob = $_POST['MobileNumber'];
    $Gender =$_POST['Gender'];
    $DOB = $_POST['DOB'];
    $Yr = $_POST['GraduationYear'];
    $qualification = $_POST['Qualification'];
    $Role = $_POST['Role'];
    $Department =$_POST['Department'];
    $Confirmation=$_POST['Confirmations'];
    $UnivPlace = $_POST['PlaceofUniverity'];   
    $Comment = $_POST['Comments'];
    $file=$_FILES['CVFile'];
    $file = rand(1000,100000)."-".$_FILES['CVFile']['name'];
    $file_loc = $_FILES['CVFile']['tmp_name'];
    $file_size = $_FILES['CVFile']['size'];
    $file_type = $_FILES['CVFile']['type'];
    $folder="cv/";
 
    /* new file size in KB */
    $new_size = $file_size/1024;  
    /* new file size in KB */
    
    /* make file name in lower case */
    $new_file_name = strtolower($file);
    /* make file name in lower case */
    
    $final_file=str_replace(' ','-',$new_file_name);
 
    if(move_uploaded_file($file_loc,$folder.$final_file))
    {
        // Sql querry that needs to be executed
        $sql = "INSERT INTO application(id, Name, RegisterNumber, Email, MobileNumber, Gender, DOB, GraduationYear,Qualification, Role, Department, Confirmations, PlaceofUniversity, Comments, file_name, type, size) VALUES ('','$FullName','$Regnumber','$Email','$Mob','$Gender','$DOB','$Yr','$qualification','$Role','$Department','$Confirmation','$UnivPlace','$Comment','$final_file','$file_type','$new_size')";
        
        // Executing Sql querry
        if(mysqli_query($conn, $sql)){
        // on success
            echo "Your Application is successfully saved!";
        } else {
            echo 'Query Error: '. mysqli_error($conn);
        }

    } else
    {
        echo "Error.Please try again";	
    }
}

?>
