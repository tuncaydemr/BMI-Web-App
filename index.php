<?php
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>

<body style="background: black;">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
      <div class="card w-50">
        <h3 class="my-5 text-center">Body Mass Calculator</h3>
        <div class="mb-4 w-50 m-auto">
          <label for="weight" class="form-label">Weight</label>
          <input type="text" class="form-control" name="weight" id="weight" pattern="[0-9]*" placeholder="Enter Your Weight" value="<?php echo isset($weight) ? $weight : ''; ?>">
        </div>
        <div class="mb-4 w-50 m-auto">
          <label for="height" class="form-label">Height</label>
          <input type="text" class="form-control" name="height" id="height" pattern="[0-9]*" placeholder="Enter Your Height" value="<?php echo isset($height) ? $height : ''; ?>">
        </div>
        <div class="mb-4 w-50 m-auto bmi">
          <label for="bmi" class="form-label">BMI</label>
          <input type="text" class="form-control" name="bmi" value="<?php echo $bmi; ?>" disabled>
        </div>
        <div class="d-flex justify-content-center mt-3 mb-5">
          <button type="submit" name="submit" class="btn btn-primary w-50 my-4">Submit</button>
        </div>
      </div>
    </div>
  </form>

  <script>
    $(() => {

        let $weight = $('#weight').val();
        let $height = $('#height').val();

        if (($weight == "") && ($height == "")) {
          $('.bmi').addClass('d-none');
        } else {
          $('.bmi').addClass('d-block');
        }

    });
  </script>
</body>

</html>
