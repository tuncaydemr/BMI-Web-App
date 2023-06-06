<?php
  $weight = "";
  $height = "";
  $bmi = 0;

  if (isset($_POST['submit'])) {
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    if ($weight != "" && $height != "") {
      $bmi = $weight / ($height * $height);
      $bmi = round($bmi * 10000, 2);
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Body Mass Calculator</title>
  <link rel="stylesheet" href="./src/css/bootstrap.min.css">
  <link rel="stylesheet" href="./src/css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.1/jquery-migrate.min.js"></script>
  <script src="./src/js/script.js"></script>
</head>

<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="container">
      <div class="card w-50">
        <h3 class="my-5 text-center">Body Mass Calculator</h3>
        <div class="mb-4 w-50 m-auto">
          <label for="weight" class="form-label">Weight</label>
          <input type="text" class="form-control" name="weight" id="weight" pattern="[0-9]*"
          placeholder="Enter Your Weight">
        </div>
        <div class="mb-4 w-50 m-auto">
          <label for="height" class="form-label">Height</label>
          <input type="text" class="form-control" name="height" id="height" pattern="[0-9]*"
          placeholder="Enter Your Height">
        </div>
        <div class="w-50 m-auto bmi">
          <label for="bmi" class="form-label">BMI</label>
          <input type="text" class="form-control" name="bmi" disabled>
        </div>
        <?php
        if ($weight != "" && $height != "" && $bmi != "") :
          if ($bmi < 18.5) {
        ?>
            <div class="card m-auto w-50">
              <div class="card-body bg-danger">
                <p class="card-text text-white text-center text-uppercase fs-5">Mild Thinness</p>
              </div>
            </div>
          <?php
          } elseif ($bmi >= 18.5 && $bmi < 25) {
          ?>
            <div class="card m-auto w-50">
              <div class="card-body bg-success">
                <p class="card-text text-white text-center text-uppercase fs-5">Normal</p>
              </div>
            </div>
          <?php
          } elseif ($bmi >= 25 && $bmi < 30) {
          ?>
            <div class="card m-auto w-50">
              <div class="card-body bg-warning">
                <p class="card-text text-black text-center text-uppercase fs-5">Overweight</p>
              </div>
            </div>
          <?php
          } elseif ($bmi >= 30 && $bmi < 40) {
          ?>
            <div class="card m-auto w-50">
              <div class="card-body bg-danger">
                <p class="card-text text-white text-center text-uppercase fs-5">Obese Class &#8544;</p>
              </div>
            </div>
          <?php
          } else {
          ?>
            <div class="card m-auto w-50">
              <div class="card-body bg-danger">
                <p class="card-text text-white text-center text-uppercase fs-5">Obese Class &#8545;</p>
              </div>
            </div>
        <?php
          }
        endif;
        ?>
        <div class="button-area mt-3 mb-5">
          <button type="submit" name="submit" class="btn btn-primary w-50 my-4 py-3" disabled>Submit</button>
        </div>
      </div>
    </div>
  </form>
</body>

</html>
