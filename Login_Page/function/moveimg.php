<?php 
  $img = uniqid().".jpeg";

  if (move_uploaded_file($_FILES['image']['tmp_name'], "../Class/images/original/".$img)) {
    $file_source = "../Class/images/original/".$img;
   
    make_thumb($file_source,"../Class/images/250x250/".$img,250);
    make_thumb($file_source,"../Class/images/300x300/".$img,300); 
    make_thumb($file_source,"../Class/images/650x650/".$img,650);

    print "Received {$img} - its size is {$_FILES['image']['size']}";
  }
  ?>