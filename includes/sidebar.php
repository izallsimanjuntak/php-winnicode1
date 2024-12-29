
<div class="col-md-3 ">
    <!-- Search Widget -->

    <div class="card my-4 border-0">
    <h5 class="card-header border-0 bg-white">Berita Terbaru</h5>
    <div class="card-body">
        <ul class="mb-0 list-unstyled">
            <?php
               $query = mysqli_query($con, "SELECT tblposts.id AS pid, tblposts.PostImage, tblposts.PostTitle AS posttitle FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId LIMIT 8");
               while ($row = mysqli_fetch_array($query)) {
            ?>
            <li class="d-flex mb-2 align-items-center" style="text-align: justify;">
                <img class="mr-2" src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>" 
                     alt="<?php echo htmlentities($row['posttitle']); ?>" 
                     width="80px" height="60px">
                <a href="news-details.php?nid=<?php echo htmlentities($row['pid']); ?>" 
                   class="text-dark font-weight-bold" 
                   style="font-size: 12px; text-decoration: none;">
                    <?php echo htmlentities($row['posttitle']); ?>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>



<!-- Side Widget -->

<a href="tel:+6282284076701">
    <img src="images/ads3.png" class="img-fluid"></a>

<!-- Side Widget -->
<div class="card my-4 border-0">
    <h5 class="card-header border-0 bg-white">Berita lainya</h5>
    <div class="card-body">
        <ul class="list-unstyled">
            <?php
               $query1=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId  order by viewCounter desc limit 5");
               while ($result=mysqli_fetch_array($query1)) {
               
               ?>
            <li class="mb-2" style="text-align: justify;">
                <a href="news-details.php?nid=<?php echo htmlentities($result['pid'])?>" class="text-dark font-weight-bold" style="font-family: 'Arial', sans-serif; font-size: 12px; text-decoration: none;" >
                    <?php echo htmlentities($result['posttitle']); ?>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>

<a href="tel:+6282284076701">
    <img src="images/ads3.png" class="img-fluid"></a>

<!-- Side Widget -->
<div class="card my-4 border-0">
    <h5 class="card-header border-0 bg-white">Top Trending</h5>
    <div class="card-body">
        <ul class="mb-0 list-unstyled">
            <?php
               $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostImage,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 8");
               while ($row=mysqli_fetch_array($query)) {
               
               ?>
            <li class="d-flex mb-2 align-items-center" style="text-align: justify;">
                <img class="mr-2 rounded" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>" width="80px" height="80px">
                <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="text-dark font-weight-bold" style="font-family: 'Arial', sans-serif; font-size: 12px; text-decoration: none;"  ><?php echo htmlentities($row['posttitle']);?></a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>

<a href="tel:+6282284076701">
    <img src="images/ads3.png" class="img-fluid"></a>

<h5 class="card-header border-0 bg-transparent">Video lainya</h5>
<div class="card my-4 border-0">
    <div class="card-body p-2">
        <iframe width="100%" height="180px" class="youtube" src="https://www.youtube.com/embed/bGJf182XG4s?si=FqnMEQdMDJg7Vrws" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>
<a href="tel:+6282284076701">
    <img src="images/ads3.png" class="img-fluid"></a>
<div class="card my-4 border-0">
    <div class="card-body p-2">
    <iframe width="100%" height="180px" class="youtube" src="https://www.youtube.com/embed/R6rdX7VUpyU?si=JeE1i8m-2DQYBxGY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>

<a href="tel:+6282284076701">
    <img src="images/ads3.png" class="img-fluid"></a>

<div class="card my-4 border-0">
    <div class="card-body p-2">
        <iframe width="100%" height="180" class="youtube" src="https://www.youtube.com/embed/u3IOhH4rWnA?si=vvSA2rIeTFTXl0In" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>
<a href="tel:+6282284076701">
    <img src="images/ads3.png" class="img-fluid"></a>
<div class="card my-4 border-0">
    <div class="card-body p-2">
        <iframe width="100%" height="180 " class="youtube" src="https://www.youtube.com/embed/Dw-Ro8vZ4MI?si=O7_-daTylvyr6UIn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>

<div class="card my-4 border-0">
    <div class="card-body p-2">
        <iframe width="100%" height="180" class="youtube" src="https://www.youtube.com/embed/16yclqO2-nQ?si=pm_Qw977wXuCKWNO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
</div>