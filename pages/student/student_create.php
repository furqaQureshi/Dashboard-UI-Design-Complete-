<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Student_Create Form</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body>
  <div class="wrapper">
    <?php
    include '../../sideBar.php';
    ?>
    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Stdeunt Create</h1>
            </div>

          </div>
        </div>
      </section>
      <form enctype="multipart/form-data" method="POST" class="mb-5">
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Student <small>Create</small></h3>
                  </div>
                  <form>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Student Name</label>
                        <input type="text" name="student_name" class="form-control" placeholder="Enter Student Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Student Email</label>
                        <input type="text" name="student_email" class="form-control" placeholder="Enter Student Email">
                      </div>
                      <div class="form-group">
                        <label>Student Gender</label>
                        <select name="gender" class="form-control">
                          <option>Student Gender</option>
                          <option value="male">Male</option>
                          <option value="female">FeMale</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Date Of Birth</label>
                        <input type="date" name="dob" class="form-control" placeholder="Date Of Birth">
                      </div>
                      <div class="form-group">
                        <label>Student Id</label>
                        <input type="text" name="student_id" class="form-control" placeholder="Enter Your Student Id">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Student Father</label>
                        <input type="text" name="father_name" class="form-control" placeholder="Enter Student Father Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Student Contact No</label>
                        <input type="phone" name="contact_num" class="form-control" placeholder="Enter Student Contact Number">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">House Contact No</label>
                        <input type="phone" name="alternate_number" class="form-control" placeholder="Enter House Contact Number">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Student Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="student_image">
                            <label class="custom-file-label">Choose Student Image</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Date Of Adminsion</label>
                        <input type="date" name="doa" class="form-control" placeholder="Date Of Admision">
                      </div>
                      <div class="card-footer">
                        <button name="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </section>
      </form>
    </div>
  </div>
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jquery-validation -->
  <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $.validator.setDefaults({
        submitHandler: function() {
          alert("Form successful submitted!");
        }
      });
    });
  </script>
</body>

</html>