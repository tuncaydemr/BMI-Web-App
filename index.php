<?php
if (isset($_POST['submit'])) {
  $weight = $_POST['weight'];
  $height = $_POST['height'];
  $bmi = $_POST['bmi'];

  $height /= 100;
  $bmi = $weight / ($height * $height);

  if ($weight != "" && $height != "") {
    
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
</head>

<body style="background: black;">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
      <div class="card w-50">
        <h3 class="my-5 text-center">Body Mass Calculator</h3>
        <div class="mb-4 w-50 m-auto">
          <label for="weight" class="form-label">Weight</label>
          <input type="text" class="form-control" name="weight" id="weight" pattern="\d{3}" placeholder="Enter Your Weight" value="<?php echo isset($weight) ? $weight : ''; ?>">
        </div>
        <div class="mb-4 w-50 m-auto">
          <label for="height" class="form-label">Height</label>
          <input type="text" class="form-control" name="height" id="height" placeholder="Enter Your Height" value="<?php echo isset($height) ? $height : ''; ?>" >
        </div>
        <div class="mb-4 w-50 m-auto" style="display: none">
          <label for="bmi" class="form-label">BMI</label>
          <input type="text" class="form-control" name="bmi" value="<?php echo $bmi; ?>" disabled>
        </div>
        <div class="d-flex justify-content-center mt-3 mb-5">
          <button type="submit" name="submit" class="btn btn-primary w-50 my-4">Button</button>
        </div>
      </div>
    </div>
  </form>
</body>

</html>
