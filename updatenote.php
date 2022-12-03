<?php
   $cn=pg_connect("host=localhost port=5432 dbname=takenote user=postgres password= rnyclvrby");
   $show=pg_query("SELECT*FROM notes");
    if(isset($_POST["save"])&&$_POST["save"]=="save")
    {
        $note=$_POST["note"]
        $nid=$_GET['update'];
        $query="call update_note('".$note."')";
        $res=pg_query($cn,$query);
        if($res)
        {
         
        }else
        echo"didnt";
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
                <input  type="submit" id="save" value="save" name="save"/>
            </form>
        </div>
    </div>
</body>
</html>