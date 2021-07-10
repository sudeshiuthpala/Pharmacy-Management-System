<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Customer</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bootstrap/css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bootstrap/css/main3.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>bootstap/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>bootstap/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </head>
  </head>
  <body>
<div class= "container container-table100">
  <br><br><br>
    <table border="0" align="center" width="100%">
      <tr style="background-color:#42a5f5;">

        <th>Customer ID</th>
        <th>Name</th>
        <th>Date Of Birth</th>
        <th>Gender</th>
        <th>Contact Number</th>
        <th>E-mail</th>
        <th>Reg Date</th>
      </tr>
      <?php
          foreach($data as $row){
            echo "<tr>";
            echo "<td>".$row->customer_id."</td>";
            echo "<td>".$row->name."</td>";
            echo "<td>".$row->DOB."</td>";
            echo "<td>".$row->gender."</td>";
            echo "<td>".$row->contact_num."</td>";
            echo "<td>".$row->email."</td>";
            echo "<td>".$row->reg_date."</td>";
            echo "</tr>";
          }
      ?>
    </table>
  </div>
  </body>
</html>
