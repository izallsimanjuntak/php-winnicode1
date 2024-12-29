<?php 
   session_start();
   include('includes/config.php');
   
       ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/logo-winni-2x-favicon.png" type="image/x-icon">
    <title>Winni Media</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>

    <!-- Navigation -->
    <?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row" style="margin-top: 4%">
      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Navbar Fullscreen</title>
    <!-- Menggunakan Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #5271FF; font-size: 14px; padding: 5px 0;">
        <div class="container-fluid">
            <!-- Toggle button untuk mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#categoriesNavbar" aria-controls="categoriesNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar items -->
            <div class="collapse navbar-collapse" id="categoriesNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php
                    $query = mysqli_query($con, "SELECT id, CategoryName FROM tblcategory");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="category.php?catid=<?php echo htmlentities($row['id']); ?>" style="color: #ffffff; font-size: 14px;">
                                <?php echo htmlentities($row['CategoryName']); ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Mengimpor Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
            <div class="col-md-7" style="margin-top: 2%">
                <h4 class="widget-title mb-4" style="font-size: 30px;"> Headline <span> News </span></h4>
                <!-- Blog Post -->
                <div class="row">
                    <div class="owl-carousel owl-theme" id="slider">
                        <div class="card mb-4 border-0">
                            <img class="card-img-top" src="images/Index11.jpg" alt="" width="100%">
                            <div class="card-body">
                                <p class="m-0">
                                    <!--category-->
                                    <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Olahraga</a>
                                    <!--Subcategory--->
                                    <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">Motogp</a>
                                </p>
                                <p class="m-0"><small> Posted on 2024-12-16 09:20:09</small></p>
                                <a href="#" class="card-title text-decoration-none text-dark">
                                    <h5 class="card-title">MotoGP 2025, Ducati Diprediksi Sulit Mendominasi</h5>
                                </a>
                                <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                            </div>
                        </div>
                        <div class="card mb-4 border-0">
                            <img class="card-img-top" src="images/index12.jpg" alt="" width="100%">
                            <div class="card-body">
                                <p class="m-0">
                                    <!--category-->
                                    <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Olahraga</a>
                                    <!--Subcategory--->
                                    <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">Sepak bola</a>
                                </p>
                                <p class="m-0"><small> Posted on 2024-12-16 06:20:09</small></p>
                                <a href="#" class="card-title text-decoration-none text-dark">
                                    <h5 class="card-title">Vietnam vs Indonesia di Piala AFF 2024, Shin Tae-yong Sebut Pertandingan Sulit</h5>
                                </a>
                                <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                            </div>
                        </div>
                        <div class="card mb-4 border-0">
                            <img class="card-img-top" src="images/index13.jpeg" alt="" width="100%">
                            <div class="card-body">
                                <p class="m-0">
                                    <!--category-->
                                    <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Politik</a>
                                    <!--Subcategory--->
                                    <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">Pelantikan</a>
                                </p>
                                <p class="m-0"><small> Posted on 2022-12-16 08:45:09</small></p>
                                <a href="#" class="card-title text-decoration-none text-dark">
                                    <h5 class="card-title">Prabowo Lantik Muhidin Jadi Gubernur Kalsel di Istana Hari Ini</h5>
                                </a>
                                <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                            </div>
                        </div>
                    </div>
                    <?php 
                     if (isset($_GET['pageno'])) {
                            $pageno = $_GET['pageno'];
                        } else {
                            $pageno = 1;
                        }
                        $no_of_records_per_page = 8;
                        $offset = ($pageno-1) * $no_of_records_per_page;
                     
                     
                        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
                        $result = mysqli_query($con,$total_pages_sql);
                        $total_rows = mysqli_fetch_array($result)[0];
                        $total_pages = ceil($total_rows / $no_of_records_per_page);
                     
                     
                     $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
                     while ($row=mysqli_fetch_array($query)) {
                     ?>
                    <div class="col-md-6">
                        <div class="card mb-4 border-0">
                            <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>" height="200px">
                            <div class="card-body">
                                <p class="m-0">
                                    <!--category-->
                                    <a class="badge bg-success text-decoration-none link-light" href="category.php?catid=<?php echo htmlentities($row['cid'])?>" style="color:#fff"><?php echo htmlentities($row['category']);?></a>
                                    <!--Subcategory--->
                                    <a class="badge bg-warning text-decoration-none link-light" style="color:#fff"><?php echo htmlentities($row['subcategory']);?></a>
                                </p>
                                <p class="m-0"><small> Posted on <?php echo htmlentities($row['postingdate']);?></small></p>
                                <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="card-title text-decoration-none text-dark">
                                    <h5 class="card-title"><?php echo htmlentities($row['posttitle']);?></h5>
                                </a>
                                <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-md-12"><a href="tel:+6282284076701">
                            <img src="images/ads3.png" class="img-fluid"></a>

                        <!-- Pagination -->
                        <!-- <ul class="pagination justify-content-center mb-4">
                        <li class="page-item"><a href="?pageno=1"  class="page-link border-0">First</a></li>
                        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
                           <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link border-0">Prev</a>
                        </li>
                        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
                           <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link border-0">Next</a>
                        </li>
                        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link border-0">Last</a></li>
                        </ul> -->
                    </div>
                    <!-- Static -->
                    <div class="col-md-12">
                        <div class="card mb-4 mt-5 border-0">
                            <img class="card-img-top" src="images/index14.png" alt="" width="100%">
                            <div class="card-body">
                                <p class="m-0">
                                    <!--category-->
                                    <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Bisnis</a>
                                    <!--Subcategory--->
                                    <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">Bursa Saham</a>
                                </p>
                                <p class="m-0"><small> Posted on 2024-12-16 03:40:09</small></p>
                                <a href="#" class="card-title text-decoration-none text-dark">
                                    <h5 class="card-title">IHSG Dibuka Turun 1,10% ke 7.237, Saham BBRI dan BYAN Justru Melaju</h5>
                                </a>
                                <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <a href="tel:+6282284076701">
                    <img src="images/ads3.png" class="img-fluid"></a>
            </div>
            <!-- Sidebar Widgets Column -->
            <?php include('includes/sidebar.php');?>
        </div>

    </div>
    <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <?php include('includes/footer.php');?>

    <script src="js/foot.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
    $('#slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    $('#slider2').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 4
            }
        }
    });
    </script>
</body>


</html>