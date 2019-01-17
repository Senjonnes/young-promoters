<?php
$con = new mysqli("localhost","root", "", "ypan");

$sqlquery = "SELECT * FROM bankbalance";
$result = mysqli_query($con, $sqlquery);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Young Promoters Nigeria Limited | Balance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A coorperative group website">
    <meta name="author" content="Odeyemi Oluwaseun">
    <meta name="keywords" content="YPAN, coorperative, contribution, loan and payment">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body onload="addCell()">
    <!--NavigationBar-->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#top"><img src="img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="home.html">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">LOGOUT</a>
                </li>
              </ul>
            </div>
        </nav>
    </section>
    <!-- Promo -->
    <section id="promo">
        <div class="container">
            <p>Get Member's Loan Bond</p>
            <div class="row">
                <div class="col-md-6 text-center" style="margin:auto;">
                    <form>
                        <select class="chosen-select" style="width: 100%">
                                <option disabled selected>Member's Name</option>
                            <option>India</option>
                            <option>Nigeria</option>
                            <option>Qatar</option>
                            <option>Canada</option>
                            <option>Australia</option>
                            <option>USA</option>
                            <option>America</option>
                            <option>London</option>
                            <option>China</option>
                            <option>Japan</option>
                            <option>Newzeland</option>
                            <option>Norway</option>
                        </select>
                    </form>
                    <a href="loanbond.html" class="btn btn-primary">Get Loan Bond</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal Entry -->
    <section id="entry">
        <div class="open-button">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal">New Entry</button>
        </div>
        <div class="modal fade" role="dialog" id="loginModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Create New Entry</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" name="date" class="form-control" placeholder="Date">
                                </div>
                                <div class="form-group">
                                    <label for="savings">Members' Savings</label>
                                    <input type="number" name="savings" class="form-control" placeholder="Members Savings">
                                </div>
                                <div class="form-group">
                                    <label for="fee">Entrance Fee</label>
                                    <input type="number" name="fee" class="form-control" placeholder="Entrance Fee">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="installment">Installment</label>
                                    <input type="number" name="installment" class="form-control" placeholder="Installment">
                                </div>
                                <div class="form-group">
                                    <label for="interest">Bank Interest</label>
                                    <input type="number" name="interest" class="form-control" placeholder="Bank Interest">
                                </div>
                                <div class="form-group">
                                    <label for="sundry">Sundry Income</label>
                                    <input type="number" name="sundry" class="form-control" placeholder="Sundry Income">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="deposit">Fixed Deposit</label>
                                    <input type="number" name="deposit" class="form-control" placeholder="Fixed Deposit">
                                </div>
                                <div class="form-group">
                                    <label for="expendicture">Expendicture</label>
                                    <input type="number" name="expendicture" class="form-control" placeholder="Expendicture">
                                </div>
                                <div class="form-group">
                                    <label for="loan">Loan</label>
                                    <input type="number" name="loan" class="form-control" placeholder="Loan">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="form-group" id="base">
                                <label for="balance">Balance</label>
                                <input type="number" name="balance" class="form-control" placeholder="Balance">
                            </div>
                            <div class="form-group" id="base2">
                                <label for="comment">Comment</label>
                                <input type="text" name="comment" class="form-control" placeholder="Comment">
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Add Entry</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cash Balance Sheet Table -->
    <section id="table">
        <div class="con">
            <h1>Cash/Bank Balance Sheet</h1>
            <div class="index-table">
                <p>Select Number of Rows</p>
                <table id="balanceTable" class="table table-responsive table-striped table-bordered table-hover">
                    <thead>
                        <tr class="table-info">
                            <th>Dates</th>
                            <th>Member's Savings</th>
                            <th>Entrance Fees</th>
                            <th>Installment</th>
                            <th>Bank Interest</th>
                            <th>Sundry Income</th>
                            <th>Fixed Deposit</th>
                            <th>Expendictures</th>
                            <th>Loan</th>
                            <th>Balance</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody id="tt">
                        <?php while($row=mysqli_fetch_assoc($result)) :?>
                            <tr>
                                <td><?php echo date_format(date_create($row['dates']), 'd/m/Y'); ?></td>
                                <td><?php echo $row['membersavings']; ?></td>
                                <td><?php echo $row['entrancefees']; ?></td>
                                <td><?php echo $row['instalment']; ?></td>
                                <td><?php echo $row['bankinterest']; ?></td>
                                <td><?php echo $row['sundryincome']; ?></td>
                                <td><?php echo $row['fixeddeposit']; ?></td>
                                <td><?php echo $row['expendictures']; ?></td>
                                <td><?php echo $row['loan']; ?></td>
                                <td><?php echo $row['balance']; ?></td>
                                <td><?php echo $row['comment']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </section>
    <!-- Footer -->
    <section id="footer">
        <div class="container text-center">
            <p>Made With <i class="fa fa-heart-o"></i> by Odeyemi Oluwaseun</p>
        </div>
    </section>
    <!-- Footer End -->
    <script src="js/main.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
        $(document).ready( function () {
            $('#balanceTable').DataTable({
                "order": []
            });
        });
        $(document).ready(function() {
            $('.chosen-select').select2({
                width: 'resolve' // need to override the changed default
            });
        });
    </script>
</body>
</html>