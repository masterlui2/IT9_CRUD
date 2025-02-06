<?php include '../helpers/authenticated.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Create Todo </title>
  <link href="../statics/css/bootstrap.min.css" rel="stylesheet">
  <script src="../statics/js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
  <div class="container d-flex justify-content-center mt-5">
    <div class="col-6">
      <div class="row">
        <p class="display-5 fw-bold text-center">Create Reminder&nbsp;<i class="fa-regular fa-note-sticky"></i> </p>
      </div>
      <div class="row">
        <form class="form" action="../handlers/add_todo_handler.php" method="POST">
          <div class="my-3">
            <label>Title</label>
            <input class="form-control" type="text" name="title" required />
          </div>
          <div class="my-3">
            <label>Description</label>
            <textarea class="form-control" type="text" name="description" required></textarea>
          </div>
          <div class="my-3">
            <button type="submit" class="btn btn-outline-dark">Create Reminder</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
