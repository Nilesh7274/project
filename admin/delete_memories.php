<?php
    include "header.php";

    include 'conn.php';

    $q = "select *from memories";
    $res = mysqli_query($conn,$q);
?>
<main id="main" class="main">
    <h2>Delete Memories</h2>
    <br>
<section class="section">
    <div class="row align-items-top">
        <div class="col-lg-8">
        <?php
            while($row = mysqli_fetch_array($res))
            {
        ?>
            <!-- Card with an image on left -->
            <div class="card mb-3">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src=<?php echo $row['img_path'];?> class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <br><br><br>
                    <h4><?php echo "{$row['event_name']}";?></h4>
                    <h5 class="card-title"><a href=<?php echo " 'delM.php?id={$row['id']}'";?>> Delete this memory</a></h5>
                    </div>
                </div>
                </div>
            </div>
            <!-- End Card with an image on left -->
        <?php
            }
        ?>
        </div>
    </div>
</section>
</main>

<?php
    include "footer.php";
?>