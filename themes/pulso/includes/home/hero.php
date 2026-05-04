<section id="home" class="hero-section d-flex align-items-center">
   <?php
        $img_id = pipe_get_img_id_by_slug('motor-aberto');

        if ($img_id) {
            echo pipe_get_img_full_size($img_id, false, 'wide', 'hero-bg-img');
        }
    ?>

    <div class="hero-overlay"></div>
    <div class="container text-start text-white position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8 py-5">
                <h1 class="hero-title text-uppercase mb-3">
                    Segurança para sua <span class="text-red">Família</span><br>
                    e valor para o seu <span class="text-red">Patrimônio</span>
                </h1>

                <p class="hero-lead mb-5">
                    Na <strong class="text-red">POA Car Service</strong>, focamos na mecânica que realmente importa.
                    Da revisão de suspensão à manutenção bruta do motor, garantimos que seu veículo esteja sempre
                    pronto para o asfalto.
                </p>

                <div class="d-flex gap-3 flex-wrap">
                    <a 
                        data-analytics="bt-whats-hero-home"
                        target="_blank"
                        rel="noopener"
                        href="https://wa.me/555197863963"
                        class="btn btn-hero btn-danger btn-lg text-uppercase fw-bold"
                        aria-label="Agendar manutenção pelo WhatsApp"
                    >
                        <i class="fab fa-whatsapp me-2"></i>Agendar Manutenção
                    </a>
                    <a 
                        data-analytics="bt-servicos-hero-home"
                        href="#servicos"
                        class="btn btn-hero btn-outline-light btn-lg text-uppercase fw-bold"
                        aria-label="Conheça nossos serviços - deslizar para a seção de serviços"
                    >
                        Nossos Serviços
                    </a>
                </div>
            </div>
        </div>

        <div class="hero-accent-bar"></div>
    </div>
</section>