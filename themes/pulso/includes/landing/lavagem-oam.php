<section id="lavagem-saude" class="py-5 bg-light">
    <div class="container py-lg-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h6 class="text-red fw-bold text-uppercase mb-2">
                    Lavagem e
                </h6>
                <h2 class="display-4 fw-bold text-dark title-impact">
                    HIGIENIZAÇÃO DE <span class="text-red">ESTOFADOS.</span>
                </h2>
                <p class="text-muted fs-5 mb-4">
                    O interior do seu carro livre de pó, ácaros, fungos e bactérias. Um
                    cuidado especial para a <span class="text-red">saúde</span> respiratória da sua <span
                        class="text-red">Família</span>.
                </p>

                <ul class="list-unstyled custom-list mb-4">
                    <li>
                        <i class="fas fa-check text-red me-2"></i> Mão de Obra Especializada
                    </li>
                    <li>
                        <i class="fas fa-check text-red me-2"></i> Shampoos e Perfumes Específicos para estofados
                        automotivos
                    </li>
                    <li>
                        <i class="fas fa-check text-red me-2"></i> Seu carro limpo, cheiroso e saudável para toda a
                        família.
                    </li>
                </ul>

                <a 
                    target="_blank"
                    href="https://wa.me/555197863963?text=Quero+agendar+Lavagem+e+Higienização"
                    class="btn btn-footer-blog fw-bold text-uppercase px-5"
                    aria-label="Agendar lavagem e higienização pelo WhatsApp"
                    data-analytics="bt-whats-lavagem-higienizacao-da-landing"
                >
                    <i class="fab fa-whatsapp me-2" aria-hidden="true"></i> 
                    Quero meu carro limpo e seguro
                </a>
            </div>
            <div class="col-lg-6">
                <?php
                    $img_id = pipe_get_img_id_by_slug('menina-sorrindo-banco-do-carro');

                    if ($img_id) {
                        echo pipe_get_img($img_id, false, 'medium_large', 'img-fluid shadow-lg border-bottom border-danger border-4');
                    }
                ?>
            </div>
        </div>
    </div>
</section>