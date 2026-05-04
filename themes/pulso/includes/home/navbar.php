 <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
     <div class="container">
         <a 
            data-analytics="logo-navbar-home"
            aria-label="Voltar para o topo"
            class="navbar-brand d-flex align-items-center"
            href="#">
             <div class="logo-navbar me-2">
                <?php
                    $img_id = pipe_get_img_id_by_slug('logo-rantengular-poa-car-service-fundo-transparente');

                    if ($img_id) {
                        echo pipe_get_img($img_id, false, 'thumbnail', 'img-fluid');
                    }
                ?>
             </div>
         </a>
         <button 
            data-analytics="abrir-menu-navbar-home"
            class="btn btn-outline-light border-2 fw-bold text-uppercase d-flex align-items-center"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#menuLateral"
            aria-controls="menuLateral"
            aria-expanded="false"
            aria-label="Abrir menu de navegação"
        >
             <i class="fas fa-bars me-2" aria-hidden="true"></i>
             <span class="d-none d-sm-inline" aria-hidden="true">
                Menu
            </span>
         </button>
     </div>
 </nav>

 <div class="offcanvas offcanvas-end bg-dark text-white" tabindex="-1" id="menuLateral"
     aria-labelledby="offcanvasRightLabel">
     <div class="offcanvas-header border-bottom border-secondary justify-content-end">
         <button
            data-analytics="fechar-menu-navbar-home"
            title="Fechar o menu"
            type="button"
            class="btn-close btn-close-white"
            data-bs-dismiss="offcanvas"
            aria-label="Fechar o menu de navegaçãp"
        >
        </button>
     </div>
     <div class="offcanvas-body">
         <div class="logo-offcanva">            
                 <?php
                    $img_id = pipe_get_img_id_by_slug('logo-rantengular-poa-car-service-fundo-transparente');

                    if ($img_id) {
                        echo pipe_get_img($img_id, false, 'thumbnail', 'img-fluid');
                    }
                ?>
         </div>
         <ul class="navbar-nav text-uppercase fw-bold gap-3">
             <li class="nav-item">
                 <a 
                    data-analytics="bt-home-navbar-home"
                    class="nav-link custom-link"
                    href="#home"
                    aria-label="Voltar para o topo."
                >
                    Home
                </a>
             </li>
             <li class="nav-item">
                 <a 
                    data-analytics="bt-quem-somos-navbar-home"
                    class="nav-link custom-link"
                    href="#sobre"
                    aria-label="Ir para a seção sobre"
                >
                     <small class="d-block text-red mb-n1" style="font-size: 0.65rem;">Conheça</small>
                     Quem Somos</a>
             </li>
             <li class="nav-item">
                 <a 
                    data-analytics="bt-revisoes-navbar-home"
                    class="nav-link custom-link"
                    href="#revisoes"
                    aria-label="Ir para a seção revisões"
                >
                     <small class="d-block text-red mb-n1" style="font-size: 0.65rem;">Segurança</small>
                     Revisões Programadas
                 </a>
             </li>
             <li class="nav-item">
                 <a 
                    data-analytics="bt-servicos-navbar-home"
                    class="nav-link custom-link"
                    href="#servicos"
                    aria-label="Ir para a seção de serviços"
                >
                     <small class="d-block text-red mb-n1" style="font-size: 0.65rem;">Conheça</small>
                     Nossos Serviços
                 </a>
             </li>
             <li class="nav-item">
                 <a 
                    data-analytics="bt-certificacao-oam-navbar-home"
                    class="nav-link custom-link"
                    href="#certificacao-oam"
                    aria-label="Ir para a seção de Oficina Amiga da Mulher"
                >
                     <small class="d-block text-red mb-n1" style="font-size: 0.65rem;">Certificada</small>
                     Oficina Amiga da Mulher
                 </a>
             </li>
             <li class="nav-item">
                 <a 
                    data-analytics="bt-venha-nos-visitar-navbar-home"
                    class="nav-link custom-link"
                    href="#agendamento"
                    aria-label="Ir para a seção de localização"
                >
                     <small class="d-block text-red mb-n1" style="font-size: 0.65rem;">Localização </small>
                     Venha nos Visitar
                 </a>
             </li>
             <li class="nav-item mt-4">
                 <a
                    data-analytics="bt-agendar-agora-navbar-home"
                    title="Agendar agora"
                    class="btn btn-danger w-100 py-3 fw-bold"
                    target="_blank"
                    rel="noopener"
                    href="https://wa.me/555197863963"
                    aria-label="Agendar agora pelo WhatsApp"
                >
                    <i class="fab fa-whatsapp aria-hidden="true"></i>
                     Agendar Agora
                 </a>
             </li>
         </ul>

         <div class="social-nav-footer d-flex gap-4">
             <a
                data-analytics="bt-instagram-navbar-home"
                title="Ir para o Instagram"
                href="https://www.instagram.com/poacarservice/"
                target="_blank"
                rel="noopener"
                class="social-icon-only"
                aria-label="Ir para o Instagram da POA Car Service"
            >
                 <i class="fab fa-instagram" aria-hidden="true"></i>
             </a>
             <a 
                data-analytics="bt-google-maps-navbar-home"
                title="Ir para o Google Meu Negócio"
                href="https://share.google/v83ggvgllRneTxbzi"
                target="_blank"
                rel="noopener"
                class="social-icon-only"
                aria-label="Ir para o Google Meu Negócio da POA Car Service"
            >
                 <i class="fa-brands fa-google" aria-hidden="true"></i>
             </a>
         </div>
     </div>
 </div>