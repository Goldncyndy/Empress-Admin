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
                </span> Contact Info
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
                    <h4 class="card-title">Visitors Contact Info</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> S/N </th>
                            <th> Name </th>
                            <th> Email</th>
                            <th> Website </th>
                            <th> Comment</th>
                          </tr>
                        </thead>
                        <tbody>

                        <tr>
                      <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                      <?php
                          // LOOP TILL END OF DATA
                        if (mysqli_num_rows($result) === 0) {
                          // Print the text in the middle of a table
                          echo '<table><tr><td colspan="4" align="center">No data available</td></tr></table>'; 
                          } else {
                            while($rows = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                          <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                          <td><?php echo $rows['id']; ?></td>
                          <td><?php echo $rows['name']; ?></td>
                          <td><?php echo $rows['email']; ?></td>
                          <td><?php echo $rows['website']; ?></td>
                          <td><?php echo $rows['comment']; ?></td>
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
