<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./src/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
</head>

<body>
  <form action="index.php" method="post">
    <div class="container d-flex align-items-center justify-content-center">
      <div class="grid">
        <h4 class="mt-4 mb-5 text-center">Body Mass Calculator</h4>
        <div class="mb-4 w-50 m-auto">
          <label for="weight" class="form-label">Weight</label>
          <input type="text" class="form-control" name="weight" id="weight" placeholder="Enter Your Weight">
        </div>
        <div class="mb-4 w-50 m-auto">
          <label for="height" class="form-label">Height</label>
          <input type="text" class="form-control" name="height" id="height" placeholder="Enter Your Height">
        </div>
        <button type="button" class="btn btn-primary w-50">Button</button>
      </div>
    </div>
  </form>
</body>

</html>
