<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PDEU Project</title>
  </head>
  <body>
  <?php require("nav.php");?>
<div class="container">
  <h5 class="display-5 border-bottom py-2">Recorded Sensor Data</h5>
  <table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Distance</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      require("config.php");
      $sr = 1;
      $sql = mysqli_query($con,"SELECT * FROM data ORDER BY id DESC");
      while($pr = mysqli_fetch_array($sql))
      {
    ?>
    <tr>
      <th scope="row"><?php echo $sr++;?></th>
      <td><?php echo $pr['distance'];?></td>
      <td><?php echo $pr['time'];?></td>
      <td><?php echo $pr['date'];?></td>
      <td><a href="delete.php?key=<?php echo $pr['hashid'];?>" class="btn btn-sm btn-danger">Delete</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>