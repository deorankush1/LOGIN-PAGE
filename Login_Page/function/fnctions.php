<?php


  function make_thumb($src, $dest, $desired_width, $file_type)
   {

    echo $src . " " . $dest . " " .$desired_width;

    /* read the source image */
    if ($file_type == 'image/jpeg')
    {
        $source_image = imagecreatefromjpeg($src);    
    }
    elseif ($file_type == "image/png") {
        $source_image = imagecreatefrompng($src);   
    }
    else
    {
        $source_image = imagecreatefromgif($src);
    }
    //$source_image = imagecreatefromjpeg($src);
    $width = imagesx($source_image);
    $height = imagesy($source_image);
    
    /* find the "desired height" of this thumbnail, relative to the desired width  */
    $desired_height = floor($height * ($desired_width / $width));
    
     //create a new, "virtual" image 
    $virtual_image = imagecreatetruecolor($desired_width, $desired_height);
    
    /* copy source image at a resized size */
    imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
    
    /* create the physical thumbnail image to its destination */
    imagejpeg($virtual_image, $dest);
  }



  function mvimage($img)
  {
    if (move_uploaded_file($_FILES['image']['tmp_name'], "../Class/images/original/".$img)) {
      $file_source = "../Class/images/original/".$img;
      $file_type = $_FILES['image']['type'];
      make_thumb($file_source, "../Class/images/250x250/".$img, 250,$file_type); 
    }
  }
    
  function FirstnameValidation($firstname1)
  {
    $firstname_error = '';

    if(is_numeric($firstname1)){
      $firstname_error = "numeric value does not exit";
    }
    return $firstname_error;
  }
?>