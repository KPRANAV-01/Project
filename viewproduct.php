<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View All Products</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shopping.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                <div class="sidebar-brand-text mx-3">Fruits and vegetable shop</div>
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
                    <span>Product</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">All Products:</h6>
                        <a class="collapse-item" href="addproducts.php">Add Products</a>
                        <a class="collapse-item" href="viewproduct.php">View Product</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-table"></i>
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
            
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                       <h1 class="h2 mb-2 text-gray-800"><i class="fab fa-product-hunt"></i> View All Products</h1>
                    </form>

                   

                </nav>
                <!-- End of Topbar -->

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
                        <div class="container">

                           <h3 class="title">Regular vegetables</h3>

                           <div class="products-container" >

                              <div class="product" data-name="p-1">
                                 <img src="img/8.png" alt="" >
                                 <h3>cabbage</h3>
                                 <div class="price">₹30</div>
                              </div>

                              <div class="product" data-name="p-2">
                                 <img src="img/2.png" alt="">
                                 <h3>onions</h3>
                                 <div class="price">₹40</div>
                              </div>

                              <div class="product" data-name="p-3">
                                 <img src="img/3.png" alt="">
                                 <h3>tomatoes</h3>
                                 <div class="price">₹30</div>
                              </div>

                              <div class="product" data-name="p-4">
                                 <img src="img/4.png" alt="">
                                 <h3>brinjal</h3>
                                 <div class="price">₹60</div>
                              </div>

                              <div class="product" data-name="p-5">
                                 <img src="img/5.png" alt="">
                                 <h3>broccoli</h3>
                                 <div class="price">₹20</div>
                              </div>

                              <div class="product" data-name="p-6">
                                 <img src="img/6.png" alt="">
                                 <h3>potatoes</h3>
                                 <div class="price">₹30</div>
                              </div> 

                               <div class="product" data-name="p-7">
                                 <img src="img/7.png" alt="">
                                 <h3>Carrots</h3>
                                 <div class="price">₹50</div>
                              </div>

                              <div class="product" data-name="p-8">
                                 <img src="img/9.png" alt="">
                                 <h3>Cauliflower</h3>
                                 <div class="price">₹35</div>
                              </div> 

                               <div class="product" data-name="p-9">
                                 <img src="img/10.png" alt="">
                                 <h3>Bhindi</h3>
                                 <div class="price">₹50</div>
                              </div>

                           </div>

                        </div>

                        <div class="products-preview">

                           <div class="preview" data-target="p-1">
                              <i class="fas fa-times"></i>
                              <img src="img/8.png" alt="">
                              <h3>organic Cabbage</h3>
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

                           <div class="preview" data-target="p-2">
                              <i class="fas fa-times"></i>
                              <img src="img/2.png" alt="">
                              <h3>organic onions</h3>
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
                              <img src="img/3.png" alt="">
                              <h3>organic tomatoes</h3>
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
                              <img src="img/4.png" alt="">
                              <h3>organic brinjal</h3>
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
                              <img src="img/5.png" alt="">
                              <h3>organic broccoli</h3>
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
                              <img src="img/6.png" alt="">
                              <h3>organic potatoes</h3>
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
                              <img src="img/7.png" alt="">
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
                              <img src="img/9.png" alt="">
                              <h3>organic Cauliflower</h3>
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
                              <img src="img/10.png" alt="">
                              <h3>organic Bhindi</h3>
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

                        <div class="container">

                           <h3 class="title"> Fresh Fruits </h3>

                           <div class="products-container" >

                              <div class="product" data-name="p-1">
                                 <img src="img/1.png" alt="" >
                                 <h3>strawberries</h3>
                                 <div class="price">₹200</div>
                              </div>

                              <div class="product" data-name="p-2">
                                 <img src="img/29.png" alt="">
                                 <h3>Apples</h3>
                                 <div class="price">₹100</div>
                              </div>

                              <div class="product" data-name="p-3">
                                 <img src="img/30.png" alt="">
                                 <h3>Orange</h3>
                                 <div class="price">₹80</div>
                              </div>

                              <div class="product" data-name="p-4">
                                 <img src="img/31.png" alt="">
                                 <h3>Watermelon</h3>
                                 <div class="price">₹70</div>
                              </div>

                              <div class="product" data-name="p-5">
                                 <img src="img/32.png" alt="">
                                 <h3>Mango</h3>
                                 <div class="price">₹350</div>
                              </div>

                              <div class="product" data-name="p-6">
                                 <img src="img/33.png" alt="">
                                 <h3>Papaya</h3>
                                 <div class="price">₹50</div>
                              </div> 

                               <div class="product" data-name="p-7">
                                 <img src="img/34.png" alt="">
                                 <h3>Banana</h3>
                                 <div class="price">₹40</div>
                              </div>

                              <div class="product" data-name="p-8">
                                 <img src="img/35.png" alt="">
                                 <h3>Kiwi</h3>
                                 <div class="price">₹100</div>
                              </div>

                              <div class="product" data-name="p-9">
                                 <img src="img/36.png" alt="">
                                 <h3>Guava</h3>
                                 <div class="price">₹80</div>
                              </div>

                           </div>

                        </div>

                        <div class="products-preview">

                           <div class="preview" data-target="p-1">
                              <i class="fas fa-times"></i>
                              <img src="img/1.png" alt="">
                              <h3>Fresh Strawberry</h3>
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
                              <div class="price">₹200</div>
                              <div class="buttons">
                                 <a href="Basket.php" class="nav-link">add to cart</a>                              
                              </div>
                           </div>

                           <div class="preview" data-target="p-2">
                              <i class="fas fa-times"></i>
                              <img src="img/29.png" alt="">
                              <h3>Fresh Apples</h3>
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
                              <div class="price">₹100</div>
                              <div class="buttons">
                                 <a href="Basket.php" class="nav-link">add to cart</a>
                              </div>
                           </div>

                           <div class="preview" data-target="p-3">
                              <i class="fas fa-times"></i>
                              <img src="img/30.png" alt="">
                              <h3>Fresh Oranges</h3>
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
                              <div class="price">₹80</div>
                              <div class="buttons">
                                 <a href="Basket.php" class="nav-link">add to cart</a>
                              </div>
                           </div>

                           <div class="preview" data-target="p-4">
                              <i class="fas fa-times"></i>
                              <img src="img/31.png" alt="">
                              <h3>Fresh Watermelons</h3>
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
                              <div class="price">₹70</div>
                              <div class="buttons">
                                 <a href="Basket.php" class="nav-link">add to cart</a>
                              </div>
                           </div>

                           <div class="preview" data-target="p-5">
                              <i class="fas fa-times"></i>
                              <img src="img/32.png" alt="">
                              <h3>Fresh Mangos</h3>
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
                              <div class="price">₹350</div>
                              <div class="buttons">
                                 <a href="Basket.php" class="nav-link">add to cart</a>
                              </div>
                           </div>

                           <div class="preview" data-target="p-6">
                              <i class="fas fa-times"></i>
                              <img src="img/33.png" alt="">
                              <h3>Fresh Papaya</h3>
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

                           <div class="preview" data-target="p-7">
                              <i class="fas fa-times"></i>
                              <img src="img/34.png" alt="">
                              <h3>Fresh Banana</h3>
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
                              <div class="price">₹40</div>
                              <div class="buttons" >
                                 <a href="Basket.php" class="nav-link">add to cart</a>

                              </div>
                           </div>

                           <div class="preview" data-target="p-7">
                              <i class="fas fa-times"></i>
                              <img src="img/35.png" alt="">
                              <h3>Fresh Kiwi</h3>
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
                              <div class="price">₹100</div>
                              <div class="buttons" >
                                 <a href="Basket.php" class="nav-link">add to cart</a>

                              </div>
                           </div>

                           <div class="preview" data-target="p-7">
                              <i class="fas fa-times"></i>
                              <img src="img/36.png" alt="">
                              <h3>organic Guavas</h3>
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
                              <div class="price">₹80</div>
                              <div class="buttons" >
                                 <a href="Basket.php" class="nav-link">add to cart</a>

                              </div>
                           </div>

                        </div>

                        <div class="container">

                           <h3 class="title"> Exotic Vegetables </h3>

                           <div class="products-container" >

                              <div class="product" data-name="p-1">
                                 <img src="img/20.png" alt="" >
                                 <h3>Asparagus</h3>
                                 <div class="price">₹80</div>
                              </div>

                              <div class="product" data-name="p-2">
                                 <img src="img/21.png" alt="">
                                 <h3>Broccoli</h3>
                                 <div class="price">₹40</div>
                              </div>

                              <div class="product" data-name="p-3">
                                 <img src="img/22.png" alt="">
                                 <h3>Colored Capsicum</h3>
                                 <div class="price">₹30</div>
                              </div>

                              <div class="product" data-name="p-4">
                                 <img src="img/23.png" alt="">
                                 <h3>Cherry Tomato</h3>
                                 <div class="price">₹80</div>
                              </div>

                              <div class="product" data-name="p-5">
                                 <img src="img/24.png" alt="">
                                 <h3>Parsley</h3>
                                 <div class="price">₹45</div>
                              </div>

                              <div class="product" data-name="p-6">
                                 <img src="img/25.png" alt="">
                                 <h3>Celery</h3>
                                 <div class="price">₹35</div>
                              </div> 

                               <div class="product" data-name="p-7">
                                 <img src="img/26.png" alt="">
                                 <h3>Chinese cabbage</h3>
                                 <div class="price">₹60</div>
                              </div>

                              <div class="product" data-name="p-8">
                                 <img src="img/27.png" alt="">
                                 <h3>Red Cabbage</h3>
                                 <div class="price">₹60</div>
                              </div> 

                               <div class="product" data-name="p-9">
                                 <img src="img/28.png" alt="">
                                 <h3>Baby Corn</h3>
                                 <div class="price">₹40</div>
                              </div>

                           </div>

                        </div>

                        <div class="products-preview">

                           <div class="preview" data-target="p-1">
                              <i class="fas fa-times"></i>
                              <img src="img/20.png" alt="">
                              <h3>organic Asparagus</h3>
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
                              <div class="price">₹80</div>
                              <div class="buttons">
                                 <a href="Basket.php" class="nav-link">add to cart</a>                              
                              </div>
                           </div>

                           <div class="preview" data-target="p-2">
                              <i class="fas fa-times"></i>
                              <img src="img/21.png" alt="">
                              <h3>organic Broccoli</h3>
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
                              <img src="img/22.png" alt="">
                              <h3>organic Colored Capsicum</h3>
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
                              <img src="img/23.png" alt="">
                              <h3>organic Cherry Tomato</h3>
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
                              <div class="price">₹80</div>
                              <div class="buttons">
                                 <a href="Basket.php" class="nav-link">add to cart</a>
                              </div>
                           </div>

                           <div class="preview" data-target="p-5">
                              <i class="fas fa-times"></i>
                              <img src="img/24.png" alt="">
                              <h3>organic Parsley</h3>
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
                              <div class="price">₹45</div>
                              <div class="buttons">
                                 <a href="Basket.php" class="nav-link">add to cart</a>
                              </div>
                           </div>

                           <div class="preview" data-target="p-6">
                              <i class="fas fa-times"></i>
                              <img src="img/25.png" alt="">
                              <h3>organic Celery</h3>
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

                           <div class="preview" data-target="p-7">
                              <i class="fas fa-times"></i>
                              <img src="img/26.png" alt="">
                              <h3>organic Chinese cabbage</h3>
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
                              <div class="price">₹60</div>
                              <div class="buttons" >
                                 <a href="Basket.php" class="nav-link">add to cart</a>

                              </div>
                           </div>

                           <div class="preview" data-target="p-8">
                              <i class="fas fa-times"></i>
                              <img src="img/27.png" alt="">
                              <h3>organic Red cabbage</h3>
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
                              <div class="price">₹60</div>
                              <div class="buttons" >
                                 <a href="Basket.php" class="nav-link">add to cart</a>

                              </div>
                           </div>

                           <div class="preview" data-target="p-9">
                              <i class="fas fa-times"></i>
                              <img src="img/28.png" alt="">
                              <h3>organic Baby Corn</h3>
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
                              <div class="price">₹40</div>
                              <div class="buttons" >
                                 <a href="Basket.php" class="nav-link">add to cart</a>

                              </div>
                           </div>

                        </div>

            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>