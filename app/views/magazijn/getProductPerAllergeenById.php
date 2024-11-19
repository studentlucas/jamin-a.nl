<?php require_once APPROOT . '/views/includes/header.php'; ?>

<!-- Maak een nieuwe view aan voor deze link -->
<div class="container">
    <div class="row mt-3" style='<?= $data['messageVisibility']; ?>'>
            <div class="col-2"></div>
            <div class="col-8 text-center">
                <div class="alert alert-<?= $data['messageColor']; ?>" role="alert">
                    <?= $data['message']; ?>
                </div>
            </div>
            <div class="col-2"></div>
   </div>

    <div class="row mt-3">
        <div class="col-2"></div>
        <div class="col-8">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-2"></div>
    </div>


    <div class="row mt-3">
        <div class="col-2"></div>
        <div class="col-8">
            hoi!
        </div>
        <div class="col-2"></div>
    </div>

    
    <div class="row mt-3">
        <div class="col-2"></div>
        <div class="col-8">
            <h3><a href="<?= URLROOT; ?>/Magazijn/index"><i class="bi bi-arrow-left-square-fill"></i></a></h3>
        </div>
        <div class="col-2"></div>

    </div>
    


<?php require_once APPROOT . '/views/includes/footer.php'; ?>
