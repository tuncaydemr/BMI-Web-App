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
          <input type="text" class="form-control" name="weight" placeholder="Enter Your Weight" required>
        </div>
        <div class="mb-4 w-50 m-auto">
          <label for="height" class="form-label">Height</label>
          <input type="text" class="form-control" name="height" placeholder="Enter Your Height" required>
        </div>
        <div class="d-flex justify-content-center mt-3 mb-5">
          <button type="submit" name="submit" id="submit" class="btn btn-primary w-50 my-4">Button</button>
        </div>
      </div>
    </div>
  </form>
</body>

</html>
