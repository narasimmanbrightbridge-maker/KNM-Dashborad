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
                <a href="schools.php"><div class="port">
                  <div class="conts">
                    <img src="assets/images/4.svg" alt="">
                    <div class="cont">
                      <h6>Total Schools</h6>
                      <p>200</p>
                    </div>
                  </div>
                </div></a>
              </div>
              <div class="col-lg-3">
                <a href="schools.php">
                  <div class="port">
                  <div class="conts">
                    <img src="assets/images/3.svg" alt="">
                    <div class="cont">
                      <h6>Active Services</h6>
                      <p>180</p>
                    </div>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-lg-3">
                <a href="schools.php">
                  <div class="port">
                  <div class="conts">
                    <img src="assets/images/2.svg" alt="">
                    <div class="cont">
                      <h6>Inactive Schools</h6>
                      <p>17</p>
                    </div>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-lg-3">
                <a href="schools.php">
                  <div class="port">
                  <div class="conts">
                    <img src="assets/images/1.svg" alt="">
                    <div class="cont">
                      <h6>Closed Schools</h6>
                      <p>03</p>
                    </div>
                  </div>
                </a>
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
                <div class="ca1 calsOne" style="height: 360px;">
                  <h3>School Status Overview</h3>
                  <canvas id="schoolchart"></canvas>
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
                <div class="bg-main bg-orange">
                  <p>Invoice Generated</p>
                  <div class="hed">
                    <span>₹3,25,000</span>
                    <img src="assets/images/ds.svg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="bg-main bg-yellow">
                  <p>Amount Received</p>
                  <div class="hed">
                    <span>₹85,000</span>
                    <img src="assets/images/ds.svg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="bg-main bg-green">
                  <p>Pending Amount</p>
                  <div class="hed">
                    <span>₹26,000</span>
                    <img src="assets/images/ds.svg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="bg-main bg-purple">
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


        <section class="card-4">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3">
                <div class="ca1">
                  <div class="ca2" style="background-color: #FFF5D9">
                    <img src="assets/images/monthly-revenue.svg" alt="">
                    <div class="ca3">
                      <h6>Monthly Revenue</h6>
                      <p>₹60,360</p>
                    </div>
                  </div>
                  <div class="ca2" style="background-color: #E7EDFF">
                    <img src="assets/images/monthly-expenses.svg" alt="">
                    <div class="ca3">
                      <h6>Monthly Expenses</h6>
                      <p>₹35,000</p>
                    </div>
                  </div>
                  <div class="ca2" style="background-color: #FFE0EB">
                    <img src="assets/images/monthly-profit.svg" alt="">
                    <div class="ca3">
                      <h6>Monthly Profit</h6>
                      <p>₹25,360</p>
                    </div>
                  </div>
                  <div class="ca2" style="background-color: #DCFAF8">
                    <img src="assets/images/three.svg" alt="">
                    <div class="ca3">
                      <h6>Profit Margin %</h6>
                      <p>18.6%</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="cardMain" style="height: 360px;">
                  <div class="headerMain">
                    <div class="title">Monthly Revenue Trend</div>
                    <div class="legendOne">
                      <span></span> Revenue (₹)
                    </div>
                  </div>
                  <canvas id="revenueChart"></canvas>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="ca1chat" style="height: 360px;">
                  <h3>Revenue by Service</h3>
                  <canvas id="Revenue"></canvas>
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