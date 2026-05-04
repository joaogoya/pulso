<section id="jornada" class="py-5 bg-white">
    <div class="container py-lg-5">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <div class="position-relative">
                          <?php
                                $img_id = pipe_get_img_id_by_slug('raphael-e-rafaela-encontro-oficina-amiga-da-mulher');

                                if ($img_id) {
                                    echo pipe_get_img($img_id, false, 'medium_large', 'img-fluid shadow-lg rounded-0');
                                }
                            ?>
                    <div
                        class="bg-red text-white p-4 position-absolute bottom-0 start-0 translate-middle-y d-none d-md-block shadow">
                        <span class="h1 fw-bold mb-0">+90 Dias</span><br />
                        <span class="small text-uppercase fw-bold">De Imersão em Excelência</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <h6 class="text-red fw-bold text-uppercase mb-2">A Jornada</h6>
                <h2 class="display-5 fw-bold text-dark title-impact mb-4">
                    DA PAIXÃO À <span class="text-red">CERTIFICAÇÃO.</span>
                </h2>

                <div class="narrativa-copy text-muted">
                    <p>Nossa história sempre foi movida pela paixão em ajudar as pessoas a cuidar do seu patrimônio.
                        Mas, com o tempo, percebemos uma falha silenciosa no setor: muitas mulheres não se sentiam
                        acolhidas ou respeitadas no pátio das oficinas.</p>

                    <p>Vimos que, para sermos de fato uma oficina <strong>de todos e para todos</strong>, não bastava
                        apenas "atender bem". Era preciso evoluir. Mais do que um sorriso no rosto, queríamos eliminar o
                        <em>mansplaining</em> e construir um ambiente de inclusão real e transparência técnica.
                    </p>

                    <p>Foi esse sonho que nos levou a uma jornada para essa certificação, também estivemos no <strong>
                            Encontro de Oficinas Amiga da Mulher que aconteceu em Joinville/SC </strong>. Focando em
                        pilares de ESG (Ambiental, Social e Governança) e equidade de gênero.

                    </p>

                    <p>O resultado? Conquistamos nossa certificação e hoje somos a <strong>primeira oficina da Zona Sul
                            de Porto Alegre</strong> a ostentar oficialmente o selo OAM de Oficina Amiga da Mulher.</p>

                    <p class="text-dark">Hoje trabalhamos com a convicção de que não tratamos desiguais de maneira
                        igual. Aos homens, entregamos a objetividade e solução de problemas. Para as mulheres,
                        garantimos o respeito, o acolhimento e a segurança que elas merecem e que a nossa certificação
                        assegura.</p>
                </div>

                <div class="cta-jornada-box border-start border-red border-4 ps-4 mt-4 mb-4">
                    <p class="fst-italic mb-1 text-dark fw-bold">"Trouxemos para Porto Alegre não apenas técnica, mas um
                        compromisso de vida."</p>
                    <footer class="text-muted small">— Raphael e Rafaela</footer>
                </div>

                <p class="fw-bold text-dark mb-0">
                    Convidamos você a vivenciar esse novo padrão POA Car Service. Conheça nossos cuidados
                    especializados:
                </p>
            </div>

        </div>
    </div>
</section>