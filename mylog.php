<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Sign up Form with Rounded Social Buttons</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
</script>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">LOGIN</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo1.php" method="post">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
       <form action="userinfo1.php" method="post">
      <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
       <form action="userinfo1.php" method="post">
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
       <form action="userinfo1.php" method="post">
      <div class="form-group">
        <label>Address</label>
        <textarea class="form-control" name="address"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section>
</body>
</html>