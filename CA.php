<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">

  
  <label> Firstname </label>         
  <input type="text" name="firstname" size="15"/> <br> <br>  
  
  <label> Lastname: </label>         
  <input type="text" name="lastname" size="15"/> <br> <br>  
    
  <label>   
  Course :  
  </label>   
            <select name="crc">  
            <option value="Course">Course</option>  
            <option value="BCA" >BCA</option>  
            <option value="BBA">BBA</option>  
            <option value="B.Tech">B.Tech</option>  
            <option value="MBA">MBA</option>  
            <option value="MCA">MCA</option>  
            <option value="M.Tech">M.Tech</option>  
            </select>  
    
         <br>  
       <br>  
     <label>   
      Gender :  
     </label><br>  
     <input type="radio" name="Male"/> Male <br>  
     <input type="radio" name="Female"/> Female <br>  
     <input type="radio" name="Other"/> Other  
     <br>  
     <br>  
    
    <label>   Phone :  </label>  
  <input type="text" name="country code"  value="+91" size="2"/>   
  <input type="text" name="phone" size="10"/> <br> <br>  
  Address  
  <br>  
  <textarea cols="80" rows="5"  name =" addrs" value="address">  
  </textarea>  
  <br> <br>  
  Email:  
  <input type="email" id="email" name="email"/> <br>    
  <br> <br>  
  Password:  
  <input type="Password" id="pass" name="pass"> <br>   
  <br> <br>  
  Re-type password:  
  <input type="Password" id="repass" name="repass"> <br> <br>  
  
  
        <input type="file" name="file">
        <button type="submit" name="submit">UPLOAD</button>
</form>
    
</body>
</html>