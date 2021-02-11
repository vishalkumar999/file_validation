<?php
   if(isset($_REQUEST['send'])){
    $name = $_REQUEST['name'];
    $file = $_FILES['file'];
   
    // This is for file
    $file_name = $file['name'];
    $file_size = $file['size'];
    $file_tmp_name = $file['tmp_name'];
    $file_type = $file['type'];

    $extensions = array('png','jpg','jpeg');
    // It returns a array
    $type = strtolower(end(explode(".",$file_name)));
    
   if(in_array($type,$extensions)){
       if($file_size > 1024*1024){
        echo '<script>alert("File should be less than 1 MB")</script>';
       }else{
        //    code here
       }
   }else{
    echo '<script>alert("Invalid Image Format")</script>';
   }

   }
?>

<form method="post" enctype="multipart/form-data">

    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <br><br>

    <label for="file">Upload File</label>
    <input type="file" name="file" id="file">

    <br><br>

    <button type="submit" name="send" >Send</button>

</form>
