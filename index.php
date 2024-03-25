<?php require "base.php" ?>


    <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light text-center">MY ALBUMS</h1>
        </p>
    </div><br>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php for($i = 0; $i < 6; $i++): ?>

            <div class="col">
                <div class="card shadow-sm bg-dark text-white">
                <img class="bd-placeholder-img card-img-top" src="img/<?php echo ($i + 1) ?>.jpg" width="100%" height="225" >
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                    </div>
                </div>
                </div>
            </div>

        <?php endfor ?>
    </div>

<?php require "footer.php" ?>       

