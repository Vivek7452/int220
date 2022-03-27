<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="border:10px solid #000; padding:20px">  

    <h3>Name is :<?php echo $_POST["firstname"]. " " .$_POST["lastname"]  ; ?></h4>
     <h3>Course opted for <?php echo $_POST["crc"]; ?></h3>
     <h3>Phone No: <?php echo $_POST["phone"]; ?></h3>
     <h3>ADDRESS: <?php echo $_POST["addrs"]; ?></h3>
     <h3>E-mail address is <?php echo $_POST["email"]; ?></h3>

     <?php if (isset($_POST['submit'])) {
         $file = $_FILES['file'];

         $name_of_file = $_FILES['file']['name'];
         $fileTmpName = $_FILES['file']['tmp_name'];
         $fileSize = $_FILES['file']['size'];
         $fileError = $_FILES['file']['error'];
         $fileType = $_FILES['file']['type'];

         $fileExt = explode('.', $name_of_file);

         $fileActualExt = strtolower(end($fileExt));

         $allowed = ['pdf', 'png'];

         if (in_array($fileActualExt, $allowed)) {
             if ($fileError === 0) {
                 $fileNameNew = uniqid('', true) . '.' . $fileActualExt;
                 $fileDestination = 'documents/' . $fileNameNew;

                 if (move_uploaded_file($fileTmpName, $fileDestination)) {
                     echo 'Files uploaded sucessfully';
                     echo '<pre>';
                     print_r($file);
                 }  
             } else {
                 echo 'there was an error uploading your file';
             }
         } else {
             echo 'Only PDF and PNG formats are supported';
         }
     } ?>
     </div>  
    
</body>
</html>