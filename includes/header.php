<link rel="stylesheet" href="css/style.css">
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/logo-winni-2x.png" height="55"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" style="color: #5271FF;"><i class="fa-newspaper-o fa"></i> News</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about-us.php" style="color: #5271FF;"><i class="fa fa-info-circle"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.php" style="color: #5271FF;"><i class="fa fa-phone"></i> Contact us</a>
                </li>
            </ul>
        </div>
        <form name="search" action="search.php" method="post">
            <div class="input-group">
                <input type="text" name="searchtitle" class="form-control" placeholder="Cari berita..." required>
                <span class="input-group-btn">
        <button class="btn btn-secondary rounded-end" type="submit">
            <i class="fa fa-search"></i>
        </button>
    </span>

            </form>
    </div>
</nav>
