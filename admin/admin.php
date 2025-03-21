
<?php

include(config.php);
// Start session
session_start();


// Check if user is logged in
if (!isset($_SESSION['name']))
echo "welcome".$_SESSION['name'];

{
    // Redirect to login page if not logged in
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <title>ParNav Foundation</title>
    <link rel="icon" type="image/png" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="newlogin/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="/lighttheme/icons/styles.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body class="sb-nav-fixed">
    <nav>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-danger ">
            <!-- Navbar Brand-->
            <a class="navbar-brand pl-2 fw-bold text-white" href="admin.html">
                <img src="images/parnav-logo.png"  width="200px" height="50px" alt="img-fluid">
                
            </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm  mr-auto" id="sidebarToggle" href="#"><i
                    class="fas fa-bars"></i></button>
            <!----Nav search------>
            <form class="d-none d-md-inline-block form-inline mx-auto   navbar-search">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="What would like to do today?"
                        aria-label="What would like to do today?" aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-warning" id="btnNavbarSearch" type="button"><i
                            class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0 mr-3 mr-lg-4 ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ml-2" id="navbarDropdownLink" href="" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#"><?php echo $_SESSION['name']; ?></a>
                        <a class="dropdown-item" href="#">Setting</a>
                        <a class="dropdown-item" href="#">Active Log</a>
                        <a class="dropdown-item" href="#">Log-Out</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-header mt-2">
                        <div class="strong">
                            <img src="images/favicon.ico">
                            ParNav Foundation
                        </div>
                        <div class="sb-sidenav-menu mt-3">
                            <div class="nav">
                                <li>
                                    <a class="nav-link active" href="admin.html">
                                        <div class="sb-nav-link-icon ">
                                            <span class="mr-2"> <i class="fas fa-tachometer-alt"></i></span>
                                        </div>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="sb-sidenav-menu-heading">Interface</div>
                                </li>
                                <li>
                                    <a class="nav-link px-3 sidebar-link" data-toggle="collapse" href="#collapseExample"
                                        role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <span class="mr-2"><i class="fas fa-user fa-fw "></i></span>
                                        <span>User</span>
                                        <span class="right-icon ml-auto"><i class="fas fa-angle-down"></i></span>
                                    </a>
                                    <div class="collapse" id="layouts">
                                        <ul class="navbar-nav pl-3">
                                            <li>
                                                <a href="admin.html" class="nav-link px-3">
                                                    <span class="me-2"><i class="fas fa-tachometer-alt"></i></span>
                                                    <span>Dashboard</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link" href="pledge.html">
                                        <div class="sb-nav-link-icon"><span class="mr-2"><i
                                                    class="fas fa-hand-holding-heart"></i></span></div>
                                        <span> Pledge</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="enquire.html">
                                        <div class="sb-nav-link-icon"><span class="mr-2"><i
                                                    class="far fa-address-card"></i></span></div>
                                        <span> Enquire</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="donation.html">
                                        <div class="sb-nav-link-icon"><span class="mr-2"><i class="fas fa-donate"></i>
                                        </div>
                                        <span> Donation</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="member.html">
                                        <div class="sb-nav-link-icon"><span class="mr-2"><i
                                                    class="fas fa-users"></i></span></div>
                                        <span> Member</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="blood.html">
                                        <div class="sb-nav-link-icon"> <span class="mr-2"><i
                                                    class="fa-solid fa-truck-droplet"></i></span></div>
                                        <span> Blood-Bank</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="education.html">
                                        <div class="sb-nav-link-icon"><span class="mr-2"><i
                                                    class="fa-solid fa-book-open-reader"></i></span></div>
                                        <span>Education</span>
                                    </a>
                                </li>

                            </div>
                        </div>


                        <div class="sb-sidenav-footer py-5 my-5">
                            <div class="small">Logged in as:</div>
                            ParNav Foundation
                        </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-3">
                        <h1 class="mt-2">Dashboard</h1>
                        <ol class="breadcrumb my-3">
                            <li class="breadcrumb-item active fw-bold">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-4 col-md-8">
                                <div class="card bg-primary text-white my-3">
                                    <div class="card-body">Pledge</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="pledge.html">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-8">
                                <div class="card bg-warning text-white my-3">
                                    <div class="card-body">Enquire</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="enquire.html">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-8">
                                <div class="card bg-success text-white my-3">
                                    <div class="card-body">Donation</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="donation.html">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-8">
                                <div class="card bg-warning text-white my-3">
                                    <div class="card-body">Member</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="member.html">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-8">
                                <div class="card bg-danger text-white my-4">
                                    <div class="card-body">Blood-Bank</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="blood.html">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-8">
                                <div class="card bg-primary text-white my-4">
                                    <div class="card-body">Education</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="education.html">View
                                            Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid px-3">
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                <strong>Filter:</strong>Month: January | Year :2024
                            </div>
                            <div class="card-body px-3">
                                <button class="btn btn-dark "><i class="fa-solid fa-filter"></i>Filter</button>
                                <div class="table-responsive card mt-2">
                                    <div class="table-wrapper">
                                        <div class="table-title">
                                            <div class="table-title">
                                                <div class="row">
                                                    <div class="col-sm-8  ">
                                                        <h2>User <b>Details</b></h2>
                                                    </div>
                                                    <div class="col-sm-4  ">
                                                        <div class="search-box">
                                                            <i class="material-icons">&#xE8B6;</i>
                                                            <input type="text" class="form-control"
                                                                placeholder="Search&hellip;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name <i class="fa fa-sort"></i></th>
                                                    <th>Email</th>
                                                    <th>Adderss <i class="fa fa-sort"></i></th>
                                                    <th>P. No.</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" class="view" title="View" data-toggle="tooltip"><i
                                                                class="material-icons">&#xE417;</i></a>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i
                                                                class="material-icons">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete"
                                                            data-toggle="tooltip"><i
                                                                class="material-icons">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" class="view" title="View" data-toggle="tooltip"><i
                                                                class="material-icons">&#xE417;</i></a>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i
                                                                class="material-icons">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete"
                                                            data-toggle="tooltip"><i
                                                                class="material-icons">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" class="view" title="View" data-toggle="tooltip"><i
                                                                class="material-icons">&#xE417;</i></a>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i
                                                                class="material-icons">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete"
                                                            data-toggle="tooltip"><i
                                                                class="material-icons">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" class="view" title="View" data-toggle="tooltip"><i
                                                                class="material-icons">&#xE417;</i></a>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i
                                                                class="material-icons">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete"
                                                            data-toggle="tooltip"><i
                                                                class="material-icons">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" class="view" title="View" data-toggle="tooltip"><i
                                                                class="material-icons">&#xE417;</i></a>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i
                                                                class="material-icons">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete"
                                                            data-toggle="tooltip"><i
                                                                class="material-icons">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="clearfix">
                                            <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                            <ul class="pagination">
                                                <li class="page-item disabled"><a href="#"><i
                                                            class="fa fa-angle-double-left"></i></a></li>
                                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                                <li class="page-item"><a href="#" class="page-link"><i
                                                            class="fa fa-angle-double-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-3 bg-light mt-auto">
                    <div class="container-fluid px-4 mt-2">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted fw-bold text-primary">Copyright &copy; ParNav Foundation 2024</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script type="text/javascript" src="script.js"></script>
        <script src="lighttheme/lib/js/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="newlogin/vendor/bootstrap/js/popper.js"></script>
        <script type="text/javascript" src="newlogin/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>

</body>

</html>
