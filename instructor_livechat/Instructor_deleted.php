<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiveChat - Record deleted </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" 
          href="css/Instructor_style.css">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="d-flex
             justify-content-center
             align-items-center
             vh-100">

<div class="bg-danger shadow rounded w-50 p-2" style="--bs-bg-opacity: .8;">
                                              <h3 class="text-white">Delete your Livechat Account</h3>
                                              <?php if (isset($_GET['success'])) { ?>
                                              <div class="alert alert-danger" role="alert">
                                              <?php echo htmlspecialchars($_GET['success']);?>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                              <a href="Instructor_dlogout.php"
                                              class="btn btn-dark ">SIGN UP</a>
                                              </div>
                                              <?php } ?></div>
</body>
</html>