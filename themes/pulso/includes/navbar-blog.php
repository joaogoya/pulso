<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container justify-content-between">
        <a class="navbar-brand d-flex align-items-center" href="<?php echo home_url(); ?>">
            <div class="logo-navbar">
                <?php
                    $img_id = pipe_get_img_id_by_slug('logo-rantengular-poa-car-service-fundo-transparente');
                    if ($img_id) {
                        echo pipe_get_img($img_id, false, 'medium', 'img-fluid');
                    }
                ?>
            </div>
        </a>

        <a href="<?php echo home_url(); ?>" class="btn btn-outline-light btn-sm fw-bold text-uppercase px-3">
            <i class="fas fa-arrow-left me-2"></i> Voltar para Home
        </a>
    </div>
</nav>