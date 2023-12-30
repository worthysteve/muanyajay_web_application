<?php require "config/config.php";?>
<?php require "libs/App.php";?>
<?php require "includes/header.php";?>
<?php
    // select items from the database
    $query = "SELECT * FROM clothes WHERE item_id=1";
    $app = new App;
    $items_1 = $app -> selectAll($query);

    $query = "SELECT * FROM clothes WHERE item_id=2";
    $app = new App;
    $items_2 = $app -> selectAll($query);

    $query = "SELECT * FROM clothes WHERE item_id=3";
    $app = new App;
    $items_3 = $app -> selectAll($query);
    
?>

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Catalog</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item"><a href="">Catalog</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        <!-- Navbar & Hero End -->

  <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Fashion Catalogue</h5>
                    <h1 class="mb-5">Most Popular Designs</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp"                 data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="ph-fill ph-dress fa-2x text-primary"></i>
                                
                                
                                <div class="ps-3">
                                    <small class="text-body">Trending</small>
                                    <h6 class="mt-n1 mb-0">African Wears</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="ph-fill ph-dress fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Casuals</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="ph-fill ph-dress fa-2x text-primary"></i>
                                
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Wedding & Luxury</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <?php foreach($items_1 as $item_1) : ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $item_1 -> image; ?>" alt="" style="width: 80px;">
                                        
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $item_1 -> name; ?></span>
                                                <span class="text-primary">$<?php echo $item_1 ->price; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $item_1 -> description; ?></small>
                                            <a type="button" href="<?php echo APPURL; ?>/cloth/add-cart.php?id=<?php echo $item_1 -> id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                        </div>
                                    </div>
                                </div>
                         <?php endforeach; ?>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                    
                                <div class="row g-4">
                                 <?php foreach($items_2 as $item_2) : ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $item_2 -> image; ?>" alt="" style="width: 80px;">
                                        
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $item_2 -> name; ?></span>
                                                <span class="text-primary">$<?php echo $item_2 ->price; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $item_2 -> description; ?></small>
                                            <a type="button" href="<?php echo APPURL; ?>/cloth/add-cart.php?id=<?php echo $item_2 -> id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                             </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                 <?php foreach($items_3 as $item_3) : ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $item_3 -> image; ?>" alt="" style="width: 80px;">
                                        
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $item_3 -> name; ?></span>
                                                <span class="text-primary">$<?php echo $item_3 ->price; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo  $item_3 -> description; ?></small>
                                            <a type="button" href="<?php echo APPURL; ?>/cloth/add-cart.php?id=<?php echo $item_3 -> id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                        </div>
                                    </div>
                                </div>
                         <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
<?php require "includes/footer.php"; ?>
