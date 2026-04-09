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

        <section class="Invoice">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3">
                <div class="cards"
                  style="border-left: 6px solid #FF82AC;">
                  <div class="imgsa">
                    <img src="assets/images/red.svg" alt="">
                  </div>
                  <div class="contsa">
                    <p>Invoice Generated</p>
                    <span>₹3,25,000</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="cards"
                  style="border-left: 6px solid #FFBB38;">
                  <div class="imgsa">
                    <img src="assets/images/yellow.svg" alt="">
                  </div>
                  <div class="contsa">
                    <p>Amount Received</p>
                    <span>₹85,000</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="cards"
                  style="border-left: 6px solid #6226EF;">
                  <div class="imgsa">
                    <img src="assets/images/purple.svg" alt="">
                  </div>
                  <div class="contsa">
                    <p>Pending Amount</p>
                    <span>₹26,000</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="cards"
                  style="border-left: 6px solid #FF5452;">
                  <div class="imgsa">
                    <img src="assets/images/read.svg" alt="">
                  </div>
                  <div class="contsa">
                    <p>Overdue Amount</p>
                    <span>₹23,000</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="select_sec">
          <div class="container-fluid">
            <div class="row">

              <div class="col-lg-2">
                <div class="centerTwo one">
                  <label>Region</label>
                  <select class="select2 custom">
                    <option>South</option>
                    <option>North</option>
                  </select>
                </div>
              </div>

              <div class="col-lg-2">
                <div class="centerTwo one">
                  <label>Month & Year</label>
                  <select class="select2 custom">
                    <option>Mar - 2026</option>
                  </select>
                </div>
              </div>


              <div class="col-lg-2">
                <div class="centerTwo one">
                  <label>Payment status</label>
                  <select class="select2 custom">
                    <option>Paid</option>
                    <option>Pending</option>
                  </select>
                </div>
              </div>


              <div class="col-lg-2">
                <div class="centerTwo one">
                  <label>Service</label>
                  <select class="select2 custom">
                    <option>Nursing+Medicine</option>
                  </select>
                </div>
              </div>


              <div class="col-lg-4">
                <div class="centerTwo one">
                  <label>School</label>
                  <select class="select2 custom">
                    <option>Sri Gopal Naidu Children's School</option>
                  </select>
                </div>
              </div>


            </div>
          </div>
        </section>



        <section class="Tables">
          <div class="container-fluid">
            <div class="row">
              <table id="exampleSeven" class="table" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>School Name</th>
                    <th>Region</th>
                    <th>Billing Frequency</th>
                    <th>Invoice Date</th>
                    <th>Payment Status</th>
                    <th>Download Invoice</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Sri Gopal Naidu Children's School  </td>
                    <td>South</td>
                    <td>Monthly</td>
                    <td>10.01.2026</td>
                    <td>
                      <span class="paid">Paid</span>
                    </td>
                    <td><span class="pdf_btn"><img src="assets/images/v22.svg" alt="">PDF</span></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>ABC Matric higher Secondary School</td>
                    <td>Banglore</td>
                    <td>Quarterly</td>
                    <td>24.03.2026</td>
                    <td>
                      <img data-bs-toggle="modal" data-bs-target="#staticBackdropNine" class="orange-info" src="assets/images/orange-info.svg" alt="">
                      <img data-bs-toggle="modal" data-bs-target="#staticBackdropEleven" class="red-info" src="assets/images/red-info.svg" alt="">
                      <select class="status-dropdown">
                        <option value="pending" selected>Pending</option>
                        <option value="overdue">Overdue</option>
                      </select>
                    </td>
                    <td><span class="pdf_btn"><img src="assets/images/v22.svg" alt="">PDF</span></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>SNR Matric higher Secondary School</td>
                    <td>Telangana</td>
                    <td>Yearly</td>
                    <td>07.02.2026</td>
                    <td>
                      <img class="orange-info" src="assets/images/orange-info.svg" alt="">
                      <img class="red-info" src="assets/images/red-info.svg" alt="">
                      <select class="status-dropdown">
                        <option value="pending">Pending</option>
                        <option value="overdue" selected>Overdue</option>
                      </select>
                    </td>
                    <td><span class="pdf_btn"><img src="assets/images/v22.svg" alt="">PDF</span></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Mahatma Matriculation School</td>
                    <td>North</td>
                    <td>Monthly</td>
                    <td>10.01.2026</td>
                    <td>
                      <span class="paid">Paid</span>
                    </td>
                    <td><span class="pdf_btn"><img src="assets/images/v22.svg" alt="">PDF</span></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Sri Ramakrishna Matriculation School</td>
                    <td>South</td>
                    <td>Quarterly</td>
                    <td>24.03.2026</td>
                   <td>
                    <img class="orange-info" src="assets/images/orange-info.svg" alt="">
                      <img class="red-info" src="assets/images/red-info.svg" alt="">
                      <select class="status-dropdown">
                        <option value="pending" selected>Pending</option>
                        <option value="overdue">Overdue</option>
                      </select>
                    </td>
                    <td><span class="pdf_btn"><img src="assets/images/v22.svg" alt="">PDF</span></td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>ABC Matric higher Secondary School</td>
                    <td>Banglore</td>
                    <td>Yearly</td>
                    <td>07.02.2026</td>
                    <td>
                      <img class="orange-info" src="assets/images/orange-info.svg" alt="">
                      <img class="red-info" src="assets/images/red-info.svg" alt="">
                      <select class="status-dropdown">
                        <option value="pending">Pending</option>
                        <option value="overdue" selected>Overdue</option>
                      </select>
                    </td>
                    <td><span class="pdf_btn"><img src="assets/images/v22.svg" alt="">PDF</span></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>SNR Matric higher Secondary School</td>
                    <td>Telangana</td>
                    <td>Monthly</td>
                    <td>10.01.2026</td>
                    <td>
                      <span class="paid">Paid</span>
                    </td>
                    <td><span class="pdf_btn"><img src="assets/images/v22.svg" alt="">PDF</span></td>
                  </tr>

                  <tr>
                    <td>8</td>
                    <td>Mahatma Matriculation School</td>
                    <td>North</td>
                    <td>Quarterly</td>
                    <td>24.03.2026</td>
                    <td>
                      <img class="orange-info" src="assets/images/orange-info.svg" alt="">
                      <img class="red-info" src="assets/images/red-info.svg" alt="">
                      <select class="status-dropdown">
                        <option value="pending" selected>Pending</option>
                        <option value="overdue">Overdue</option>
                      </select>
                    </td>
                    <td><span class="pdf_btn"><img src="assets/images/v22.svg" alt="">PDF</span></td>
                  </tr>


                  <tr>
                    <td>9</td>
                    <td>Sri Ramakrishna Matriculation School</td>
                    <td>South</td>
                    <td>Yearly</td>
                    <td>07.02.2026</td>
                   <td>
                    <img class="orange-info" src="assets/images/orange-info.svg" alt="">
                      <img class="red-info" src="assets/images/red-info.svg" alt="">
                      <select class="status-dropdown">
                        <option value="pending">Pending</option>
                        <option value="overdue" selected>Overdue</option>
                      </select>
                    </td>
                    <td><span class="pdf_btn"><img src="assets/images/v22.svg" alt="">PDF</span></td>
                  </tr>

                  <tr>
                    <td>10</td>
                    <td>ABC Matric higher Secondary School</td>
                    <td>Banglore</td>
                    <td>Monthly</td>
                    <td>10.01.2026</td>
                    <td>
                      <span class="paid">Paid</span>
                    </td>
                    <td><span class="pdf_btn"><img data-bs-toggle="modal" data-bs-target="#staticBackdropTen" src="assets/images/v22.svg" alt="">PDF</span></td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </section>

      </div>
      <?php include './includes/footer.php'; ?>
      <?php include './includes/modal.php'; ?>
    </div>

  </div>

  </div>

  <?php include './includes/js.php'; ?>

</body>

</html>