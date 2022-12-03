<?php
    $cn=pg_connect("host=localhost port=5432 dbname=takenote user=postgres password= rnyclvrby");
    $show=pg_query("SELECT*FROM notes");
    if(isset($_GET['delete']))
    {
        $nid=$_GET['delete'];
        $query="call delete_note(".$nid.")";
        $res=pg_query($cn,$query);
        if($res)
        {
            header("Location:index.html");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>NOTES</title>
</head>
<body>
<table class="table table-striped">
                          <tr>
                                <th>Note</th>
                                <th>Date</th>
                          </tr>
                          <?php
                          $i=0;
                          while($row=pg_fetch_assoc($show)) {
                          ?>
                          
                              <tr>
                                  <td><?php echo $row["note"]; ?></td>
                                  <td><?php echo $row["n_date"]; ?></td>
                                  <td><a href="notes.php?delete=<?=$row['id']?>" onclick="return confirm('Silinsin mi?')" class="btn btn-danger">Kaldır</a></td>
                                  <td><a href="updatenote.php?update=<?=$row['id']?>" onclick="return confirm('Güncellesin mi?')" class="btn btn-danger">Güncelle</a></td>
                                  
                              </tr>
                          <?php
                          $i++;
                          }
                          ?>
                          
            </table>   
</body>
</html>