<?php
include('nav.php');
?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
              <!-- bg-gradient-primary -->
              <!-- style="color:blue;" -->
                <span style="background-color:blue;" class="page-title-icon text-white me-2 ">
                  <i class="mdi mdi-home"></i>
                </span> Newsletter Signup
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
           <!--  ---------------------------- TABLE -------------------------------------------> 
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Newsletter Signup</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> S/N </th>
                            <th> Email Address </th>
                            <th> Date of Signup</th>
                          </tr>
                        </thead>
                        <tbody>

                        <tr>
                      <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                      <?php
                          // LOOP TILL END OF DATA
                        if (mysqli_num_rows($res) === 0) {
                          // Print the text in the middle of a table
                          echo '<table><tr><td colspan="4" align="center">No data available</td></tr></table>'; 
                          } else {
                            while($rows = mysqli_fetch_assoc($res)) {
                        ?>
                        <tr>
                          <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                          <td><?php echo $rows['id']; ?></td>
                          <td><?php echo $rows['email Address']; ?></td>
                          <td><?php echo $rows['date']; ?></td>
                        </tr>
                        <?php
                            }
                          }
                        ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ------------------------------------- FOOTER ------------------------------------------->
          </div>
          <!-- content-wrapper ends -->
          <?php
            include('footer.php');
          ?>