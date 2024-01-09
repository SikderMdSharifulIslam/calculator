<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <div class="conainter">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="card text-bg-info mb-3">
          <div class="card-header bg-light text-center">Calculator</div>
          <div class="card-body">
            <form action="calculator.php" method="POST">
              <div class="mb-3">
                <label class="form-label">Number One</label>
                <input type="text" class="form-control" name="number_one">
              </div>
              <div class="mb-3">
                <label class="form-label">Number Two</label>
                <input type="text" class="form-control" name="number_two">
              </div>

              <button type="submit" class="btn btn-primary" name="add">Add</button>
              <button type="submit" class="btn btn-primary" name="sub">Sub</button>
              <button type="submit" class="btn btn-primary" name="mul">Mul</button>
              <button type="submit" class="btn btn-primary" name="div">Div</button>
            </form>
            
            <?php
              if(isset($_SESSION ['result']))
              {
                ?>
               <div class="alert alert-info mt-3 text-center">
                 Result: <?php 
                  echo $_SESSION ['result'];
                  unset ($_SESSION ['result']);
              }
              ?>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>