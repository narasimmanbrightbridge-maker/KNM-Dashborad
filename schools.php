<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Health Basix | KNM Dashboard</title>
  <?php include './includes/css.php'; ?>
  <link rel="icon" type="image/x-icon" href="assets/images/mini-logo-two.svg">
</head>

<body>
  <div class="container-scroller">
    <?php include './includes/header.php'; ?>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">

        <div class="TopBarSec d-flex align-items-center">

          <section class="search_sec">
            <div class="container-fluid">
              <div class="row">

                <div class="col-lg-2 col-md-12">
                  <div class="center">
                    <select class="select2">
                      <option value="1" selected>Region</option>
                      <option value="2">Option 1</option>
                      <option value="3">Option 2</option>
                    </select>
                  </div>
                </div>

                <div class="col-lg-2 col-md-12">
                  <div class="center">
                    <select class="select2">
                      <option value="1" selected>KAM</option>
                      <option value="2">Option 1</option>
                      <option value="3">Option 2</option>
                    </select>
                  </div>
                </div>

                <div class="col-lg-2 col-md-12">
                  <div class="center">
                    <select class="select2">
                      <option value="1" selected>BD</option>
                      <option value="2">Option 1</option>
                      <option value="3">Option 2</option>
                    </select>
                  </div>
                </div>

                <div class="col-lg-2 col-md-12">
                  <div class="center">
                    <select class="select2">
                      <option value="1" selected>Services</option>
                      <option value="2">Option 1</option>
                      <option value="3">Option 2</option>
                    </select>
                  </div>
                </div>

                <div class="col-lg-2 col-md-12">
                  <div class="center">
                    <select class="select2">
                      <option value="1" selected>School Status</option>
                      <option value="2">Option 1</option>
                      <option value="3">Option 2</option>
                    </select>
                  </div>
                </div>

              </div>
            </div>
          </section>

          <button class="bg-1"><img src="assets/images/Add.svg" alt="">Add School</button>

        </div>

        <div class="TabelSection">
          <table id="example" class="table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>S.No</th>
                <th>School ID</th>
                <th>School Name</th>
                <th>Region</th>
                <th>Services</th>
                <th>BD</th>
                <th>KAM</th>
                <th>School Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><a href="school-detail.php">9129</a></td>
                <td>Sri Gopal Naidu Children's School</td>
                <td>South</td>
                <td>
                  <div class="colors">
                    <span class="orange">Nursing+Medicine</span>
                    <span class="thikOrange">Special Educator</span>
                    <!-- <span class="Plus">+1</span> -->
                  </div>
                </td>
                <td>Nishant rathee</td>
                <td>Murthy</td>
                <td>Active</td>
              </tr>
              <tr>
                <td>2</td>
                <td>9130</td>
                <td>ABC Matric higher Secondary School</td>
                <td>South</td>
                <td>
                  <div class="colors">
                    <span class="orange">Nursing+Medicine</span>
                    <span class="pink">Counselor</span>
                    <!-- <span class="Plus">+1</span> -->
                  </div>
                </td>

                <td>Nishant rathee</td>
                <td>Murthy</td>
                <td>Active</td>
              </tr>
              <tr>
                <td>3</td>
                <td>9130</td>
                <td>ABC Matric higher Secondary School</td>
                <td>South</td>
                <td>
                  <div class="colors">
                    <span class="blue">Nursing</span>
                    <span class="thikOrange">Special Educator</span>
                    <span class="Plus">+1</span>
                  </div>
                </td>

                <td>Nishant rathee</td>
                <td>Murthy</td>
                <td>Active</td>
              </tr>
              <tr>
                <td>4</td>
                <td>9130</td>
                <td>ABC Matric higher Secondary School</td>
                <td>South</td>
                <td>

                  <div class="colors">

                    <span class="pink">Counselor</span>
                    <span class="green">Health Assessment</span>
                    <span class="blue">Nursing</span>
                    <!-- <span class="Plus">+1</span> -->
                  </div>

                </td>

                <td>Nishant rathee</td>
                <td>Murthy</td>
                <td>Active</td>
              </tr>
              <tr>
                <td>5</td>
                <td>9130</td>
                <td>ABC Matric higher Secondary School</td>
                <td>South</td>
                <td>
                  <div class="colors">
                    <span class="pink">Counselor</span>
                    <span class="green">Health Assessment</span>
                    <!-- <span class="Plus">+1</span> -->
                  </div>
                </td>

                <td>Nishant rathee</td>
                <td>Murthy</td>
                <td>Active</td>
              </tr>

              <tr>
                <td>6</td>
                <td>9130</td>
                <td>ABC Matric higher Secondary School</td>
                <td>South</td>
                <td>
                  <div class="colors">
                    <span class="orange">Nursing+Medicine</span>
                    <span class="pink">Counselor</span>
                    <span class="Plus">+1</span>
                  </div>
                </td>

                <td>Nishant rathee</td>
                <td>Murthy</td>
                <td>Active</td>
              </tr>

              <tr>
                <td>7</td>
                <td>9130</td>
                <td>ABC Matric higher Secondary School</td>
                <td>South</td>
                <td>
                  <div class="colors">
                    <span class="orange">Nursing+Medicine</span>
                    <span class="pink">Counselor</span>
                    <span class="green">Health Assessment</span>
                    <span class="Plus">+1</span>
                  </div>
                </td>

                <td>Nishant rathee</td>
                <td>Murthy</td>
                <td>Active</td>
              </tr>


              <tr>
                <td>8</td>
                <td>9130</td>
                <td>ABC Matric higher Secondary School</td>
                <td>South</td>
                <td>
                  <div class="colors">
                    <span class="orange">Nursing+Medicine</span>
                    <span class="thikOrange">Special Educator</span>
                    <span class="Plus">+1</span>
                  </div>
                </td>

                <td>Nishant rathee</td>
                <td>Murthy</td>
                <td>Active</td>
              </tr>


              <tr>
                <td>9</td>
                <td>9130</td>
                <td>ABC Matric higher Secondary School</td>
                <td>South</td>
                <td>
                  <div class="colors">
                    <span class="green">Health Assessment</span>
                    <span class="blue">Nursing</span>
                    <span class="Plus">+1</span>
                  </div>
                </td>

                <td>Nishant rathee</td>
                <td>Murthy</td>
                <td>Active</td>
              </tr>

              <td>10</td>
              <td>9130</td>
              <td>ABC Matric higher Secondary School</td>
              <td>South</td>
              <td>
                <div class="colors">
                  <span class="blue">Nursing</span>
                  <span class="thikOrange">Special Educator</span>
                    <!-- <span class="Plus">+1</span> -->
                </div>
              </td>

              <td>Nishant rathee</td>
              <td>Murthy</td>
              <td>Active</td>

            </tbody>
          </table>
        </div>
      </div>
      <?php include './includes/footer.php'; ?>
    </div>
  </div>
  </div>
  <?php include './includes/js.php'; ?>
</body>

</html>