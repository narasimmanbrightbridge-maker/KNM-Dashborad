<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Health Basix | KNM Dashboard</title>
  <?php include './includes/css.php'; ?>
  <link rel="icon" type="image/x-icon" href="assets/images/mini-logo-two.svg">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
  <div class="container-scroller">
    <?php include './includes/header.php'; ?>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">

        <section class="card-1">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3">
                <div class="port">
                  <div class="conts">
                    <img src="assets/images/4.svg" alt="">
                    <div class="cont">
                      <h6>Total Schools</h6>
                      <p>200</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="port">
                  <div class="conts">
                    <img src="assets/images/3.svg" alt="">
                    <div class="cont">
                      <h6>Active Services</h6>
                      <p>180</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="port">
                  <div class="conts">
                    <img src="assets/images/2.svg" alt="">
                    <div class="cont">
                      <h6>Inactive Schools</h6>
                      <p>17</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="port">
                  <div class="conts">
                    <img src="assets/images/1.svg" alt="">
                    <div class="cont">
                      <h6>Closed Schools</h6>
                      <p>03</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="card-2">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4">
                <div class="ca1">
                  <h3>Payment Status</h3>
                  <div class="flexOne">
                    <canvas id="chart"></canvas>
                    <div class="charts_cons">
                      <div class="disply">
                        <img src="assets/images/received.svg" alt="">
                        <p>Received</p>
                      </div>
                      <div class="disply">
                        <img src="assets/images/pending.svg" alt="">
                        <p>Pending</p>
                      </div>

                      <div class="disply">
                        <img src="assets/images/overdue.svg" alt="">
                        <p>Overdue</p>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="ca1">
                  <h3>School Status Overview</h3>
                  <canvas id="schoolchart" height="260"></canvas>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="ca1">
                  <h3>Alerts</h3>
                  <div class="ca2" style="background-color: #FFF5D9">
                    <img src="assets/images/one.svg" alt="">
                    <div class="ca3">
                      <h6>Invoices overdue > 30 days</h6>
                      <p>10</p>
                    </div>
                  </div>
                  <div class="ca2" style="background-color: #E7EDFF">
                    <img src="assets/images/two.svg" alt="">
                    <div class="ca3">
                      <h6>Contracts expiring in 7 days</h6>
                      <p>17</p>
                    </div>
                  </div>
                  <div class="ca2" style="background-color: #FFE0EB">
                    <img src="assets/images/three.svg" alt="">
                    <div class="ca3">
                      <h6>Contracts expiring in 7 days</h6>
                      <p>17</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="card-3">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3">
                <div class="bg-main" style="background: linear-gradient(140deg,rgba(255, 82, 82, 1) 0%, rgba(247, 148, 69, 1) 75%);">
                  <p>Invoice Generated</p>
                  <div class="hed">
                    <span>₹3,25,000</span>
                    <img src="assets/images/ds.svg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="bg-main" style="background: linear-gradient(140deg,rgba(253, 161, 2, 1) 46%, rgba(255, 200, 37, 1) 75%);">
                  <p>Amount Received</p>
                  <div class="hed">
                    <span>₹85,000</span>
                    <img src="assets/images/ds.svg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="bg-main" style="background: linear-gradient(140deg,rgba(4, 194, 140, 1) 34%, rgba(4, 194, 140, 1) 37%, rgba(66, 252, 190, 1) 75%);">
                  <p>Pending Amount</p>
                  <div class="hed">
                    <span>₹26,000</span>
                    <img src="assets/images/ds.svg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="bg-main" style="background: linear-gradient(140deg,rgba(106, 50, 252, 1) 18%, rgba(185, 96, 225, 1) 70%);">
                  <p>Overdue Amount</p>
                  <div class="hed">
                    <span>₹23,000</span>
                    <img src="assets/images/ds.svg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
      <?php include './includes/footer.php'; ?>

    </div>

  </div>

  </div>

  <?php include './includes/js.php'; ?>

</body>

</html>