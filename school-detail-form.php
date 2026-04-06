<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Health Basix | KNM Dashboard</title>
  <?php include './includes/css.php'; ?>
</head>

<body>
  <div class="container-scroller">
    <?php include './includes/header.php'; ?>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">

        <section class="CardSection">
          <div class="">
            <div class="row card_main">
              <div class="col-lg-3">
                <div class="cards">
                  <h3>Sri Gopal Naidu Children's School</h3>
                  <div class="sec">
                    <div class="sec1">
                      <p>School ID:</p>
                      <p>9129</p>
                    </div>
                    <div class="sec1">
                      <p>School Status:</p>
                      <p>Renewed</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="cards">
                  <h3 class="heading1">Type of School:</h3>
                  <p class="phara1">Non Residential</p>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="cards">
                  <h3 class="heading1">No.of.Students:</h3>
                  <p class="phara1">650</p>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="cards">
                  <h3 class="heading1">City:</h3>
                  <p class="phara1">Coimbatore</p>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="cards">
                  <h3 class="heading1">BD Executive:</h3>
                  <p class="phara1">Sanma</p>
                </div>
              </div>
              <div class="col-lg-1">
                <div class="cards last">
                  <h3 class="heading1">Region:</h3>
                  <p class="phara1">South</p>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="FormSect">
          <div class="container-fluid">
            <div class="row">

              <div class="col-lg-4">
                <div class="input-group">
                  <input type="text" name="Types_of_Service" id="Types_of_Service" placeholder=" " required>
                  <label for="Types_of_Service">Types of Service</label>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="input-group">
                  <input type="text" name="Type_of_Deal" id="Type_of_Deal" placeholder=" " required>
                  <label for="Type_of_Deal">Type of Deal</label>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="input-group">
                  <input class="dateB" type="date" name="MOU_Sign_Date" id="MOU_Sign_Date" required>
                  <label for="MOU_Sign_Date">MOU Sign Date</label>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="input-group">
                  <input class="dateB" type="date" name="Service_Start_Date" id="Start_Date" required>
                  <label for="Start_Date">Service Start Date</label>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="input-group">
                  <input class="dateB" type="date" name="Last Renewal Date" id="Renewal_Date" required>
                  <label for="Last Renewal Date">Last Renewal Date</label>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="input-group">
                  <input class="dateB" type="date" name="MOU Sign Date" id="Start_Date" required>
                  <label for="MOU Sign Date">MOU Sign Date</label>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="input-group">
                  <input type="text" name="Renewal_Status" id="Renewal_Status" placeholder=" " required>
                  <label for="Renewal_Status">Renewal Status</label>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="input-group">
                  <select name="Deal_Upgraded" id="Deal_Upgraded" required>
                    <option value="" disabled selected hidden></option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="pending">Pending</option>
                  </select>
                  <label for="Deal_Upgraded">Deal Upgraded</label>
                </div>
              </div>


              <div class="col-lg-4">
                <div class="input-group">
                  <select name="Type_of_Upgrade" id="Type_of_Upgrade" required>
                    <option value="" disabled selected hidden></option>
                    <option value="yes">N/A</option>
                    <option value="no">No</option>
                    <option value="pending">Pending</option>
                  </select>
                  <label for="Type_of_Upgrade">Type of Upgrade</label>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="input-group">
                  <input type="text" name="Deal_Value" id="Deal_Value" placeholder=" " required>
                  <label for="Deal_Value">Deal Value</label>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="input-group">
                  <input type="text" name="Revenue_Months" id="Revenue_Months" placeholder=" " required>
                  <label for="Revenue_Months">Revenue Months</label>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="input-group">
                  <select name="Billing_Frequency" id="Billing_Frequency" required>
                    <option value="" disabled selected hidden></option>
                    <option value="Quarterly">Quarterly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Annual">Annual</option>
                  </select>
                  <label for="Billing_Frequency">Billing Frequency</label>
                </div>
              </div>

              <div class="btns">
                <button type="submit" class="cancel">Cancel</button>
                <button type="submit" class="update">Update</button>
              </div>

            </div>
          </div>
        </section>


      </div>
      <?php include './includes/modal.php'; ?>
      <?php include './includes/footer.php'; ?>
    </div>
  </div>
  </div>
  <?php include './includes/js.php'; ?>
</body>

</html>