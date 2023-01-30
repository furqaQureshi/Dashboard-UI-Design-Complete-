<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Inline Charts</title>
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
      <div class="content-wrappe">
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Add Class</h1>
              </div>
            </div>
          </div>
        </section>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">User Create </h3>
                  </div>
                  <form>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Class Name</label>
                        <input type="text" class="form-control" name="class_name" placeholder="Class Name">
                      </div>
                      <label for="exampleInputEmail1">Class Section</label>
                      <select name="choose_section" class="form-control">
                        <option value="">Choose Section</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                      </select>
                      <div class="card-footer mt-2">
                        <button name="submit" class="btn btn-primary">Add Class</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../dist/js/adminlte.min.js"></script>
  <script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
  <script src="../../plugins/sparklines/sparkline.js"></script>
  <script src="../../dist/js/demo.js"></script>
  <script>
    $(function() {
      $('.knob').knob({
        draw: function() {

          // "tron" case
          if (this.$.data('skin') == 'tron') {

            var a = this.angle(this.cv) // Angle
              ,
              sa = this.startAngle // Previous start angle
              ,
              sat = this.startAngle // Start angle
              ,
              ea // Previous end angle
              ,
              eat = sat + a // End angle
              ,
              r = true

            this.g.lineWidth = this.lineWidth

            this.o.cursor &&
              (sat = eat - 0.3) &&
              (eat = eat + 0.3)

            if (this.o.displayPrevious) {
              ea = this.startAngle + this.angle(this.value)
              this.o.cursor &&
                (sa = ea - 0.3) &&
                (ea = ea + 0.3)
              this.g.beginPath()
              this.g.strokeStyle = this.previousColor
              this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
              this.g.stroke()
            }

            this.g.beginPath()
            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
            this.g.stroke()

            this.g.lineWidth = 2
            this.g.beginPath()
            this.g.strokeStyle = this.o.fgColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
            this.g.stroke()

            return false
          }
        }
      })
      var sparkline1 = new Sparkline($('#sparkline-1')[0], {
        width: 240,
        height: 70,
        lineColor: '#92c1dc',
        endColor: '#92c1dc'
      })
      var sparkline2 = new Sparkline($('#sparkline-2')[0], {
        width: 240,
        height: 70,
        lineColor: '#f56954',
        endColor: '#f56954'
      })
      var sparkline3 = new Sparkline($('#sparkline-3')[0], {
        width: 240,
        height: 70,
        lineColor: '#3af221',
        endColor: '#3af221'
      })
      sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021])
      sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921])
      sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21])
    })
  </script>
</body>

</html>