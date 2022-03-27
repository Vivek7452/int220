<html>

<body>
    


    <form action="textbox.php" method="get">
      Enter Age :  <br> 
        <textarea type="number" cols="80" rows="5"  name="age" value="{$age}"> 
       </textarea>  <br> 

        <input style="padding:5px" type="submit">
    </form>

    <?php 

 if(isset($_GET["age"])){

    $age = $_GET["age"];
     
  if (filter_var($age, FILTER_VALIDATE_INT, array("options" => array("min_range"=>26, "max_range"=>56))) === false) {
    echo(" oh oh! Your Age is Not valid");
  } else {
    echo(" Congrats!!!! Your Age is valid");
  }
}

    ?>

</body>

</html>