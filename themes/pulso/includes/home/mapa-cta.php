<section id="agendamento" class="py-5 section-agendamento-red">
    <div class="container py-lg-4">
        <div class="text-center mb-5">
            <h6 class="text-white fw-bold text-uppercase mb-2" style="letter-spacing: 2px; opacity: 0.9;">Onde estamos
            </h6>
            <h2 class="display-4 fw-bold text-white title-impact">VENHA NOS <span
                    class="text-dark-red-title">VISITAR</span></h2>
            <div class="divider-white"></div>
        </div>

        <div class="row g-0 align-items-stretch shadow-lg">
            <div class="col-lg-7 order-2 order-lg-1">
                <div class="map-static-container h-100 d-flex flex-column align-items-center justify-content-center">
                    <div class="map-img-wrapper" id="map-interactive-container">
                        <div class="map-placeholder" id="trigger-mapa">
                            <?php
                            $img_id = pipe_get_img_id_by_slug('mapa');
                            if ($img_id) {
                                echo pipe_get_img($img_id, false, 'medium_large', 'map-img img-fluid');
                            }
                            ?>
                            <div class="btn-interagir-mapa">
                                <span>Clique para interagir com o mapa</span>
                            </div>
                        </div>
                    </div>

                    <div class="map-link-container text-center">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Rua+Dário+Totta+129+Porto+Alegre3"
                            target="_blank" rel="noopener" class="btn-rota-maps" data-analytics="bt-rota-mapa"
                            aria-label="Ver como chegar no Google Maps">
                            <i class="fas fa-route me-2" aria-hidden="true"></i> Como chegar - Rota no Maps
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 order-1 order-lg-2">
                <div class="nap-card-premium p-4 p-md-5 h-100 d-flex flex-column justify-content-center">
                    <div class="mb-4">
                        <h4 class="text-white fw-bold mb-3">POA CAR SERVICE</h4>
                        <p class="text-white-80">Referência em diagnósticos precisos e manutenção de veículos nacionais
                            e importados em Porto Alegre.</p>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <i class="fas fa-location-dot text-white mt-1 me-3"></i>
                            <div>
                                <h6 class="text-white fw-bold mb-1 small text-uppercase" style="letter-spacing: 1px;">
                                    Endereço</h6>
                                <a href="https://www.google.com/maps/dir/?api=1&destination=Rua+Dário+Totta+129+Porto+Alegre3"
                                    target="_blank" rel="noopener" class="text-decoration-none"
                                    aria-label="Ver endereço no Google Maps" data-analytics="bt-rota-nap">
                                    <p class="text-white-80 mb-0 link-endereco">Rua Dário Totta, 129<br>Teresópolis,
                                        Porto Alegre - RS</p>
                                </a>
                            </div>
						</div>
						

                        <div class="d-flex align-items-start mb-3">
                            <i class="fas fa-clock text-white mt-1 me-3"></i>
                            <div>
                                <h6 class="text-white fw-bold mb-1 small text-uppercase" style="letter-spacing: 1px;">
                                    Horários</h6>
                                <p class="text-white-80 mb-0">
                                    Seg - Sex: 08:00 às 18:00<br>
                                    Sábados: 08:00 às 12:00
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <i class="fas fa-phone text-white mt-1 me-3"></i>
                            <div>
                                <h6 class="text-white fw-bold mb-1 small text-uppercase" style="letter-spacing: 1px;">
                                    Telefone</h6>
                                <p class="text-white fs-5 fw-bold mb-0">
                                    (51) 9786-3963
                                </p>
                            </div>
                        </div>
                    </div>

                    <a href="https://wa.me/555197863963" class="btn btn-whatsapp-section w-100" target="_blank"
                        rel="noopener" data-analytics="bt-whatsapp-nap" aria-label="Agendar manutenção pelo Whatsapp">
                        <i class="fab fa-whatsapp me-2" aria-hidden="true"></i>
                        AGENDAR PELO WHATSAPP
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> 