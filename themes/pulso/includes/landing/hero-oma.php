<section id="home" class="hero-section d-flex align-items-center">
    <?php
        $img_id = pipe_get_img_id_by_slug('pretty-young-woman-holding-a-red-car-toy');

        if ($img_id) {
            echo pipe_get_img_full_size($img_id, false, 'wide', 'hero-bg-img');
        }
    ?>

    <div class="hero-overlay"></div>

    <div class="container text-start text-white position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8 py-5">
                <h6 class="hero-landing-badge fw-bold text-uppercase tracking-wider mb-3">
                    Certificada OAM em Porto Alegre
                </h6>
                    <?php
                        $img_id = pipe_get_img_id_by_slug('certificado-oficina-amiga-da-mulher');

                        if ($img_id) {
                            echo pipe_get_img($img_id, false, 'medium_large', 'oam-hero-landing');
                        }
                    ?>
                <br> <br>

                <p class="hero-lead mb-4">
                    Muito além de um adesivo na porta: um <strong class="text-red">PADRÃO NACIONAL</strong> de Responsabilidade
                    Social e ESG (Ambiental, Social e Governança) focado em mudar a cultura do setor automotivo.
                </p>


                <div class="d-flex gap-3 flex-wrap">
                    <a 
                        data-analytics="bt-whats-hero-landing"
                        target="_blank"
                        rel="noopener"
                        ref="https://wa.me/555197863963"
                        class="btn btn-hero btn-danger btn-lg text-uppercase fw-bold"
                        aria-label="Agendar manutenção pelo WhatsApp">
                        <i class="fab fa-whatsapp me-2" aria-hidden="true"></i>Agendar Manutenção
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>