<?php
   // Edit upload location here
   $destination_path = getcwd().DIRECTORY_SEPARATOR;

   $result = 0;
   
   $file_extension = strrchr($_FILES['myfile']['name'], ".");

   $uploaded_file_name = "Teachers-BSCSE" . $file_extension;

   $target_path = $destination_path . "LoadFile/Databases/" . $uploaded_file_name;

   if(@move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) {
      $result = 1;
   }
   
   sleep(1);
?>

<script language="javascript" type="text/javascript">window.top.window.stopUpload(<?php echo $result; ?>);</script>   
