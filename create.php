<?php
 $cn=pg_connect("host=localhost port=5432 dbname=takenote user=postgres password= rnyclvrby");
 $psq = pg_query("SELECT * FROM notes");
 if(isset($_POST["btnsave"])&&$_POST["btnsave"]=="save")
 {
     $n_note=$_POST["note"];
     $query="call create_note('".$n_note."')";
     $res=pg_query($cn,$query);
     
     if($res)
     {
         header("Location:index.html");
       
     }
 } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TAKE A NOTE</title>
</head>
<body>
    <div class="row">
        <div  class="col-sm-12"  id="formcol">
            <form action="" method="post" id="form">
                <input type="text" name="note" id="note">
                <input  type="submit" id="savebtn" value="save" name="btnsave"/>
            </form>
        </div>
    </div>
</body>
</html>