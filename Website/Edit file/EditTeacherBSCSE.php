<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="home.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>BSCSE Faculty list Page</title>
    <style>
      table,td 
      {
        border: 1px solid black;
        border-collapse: collapse;
      }
      td 
      {
        padding: 15px;
        text-align: left;
      }
    </style>
  </head>
  <header>
    <div class="container">
      <div  style="padding-bottom: 25px ;padding-top: 25px;">
        <img class="img-fluid " src="header-logo.jpg" alt="Responsive image" class="rounded float-left"> 
      </div>

    </div>
    <div style="background-color:Black;">
      <font color="Black">This is some text!</font>
    </div>
    </header>
  <body>
    <div class="container">
      <h1>BSCSE Department Faculty list</h1>
      <table id="editable_table">
        <tbody>
          <?php
            require_once "Classes/PHPExcel.php";
            $tmpfname = "Databases/Teachers-BSCSE.xlsx";
            $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
            $excelObj = $excelReader->load($tmpfname);
            $worksheet = $excelObj->getSheet(0);
            $lastRow = $worksheet->getHighestRow();
            for ($row = 1; $row <= $lastRow; $row++) 
            {
               echo "<tr><td>";
               echo $worksheet->getCell('A'.$row)->getValue();
               echo "</td><td>";
               echo $worksheet->getCell('B'.$row)->getValue();
               echo "</td><td>";
               echo $worksheet->getCell('C'.$row)->getValue();
               echo "</td><tr>";
            } 
          ?>
        </tbody>
      </table>
    </div>
  </body>
  <script>  
    $(document).ready(function()
    {  
      $('#editable_table').Tabledit(
      {
        url:'action.php',
        columns:
        {
          identifier:[0, "Faculty Member"],
          editable:[[1, 'Theory'], [2, 'Lab']]
        },
        restoreButton:false,
        onSuccess:function(data, textStatus, jqXHR)
        {
          if(data.action == 'delete')
          {
            $('#'+data.Faculty Member).remove();
          }
        }
      });
    });  
  </script>
</html>