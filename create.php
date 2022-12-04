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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>TAKE A NOTE</title>
    <style>
       #time{
        position: absolute;
        left:17%;
        top:25%;
        font-size:30px;
       }
    </style>
</head>
<body>
    <div class="row">
        <div  class="col-sm-12"  id="formcol">
            <div><img src="./pic3.png" alt="" id="pic3">
            <p id="time"></p>
            </div>
            <form action="" method="post" id="form" style="top:25%;text-align:center;">
                <h2>What Would You Like To Write ?</h2>
                <textarea name="note" cols="70" rows="15"></textarea><br>
                <button type="submit" id="savebtn" value="save" name="btnsave">SAVE</button>
            </form>
            <img src="./third.gif" alt="" id="gif3">
        </div>
    </div>

    <script src="time.js"></script>
</body>
</html>