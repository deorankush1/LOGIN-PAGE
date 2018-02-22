
<?php
//   include("mysqlconnect.php");
 // include '../function/config.php';

//     function GetImageExtension($imagetype)
//    	 {
//        if(empty($imagetype)) return false;
//        switch($imagetype)
//        {
//            case 'image/bmp': return '.bmp';
//            case 'image/gif': return '.gif';
//            case 'image/jpg': return '.jpg';
//            case 'image/png': return '.png';
//            default: return false;
//        }
//      }
	 
	 
	 
// if (!empty($_FILES["uploadedimage"]["name"])) {

// 	$file_name=$_FILES["uploadedimage"]["name"];
// 	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
// 	$imgtype=$_FILES["uploadedimage"]["type"];
// // 	$ext= GetImageExtension($imgtype);
//  	$imagename=date("d-m-Y")."-".time().$ext;
// 	$target_path = "images/".$imagename;
	

// // if(move_uploaded_file($temp_name, $target_path)) {

// //  	$query_upload="INSERT into 'images_tbl' ('images_path','submission_date') VALUES 

// // ('".$target_path."','".date("Y-m-d")."')";
// // 	mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error());  
	
// // }else{

// //    exit("Error While uploading image on the server");
// // } 

// // }

// // //php
// // ///Code to use image name with new customized  image name .
// // //$imagename=date("d-m-Y")."-".time().$ext; 

// // ///Code to use image name as same as uploaded image name .
// // //$imagename=$_FILES["uploadedimage"]["name"];


// $imagename=$_FILES["myimage"]["name"]; 

// //Get the content of the image and then add slashes to it 
// $imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

// //Insert the image name and image content in image_table
// $insert_image="INSERT INTO images_tbl VALUES('".$target_path."','".date("Y-m-d")."')";";

// mysql_query($insert_image);
 /* if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        move_uploaded_file($imgContent, "../Class/image/");
        exit;
        $dataTime = date("Y-m-d H:i:s");
        //Insert image content into database
        $insert = ("INSERT into images_tbl(images_path, submission_date) VALUES ('$imgContent', '$dataTime')");
        if(mysqli_query($conn1,$insert)){
            echo "File uploaded successfully.";
        }else{
            echo "<br>"."File upload failed, please try again.";
        } 
    }else{
        echo "<br>"."Please select an image file to upload.";
    }
}*/
      echo $img =$_FILES['image']['name'];
exit;
    if (move_uploaded_file($_FILES['image']['tmp_name'], "../Class/images/".$_FILES['image']['name'])) {
        print "Received {$img} - its size is {$_FILES['image']['size']}";
    } else {
        print "Upload failed!";
    }

?>
