<?php 
session_start();
include('includes/config.php');
error_reporting(0);

if(strlen($_SESSION['login'])==0) { 
    header('location:index.php');
} else {
    if(isset($_POST['update'])) {
        $pagetype = 'aboutus';
        $pagetitle = $_POST['pagetitle'];
        $pagedetails = $_POST['pagedescription'];

        $query = mysqli_query($con, "UPDATE tblpages SET PageTitle='$pagetitle', Description='$pagedetails' WHERE PageName='$pagetype'");
        if($query) {
            $msg = "About us page successfully updated";
        } else {
            $error = "Something went wrong. Please try again.";
        }
    }
?>

<?php include('includes/topheader.php'); ?>
<?php include('includes/leftsidebar.php'); ?>

<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">About Page</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Pages</a></li>
                            <li class="active">About us</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            
            <?php if($msg){ ?>
                <div class="alert alert-success"><strong>Well done!</strong> <?php echo htmlentities($msg); ?></div>
            <?php } elseif($error){ ?>
                <div class="alert alert-danger"><strong>Oh snap!</strong> <?php echo htmlentities($error); ?></div>
            <?php } ?>

            <?php 
                $pagetype = 'aboutus';
                $query = mysqli_query($con, "SELECT PageTitle, Description FROM tblpages WHERE PageName='$pagetype'");
                while($row = mysqli_fetch_array($query)) {
            ?>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="p-6">
                        <div class="">
                            <form name="aboutus" method="post">
                                <div class="form-group m-b-20">
                                    <label for="pagetitle">Page Title</label>
                                    <input type="text" class="form-control" id="pagetitle" name="pagetitle" value="<?php echo htmlentities($row['PageTitle']); ?>" required>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box">
                                            <h4 class="m-b-30 m-t-0 header-title"><b>Page Details</b></h4>
                                            <textarea class="summernote" name="pagedescription" required><?php echo htmlentities($row['Description']); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <button type="submit" name="update" class="btn btn-custom waves-effect waves-light btn-md">Update and Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 300,
            placeholder: 'Type your content here...',
        });
    });
</script>

<?php include('includes/footer.php'); ?>
<?php } ?>
