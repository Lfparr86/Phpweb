
<?php
   if(isset($_FILES['fichero'])){
      $errors= array();
      $file_name = $_FILES['fichero']['name'];
      $file_size = $_FILES['fichero']['size'];
      $file_tmp = $_FILES['fichero']['tmp_name'];
      $file_type = $_FILES['fichero']['type'];
      $file_ext=strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
      $extensions= array("jpeg","jpg","png");
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="Estensión no permitida. Prueba con imágenes jpeg, jpg o png.";
      }
      if($file_size > 2097152) {
         $errors[]='El archivo no puede pesar más de 2MB';
      }
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"./imagen/".$file_name);
         echo "La imagen se ha guardado correctamente";
         
      }else{
         print_r($errors);
      }
   }
?>
