<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- icon link -->
    <link rel="icon" href="../pic/casaidaman.png" type="image/icon type">
    
    <link rel="stylesheet" href="DataTables/datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="DataTables/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="js/script.js"></script>

    <!-- CSS link --> 
    <link rel="stylesheet" href="../css/c19.css">
    <link href="../css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  
    <!--Google Charts-->
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    
    <!--Covid-19 Cases Chart-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Day');
      data.addColumn('number', 'Covid Cases');

      data.addRows([
        [1,  37.8],
        [2,  30.9],
        [3,  25.4],
        [4,  11.7],
        [5,  11.9],
        [6,   8.8],
        [7,   7.6],
        [8,  12.3],
        [9,  16.9],
        [10, 12.8],
        [11,  5.3],
        [12,  6.6],
        [13,  4.8],
        [14,  4.2],
        [15,  37.8],
        [16,  30.9],
        [17,  25.4],
        [18,  11.7],
        [19,  11.9],
        [20,   8.8],
        [21,   7.6],
        [22,  12.3],
        [23,  16.9],
        [24, 12.8],
        [25,  5.3],
        [26,  6.6],
        [27,  4.8],
        [28,  4.2],
        [29,  4.8],
        [30,  4.2]
      ]);

      var options = {
        chart: {
        },
        
        height: 250,
        backgroundColor: '#f8f9fa',
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
    
    
    <!--Quarantine Cases Chart-->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Close Contact',     11],
          ['Covid-19',      2]
        ]);

        var options = {
          
          height: 250,
          backgroundColor: '#f8f9fa'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <title>Casa Idaman C19 Report</title>
  </head>

  <body class="bg-dark">

    <!-- header section starts  -->
    
    <header class="container ">
    
      <nav class="navbar fixed-top navbar-expand-lg navbar-light  navigation bg-transparent   ">
        <div class="container">
            <div style="display: flex; align-items:center;">
                <a class="navbar-brand" href="#"><img class="logo" src="../pic/casaidaman.png" width="180px" alt=""></a>
                <h3 style="font-weight: 800; font-size: 24px; color: #ffffff;">Casa Idaman</h3>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class=" navbar-toggler-icon "><i class="fas fa-bars"
                        style="color:#fff; font-size:28px;"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item navi">
                        <a class="nav-link text-white nav-list " href="../admin/management.html">Home</a>
                      </li>
                      <li class="nav-item navi">
                        <a class="nav-link text-white" href="../admin/manageResident.html">Manage Residents</a>
                      </li>
                      <li class="nav-item navi">
                        <a class="nav-link text-white nav-list " href="../c19management/c19report.html">Covid Reports</a>
                      </li>
                      <li class="nav-item navi">
                        <a class="nav-link text-white nav-list " href="../c19management/c19validation.php">Covid Validation</a>
                      </li>
                      <li class="nav-item navi">
                        <a class="nav-link text-white nav-list " href="../c19management/c19updatedata.html">Covid Data Update</a>
                      </li>
                      <li class="nav-item navi">
                        <a class="nav-link text-white" href="../main.html">Logout</a>
                      </li>
                </ul>
            </div>
        </div>
    </nav>
  
  
  </header>
    
    <!-- header section ends  -->
  
    <main>
      <section>
        <div class="container-lg" id="DataVisualiser">
          <div class="row">
            <h1 class="mb-3 text-white">Covid-19 Data Updates</h1>
            <p id="total" class="text-white">Daily and monthly cases of Casa Idaman's Covid-19 positive and close contact's quarantine data.</p>
          </div>
          <br>
          <div id="roundedrow" class="row bg-light gap-3">
            <div class="col p-5">
              <h3 id="header2" class="text-center">COVID-19 CASES</h3>
              <br>
              <!--Charts from database-->
              <div id="line_top_x"></div>
              <br>
              <p id="total" >Total Number of Covid-19 Cases: </p>
              <p id="subtotal" >Month: </p>
              <p id="subtotal" >Today: </p>

            </div>
            <div class="col p-5">
              <h3 id="header2" class="text-center">QUARANTINE CASES</h3>
              <br>
              <!--Chart from database-->
              <div id="piechart"></div>
              <br>
              <p id="total" >Total Number of People Under Quarantine: </p>
              <p id="subtotal" >Month: </p>
              <p id="subtotal" >Today: </p>

            </div>
          </div>
          <hr>
      </section>

      <!--update-->  
      
      <section> <!-- Update Daily C19 Cases-->
        <div class="container-lg my-lg-5" >
        
          <div id="updatedataform" class="col gap-3 bg-light">
            
            <h2 id="updatedata" class="mb-2 gap-5 text-dark">UPDATE COVID-19 DATA</h2>
            <hr>
            
            <div class="container py-5 h-100">
              <div class="row">
                  <div class="col-md-12" id="msg"></div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <table class="table table-hover table-bordered table-striped" id="authors-tbl">
                          <thead>
                              <tr class="bg-dark text-light bg-gradient bg-opacity-150">
                                  <th class="px-1 py-1 text-center">Report ID</th>
                                  <th class="px-1 py-1 text-center">Username</th>
                                  <th class="px-1 py-1 text-center">Phone Num.</th>
                                  <th class="px-1 py-1 text-center">Quarantine Start</th>
                                  <th class="px-1 py-1 text-center">Quarantine End</th>
                                  <th class="px-1 py-1 text-center">Type</th>
                                  <th class="px-1 py-1 text-center">Validation</th>
                                  <th class="px-1 py-1 text-center">Action</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr class="bg-dark text-light bg-gradient bg-opacity-150">
                                <th class="px-1 py-1 text-center">Report ID</th>
                                <th class="px-1 py-1 text-center">Username</th>
                                <th class="px-1 py-1 text-center">Phone Num.</th>
                                <th class="px-1 py-1 text-center">Quarantine Start</th>
                                <th class="px-1 py-1 text-center">Quarantine End</th>
                                <th class="px-1 py-1 text-center">Type</th>
                                <th class="px-1 py-1 text-center">Validation</th>
                                <th class="px-1 py-1 text-center">Action</th>
                              </tr>
                          </tfoot>
                      </table>
                  </div>
              </div>
          </div>
          <!-- Add Modal -->
          <div class="modal fade" id="add_modal" data-bs-backdrop="static">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Add Author</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="container-fluid">
                              <form action="" id="new-author-frm">
                                  <div class="form-group">
                                      <label for="first_name" class="control-label">First Name</label>
                                      <input type="text" class="form-control rounded-0" id="first_name" name="first_name" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="last_name" class="control-label">Last Name</label>
                                      <input type="text" class="form-control rounded-0" id="last_name" name="last_name" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="email" class="control-label">Email</label>
                                      <input type="text" class="form-control rounded-0" id="email" name="email" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="birthdate" class="control-label">Date of Birth</label>
                                      <input type="date" class="form-control rounded-0" id="birthdate" name="birthdate" required>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" form="new-author-frm">Save</button>
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- /Add Modal -->
          <!-- Edit Modal -->
          <div class="modal fade" id="edit_modal" data-bs-backdrop="static">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Edit Author's Details</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="container-fluid">
                              <form action="" id="edit-author-frm">
                                  <input type="hidden" name="id">
                                  <div class="form-group">
                                      <label for="first_name" class="control-label">First Name</label>
                                      <input type="text" class="form-control rounded-0" id="first_name" name="first_name" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="last_name" class="control-label">Last Name</label>
                                      <input type="text" class="form-control rounded-0" id="last_name" name="last_name" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="email" class="control-label">Email</label>
                                      <input type="text" class="form-control rounded-0" id="email" name="email" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="birthdate" class="control-label">Date of Birth</label>
                                      <input type="date" class="form-control rounded-0" id="birthdate" name="birthdate" required>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" form="edit-author-frm">Save</button>
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- /Edit Modal -->
          <!-- Delete Modal -->
          <div class="modal fade" id="delete_modal" data-bs-backdrop="static">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Confirm</h5>
                      </div>
                      <div class="modal-body">
                          <div class="container-fluid">
                              <form action="" id="delete-author-frm">
                                  <input type="hidden" name="id">
                                  <p>Are you sure to delete <b><span id="name"></span></b> from the list?</p>
                              </form>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-danger" form="delete-author-frm">Yes</button>
                          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- /Delete Modal -->

            <hr>
            <form id="update" action="" method="post">
              <div class="row g-3 gap-1" style="padding: 20px; color: black;">

                <form>
                  
                  <h3 id="header1">Add Covid-19 Quarantine Report</h3>
                  <p id="subtotal">Manually insert Covid-19 and quarantine data here.</p>
                  <div class="form-group">
                    <label for=status>What is the person's status? </label><br>
                    <select class="form-select" id="status" name="c19status">
                      <option value="positive"> Covid-19 Positive</option>
                      <option value="close"> Close Contact</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for=status>What is the person's house unit number? </label><br>
                    <input type="text" class="form-control" id ="" name="myHouseNum">
                  </div>
                  <div class="form-group">
                    <label for="time">When does the person's quarantine start?</label>
                    <input type="datetime-local" class="form-control" id="time" name="myQuarantineStarts">
                  </div>
                  <div class="form-group">
                   <label for="time">When does the person's quarantine end?</label>
                    <input type="datetime-local" class="form-control" id="time" name="myQuarantineEnds">
                  </div><br>
                  <button type="submit" class="btn btn-primary" onclick="getInputValue();">Submit</button>
                  <script>

                    function getInputValue(){
                        // Displaying the value
                        alert("You have submitted the Covid-19 report");
                    }
                </script>
                </form>
                
            </form>
          </div>
        </div>
      </section>
    </main> 
  

    <!--Footer-->
    <footer class="footer">
      <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/my.casa.idaman/" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#">home</a>
        <a href="#facility">facilities</a>
        <a href="#visitor">visitor</a>
        <a href="c19report.html">covid-19 status</a>
        <a href="#">login</a>

    </div>

    <div class="credit">Created by <span>Web Programming Team 4</span> | all rights reserved</div>
    </footer>
  </body>
</html>
