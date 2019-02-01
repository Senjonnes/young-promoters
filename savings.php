<?php
$con = new mysqli("localhost","root", "", "ypan");

$membersname = "SELECT * FROM members";
$names = mysqli_query($con, $membersname);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Young Promoters Nigeria Limited | Installment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A coorperative group website">
    <meta name="author" content="Odeyemi Oluwaseun">
    <meta name="keywords" content="YPAN, coorperative, contribution, loan and payment">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <!-- Font awesome starts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font awesome ends -->
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
    <script src="js/axios.js"></script>
    <script src="js/notify.js"></script>
    <script src="js/sweetalert.min.js"></script>
</head>
<body>
    <!--NavigationBar-->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#top"><img src="img/company-logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="home.php">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">LOGOUT</a>
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
                            <?php while($row=mysqli_fetch_assoc($names)) :?>
                                <option><?php echo $row['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </form>
                    <a href="loanbond.php" class="btn btn-primary">Get Loan Bond</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal Entry -->
    <section id="entry">
        <div class="open-button">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Add Account</button>
        </div>
        <div class="modal fade" role="dialog" id="loginModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">New Savings Account</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="number">Account Number</label>
                                    <input type="text" name="number" class="form-control" placeholder="Number">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" name="date" class="form-control" placeholder="Date">
                                </div>
                                <div class="form-group">
                                    <label for="particulars">Particulars</label>
                                    <input type="text" name="particulars" class="form-control" placeholder="Particulars">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="withdraw">Withdrawal</label>
                                    <input type="number" name="withdraw" class="form-control" placeholder="Withdraw">
                                </div>
                                <div class="form-group">
                                    <label for="deposit">Deposit</label>
                                    <input type="number" name="deposit" class="form-control" placeholder="Deposit">
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
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Create Account</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Members Savings -->
    <section id="member-savings">
        <div class="container">
            <h1>Members' Savings Account</h1>
            <div class="row">
                <div class="col-md-6 text-center" style="margin:auto;">
                    <form>
                        <select class="chosen-select" style="width: 100%">
                        <option disabled selected>Member's Name</option>
                            <?php while($row=mysqli_fetch_assoc($names)) :?>
                                <option><?php echo $row['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </form>
                    <a href="loanbond.php" class="btn btn-primary">Show Account</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Memebers Savings table -->
    <section id="savings-table">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-2">
                    <p class="account-name">Name:</p>
                    <p class="account-number">Account Number:</p>
                </div>
                <div class="col-2">
                    <p class="values">ODEYEMI KEHINDE</p>
                    <p class="values">03</p>
                </div>
            </div>
            <div class="account-table">
                <p class="row-num">Select Number of Rows</p>
                <table id="savingsTable" class="table table-responsive table-striped table-hover">
                    <thead>
                        <tr class="table-info">
                            <th>Dates</th>
                            <th>Particulars</th>
                            <th>Withdrawal</th>
                            <th>Deposit</th>
                            <th>Balance</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01/01/2019</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>
                                <input type="hidden" class="id" value="<?= $row['id']; ?>">
                                <div class="btn-group" role="group" style="display:flex;">
                                    <button class="btn btn-warning btn-sm edit" title="Edit" onclick="edit(this)"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-danger btn-sm trash" title="Delete" onclick="deleteo(this)"><i class="fa fa-trash"></i></button>
                                </div>
                                
                                <div class="btn-group" role="group" style="display:flex;">
                                    <button class="btn btn-success btn-sm update" title="Update" onclick="update(this)" style="display:none"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-default btn-sm cancel" title="Cancel" onclick="cancel(this)" style="display:none"><i class="fa fa-remove"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01/01/2019</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>
                                <input type="hidden" class="id" value="<?= $row['id']; ?>">
                                <div class="btn-group" role="group" style="display:flex;">
                                    <button class="btn btn-warning btn-sm edit" title="Edit" onclick="edit(this)"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-danger btn-sm trash" title="Delete" onclick="deleteo(this)"><i class="fa fa-trash"></i></button>
                                </div>
                                
                                <div class="btn-group" role="group" style="display:flex;">
                                    <button class="btn btn-success btn-sm update" title="Update" onclick="update(this)" style="display:none"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-default btn-sm cancel" title="Cancel" onclick="cancel(this)" style="display:none"><i class="fa fa-remove"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01/01/2019</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>
                                <input type="hidden" class="id" value="<?= $row['id']; ?>">
                                <div class="btn-group" role="group" style="display:flex;">
                                    <button class="btn btn-warning btn-sm edit" title="Edit" onclick="edit(this)"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-danger btn-sm trash" title="Delete" onclick="deleteo(this)"><i class="fa fa-trash"></i></button>
                                </div>
                                
                                <div class="btn-group" role="group" style="display:flex;">
                                    <button class="btn btn-success btn-sm update" title="Update" onclick="update(this)" style="display:none"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-default btn-sm cancel" title="Cancel" onclick="cancel(this)" style="display:none"><i class="fa fa-remove"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01/01/2019</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>
                                <input type="hidden" class="id" value="<?= $row['id']; ?>">
                                <div class="btn-group" role="group" style="display:flex;">
                                    <button class="btn btn-warning btn-sm edit" title="Edit" onclick="edit(this)"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-danger btn-sm trash" title="Delete" onclick="deleteo(this)"><i class="fa fa-trash"></i></button>
                                </div>
                                
                                <div class="btn-group" role="group" style="display:flex;">
                                    <button class="btn btn-success btn-sm update" title="Update" onclick="update(this)" style="display:none"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-default btn-sm cancel" title="Cancel" onclick="cancel(this)" style="display:none"><i class="fa fa-remove"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01/01/2019</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>
                                <input type="hidden" class="id" value="<?= $row['id']; ?>">
                                <div class="btn-group" role="group" style="display:flex;">
                                    <button class="btn btn-warning btn-sm edit" title="Edit" onclick="edit(this)"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-danger btn-sm trash" title="Delete" onclick="deleteo(this)"><i class="fa fa-trash"></i></button>
                                </div>
                                
                                <div class="btn-group" role="group" style="display:flex;">
                                    <button class="btn btn-success btn-sm update" title="Update" onclick="update(this)" style="display:none"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-default btn-sm cancel" title="Cancel" onclick="cancel(this)" style="display:none"><i class="fa fa-remove"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01/01/2019</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>
                                <input type="hidden" class="id" value="<?= $row['id']; ?>">
                                <div class="btn-group" role="group" style="display:flex;">
                                    <button class="btn btn-warning btn-sm edit" title="Edit" onclick="edit(this)"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-danger btn-sm trash" title="Delete" onclick="deleteo(this)"><i class="fa fa-trash"></i></button>
                                </div>
                                
                                <div class="btn-group" role="group" style="display:flex;">
                                    <button class="btn btn-success btn-sm update" title="Update" onclick="update(this)" style="display:none"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-default btn-sm cancel" title="Cancel" onclick="cancel(this)" style="display:none"><i class="fa fa-remove"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01/01/2019</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>1,000,000</td>
                            <td>
                                <input type="hidden" class="id" value="<?= $row['id']; ?>">
                                <div class="btn-group" role="group" style="display:flex;">
                                    <button class="btn btn-warning btn-sm edit" title="Edit" onclick="edit(this)"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-danger btn-sm trash" title="Delete" onclick="deleteo(this)"><i class="fa fa-trash"></i></button>
                                </div>
                                
                                <div class="btn-group" role="group" style="display:flex;">
                                    <button class="btn btn-success btn-sm update" title="Update" onclick="update(this)" style="display:none"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-default btn-sm cancel" title="Cancel" onclick="cancel(this)" style="display:none"><i class="fa fa-remove"></i></button>
                                </div>
                            </td>
                        </tr>                            
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
    <!-- <script src="js/bootstable.js"></script> -->
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
        $(document).ready( function () {
            $('#savingsTable').DataTable();
        });
        $(document).ready(function() {
            $('.chosen-select').select2({
                width: 'resolve' // need to override the changed default
            });
        });
        // $('#savingsTable').SetEditable();
    </script>
</html>