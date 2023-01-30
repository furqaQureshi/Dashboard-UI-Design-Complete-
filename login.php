<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Validation Form</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
</head>
<style>
  * {
    padding: 0;
    margin: 0;
  }

  body {
    background-color: #e9ecef;
  }
</style>
<body class="hold-transition sidebar-mini">
  <div>
    <div class="container">
      <div class="row mb-2">
        <div class="col">
          <h1 class="text-center">User Register</h1>
        </div>
      </div>
      <section class="content">
        <div class="container col-6">
          <div class="row">
            <div class="col">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">User Register <small>And Visit To Dashboard</small></h3>
                </div>
                <form method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">User Email *</label>
                      <input type="text" name="user_email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your email">
                    </div>
                    <div class="form-group">
                      <label>Password *</label>
                      <input type="password" name="password" class="form-control" placeholder="Enter YourPassword ">
                    </div>
                    <button class="btn btn-primary" name="login">Submit</button>
                    <a href="login.php" class="float-right btn-sm btn-primary">Register</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
  <script src="./dist/js/adminlte.min.js"></script>
  <script src="./dist//js/demo.js"></script>
  <script>
    $(function() {
      $.validator.setDefaults({
        submitHandler: function() {
          alert("Form successful submitted!");
        }
      });
      $('#quickForm').validate({
        rules: {
          email: {
            required: true,
            email: true,
          },
          password: {
            required: true,
            minlength: 5
          },
          terms: {
            required: true
          },
        },
        messages: {
          email: {
            required: "Please enter a email address",
            email: "Please enter a valid email address"
          },
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          terms: "Please accept our terms"
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>
</body>
</html>