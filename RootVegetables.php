<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Root Vegetables</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/shopping.css" rel="stylesheet">

     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-leaf"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Fruits and vegetable shop </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="Dashboard.php">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fab fa-product-hunt"></i>
                    <span>Products</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">All Products:</h6>
                        <a class="collapse-item" href="addproducts.php">Add Products</a>
                        <a class="collapse-item" href="viewproduct.php">View Products</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-cart-arrow-down"></i>
                    <span>Catagory</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Shop by Catagory:</h6>
                        <a class="collapse-item" href="RegularVegetables.php">Regular Vegetables</a>
                        <a class="collapse-item" href="ExoticVegetables.php">Exotic Vegetables</a>
                        <a class="collapse-item" href="RootVegetables.php">Root Vegetables</a>
                        <a class="collapse-item" href="FreshFruits.php">Fresh Fruits</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="Basket.php">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Basket</span></a>
            </li>


        

            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                      <h1 class="h2 mb-2 text-gray-800"><i class="fas fa-fw fa-table"></i> Root Vegetables</h1>
                    </form>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->                   
                                 
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->


                    <!-- Content Row -->
                    <div class="container">

                           <h3 class="title"> Root Vegetables </h3>

                           <div class="products-container" >

                              <div class="product" data-name="p-1">
                                 <img src="img/11.png" alt="" >
                                 <h3>Ginger</h3>
                                 <div class="price">₹90</div>
                              </div>

                              <div class="product" data-name="p-2">
                                 <img src="img/12.png" alt="">
                                 <h3>Beets</h3>
                                 <div class="price">₹40</div>
                              </div>

                              <div class="product" data-name="p-3">
                                 <img src="img/13.png" alt="">
                                 <h3>Garlic</h3>
                                 <div class="price">₹30</div>
                              </div>

                              <div class="product" data-name="p-4">
                                 <img src="img/14.png" alt="">
                                 <h3>Radishes</h3>
                                 <div class="price">₹60</div>
                              </div>

                              <div class="product" data-name="p-5">
                                 <img src="img/15.png" alt="">
                                 <h3>Fennel</h3>
                                 <div class="price">₹20</div>
                              </div>

                              <div class="product" data-name="p-6">
                                 <img src="img/16.png" alt="">
                                 <h3>Sweet Potatoes</h3>
                                 <div class="price">₹30</div>
                              </div> 

                               <div class="product" data-name="p-7">
                                 <img src="img/17.png" alt="">
                                 <h3>Carrots</h3>
                                 <div class="price">₹50</div>
                              </div>

                              <div class="product" data-name="p-8">
                                 <img src="img/18.png" alt="">
                                 <h3>Turmeric</h3>
                                 <div class="price">₹35</div>
                              </div> 

                               <div class="product" data-name="p-9">
                                 <img src="img/19.png" alt="">
                                 <h3>Lotus Root</h3>
                                 <div class="price">₹50</div>
                              </div>

                           </div>

                        </div>

                        <div class="products-preview">

                           <div class="preview" data-target="p-1">
                              <i class="fas fa-times"></i>
                              <img src="img/11.png" alt="">
                              <h3>organic Ginger</h3>
                              <div class="stars">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star-half-alt"></i>
                                 <span>( 250 )</span>
                              </div>
                              <p>High quality,Fresh farm vegetables are here to buy.</p>
                              <div class="Quantity">
                              <label>Quantity:</label>
                                     <select>
                                        <option>250gm</option>
                                        <option>500gm</option>
                                        <option>1kg</option>
                                    </select>
                                </div>
                              <div class="price">₹90</div>
                              <div class="buttons">
                                 <a href="Basket.php" class="nav-link">add to cart</a>                              
                              </div>
                           </div>

                           <div class="preview" data-target="p-2">
                              <i class="fas fa-times"></i>
                              <img src="img/12.png" alt="">
                              <h3>organic Beets</h3>
                              <div class="stars">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star-half-alt"></i>
                                 <span>( 250 )</span>
                              </div>
                              <p>High quality,Fresh farm vegetables are here to buy.</p>
                              <div class="Quantity">
                              <label>Quantity:</label>
                                     <select>
                                        <option>250gm</option>
                                        <option>500gm</option>
                                        <option>1kg</option>
                                    </select>
                                </div>
                              <div class="price">₹40</div>
                              <div class="buttons">
                                 <a href="Basket.php" class="nav-link">add to cart</a>
                              </div>
                           </div>

                           <div class="preview" data-target="p-3">
                              <i class="fas fa-times"></i>
                              <img src="img/13.png" alt="">
                              <h3>organic Garlic</h3>
                              <div class="stars">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star-half-alt"></i>
                                 <span>( 250 )</span>
                              </div>
                              <p>High quality,Fresh farm vegetables are here to buy.</p>
                              <div class="Quantity">
                              <label>Quantity:</label>
                                     <select>
                                        <option>250gm</option>
                                        <option>500gm</option>
                                        <option>1kg</option>
                                    </select>
                                </div>
                              <div class="price">₹30</div>
                              <div class="buttons">
                                 <a href="Basket.php" class="nav-link">add to cart</a>
                              </div>
                           </div>

                           <div class="preview" data-target="p-4">
                              <i class="fas fa-times"></i>
                              <img src="img/14.png" alt="">
                              <h3>organic Radishes</h3>
                              <div class="stars">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star-half-alt"></i>
                                 <span>( 250 )</span>
                              </div>
                              <p>High quality,Fresh farm vegetables are here to buy.</p>
                              <div class="Quantity">
                              <label>Quantity:</label>
                                     <select>
                                        <option>250gm</option>
                                        <option>500gm</option>
                                        <option>1kg</option>
                                    </select>
                                </div>
                              <div class="price">₹60</div>
                              <div class="buttons">
                                 <a href="Basket.php" class="nav-link">add to cart</a>
                              </div>
                           </div>

                           <div class="preview" data-target="p-5">
                              <i class="fas fa-times"></i>
                              <img src="img/15.png" alt="">
                              <h3>organic Fennel</h3>
                              <div class="stars">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star-half-alt"></i>
                                 <span>( 250 )</span>
                              </div>
                              <p>High quality,Fresh farm vegetables are here to buy.</p>
                              <div class="Quantity">
                              <label>Quantity:</label>
                                     <select>
                                        <option>250gm</option>
                                        <option>500gm</option>
                                        <option>1kg</option>
                                    </select>
                                </div>
                              <div class="price">₹20</div>
                              <div class="buttons">
                                 <a href="Basket.php" class="nav-link">add to cart</a>
                              </div>
                           </div>

                           <div class="preview" data-target="p-6">
                              <i class="fas fa-times"></i>
                              <img src="img/16.png" alt="">
                              <h3>organic Sweet potatoes</h3>
                              <div class="stars">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star-half-alt"></i>
                                 <span>( 250 )</span>
                              </div>
                              <p>High quality,Fresh farm vegetables are here to buy.</p>
                              <div class="Quantity">
                              <label>Quantity:</label>
                                     <select>
                                        <option>250gm</option>
                                        <option>500gm</option>
                                        <option>1kg</option>
                                    </select>
                                </div>
                              <div class="price">₹30</div>
                              <div class="buttons">
                                 <a href="Basket.php" class="nav-link">add to cart</a>
                              </div>
                           </div>

                           <div class="preview" data-target="p-7">
                              <i class="fas fa-times"></i>
                              <img src="img/17.png" alt="">
                              <h3>organic Carrots</h3>
                              <div class="stars">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <span>( 250 )</span>
                              </div>
                              <p>High quality,Fresh farm vegetables are here to buy.</p>
                              <div class="Quantity">
                              <label>Quantity:</label>
                                     <select>
                                        <option>250gm</option>
                                        <option>500gm</option>
                                        <option>1kg</option>
                                    </select>
                                </div>    
                              <div class="price">₹50</div>
                              <div class="buttons" >
                                 <a href="Basket.php" class="nav-link">add to cart</a>

                              </div>
                            </div>

                              <div class="preview" data-target="p-8">
                              <i class="fas fa-times"></i>
                              <img src="img/18.png" alt="">
                              <h3>organic Turmeric</h3>
                              <div class="stars">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star-half-alt"></i>
                                 <span>( 250 )</span>
                              </div>
                              <p>High quality,Fresh farm vegetables are here to buy.</p>
                              <div class="Quantity">
                              <label>Quantity:</label>
                                     <select>
                                        <option>250gm</option>
                                        <option>500gm</option>
                                        <option>1kg</option>
                                    </select>
                                </div>
                              <div class="price">₹35</div>
                              <div class="buttons">
                                 <a href="Basket.php" class="nav-link">add to cart</a>
                              </div>
                            </div>

                           <div class="preview" data-target="p-9">
                              <i class="fas fa-times"></i>
                              <img src="img/19.png" alt="">
                              <h3>organic Lotus Root</h3>
                              <div class="stars">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star-half-alt"></i>
                                 <span>( 250 )</span>
                              </div>
                              <p>High quality,Fresh farm vegetables are here to buy.</p>
                              <div class="Quantity">
                              <label>Quantity:</label>
                                     <select>
                                        <option>250gm</option>
                                        <option>500gm</option>
                                        <option>1kg</option>
                                    </select>
                                </div>
                              <div class="price">₹50</div>
                              <div class="buttons">
                                 <a href="Basket.php" class="nav-link">add to cart</a>
                              </div>
                           </div>
                           

                        </div>

                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

     <!-- custom js file link  -->
   <script src="js/script.js" defer></script>

</body>

</html> 

