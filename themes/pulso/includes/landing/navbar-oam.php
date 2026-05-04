 <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
     <div class="container">
         <a 
            class="navbar-brand d-flex align-items-center"
            href="#"
            data-analytics="bt-logo-principal-navbar-landing"
            aria-label="Voltar para o topo da página"    
        >
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
            class="btn btn-outline-light border-2 fw-bold text-uppercase d-flex align-items-center" type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#menuLateral"
            data-analytics="bt-hamburger-navbar-landing"
            aria-label="Abrir o menu de navegação"    
        >
             <i class="fas fa-bars me-2" aria-hidden="true"></i> <span aria-hidden="tan" class="d-none d-sm-inline">Menu</span>
         </button>
     </div>
 </nav>

 <div class="offcanvas offcanvas-end bg-dark text-white" tabindex="-1" id="menuLateral"
     aria-labelledby="offcanvasRightLabel">
     <div class="offcanvas-header border-bottom border-secondary justify-content-end">
         <button
            type="button"
            class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            data-analytics="bt-fechar-menu-navbar-landing"
            aria-label="Fechar o menu de navegação"
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
                    class="nav-link custom-link"
                    href="#home"
                    data-analytics="bt-topo-navbar-landing"
                    aria-label="Voltar para o topo da página"
                >
                    Topo
                </a>
             </li>
             <li class="nav-item">
                 <a 
                    class="nav-link custom-link" 
                    href="#certificacao-oam"
                    data-analytics="bt-certificacao-oam-navbar-landing"
                    aria-label="Conheça nossa certificação Oficina Amiga da Mulher"    
                >
                     <small class="d-block text-red mb-n1" style="font-size: 0.65rem;">Certificada</small>
                     Oficina Amiga da Mulher
                 </a>
             </li>
             <li class="nav-item">
                 <a 
                    class="nav-link custom-link" 
                    href="#jornada"
                    data-analytics="bt-jornada-navbar-landing"
                    aria-label="Conheça nossa jornada"    
                >
                     <small class="d-block text-red mb-n1" style="font-size: 0.65rem;">Conheça</small>
                     Quem Somos</a>
             </li>
             <li class="nav-item">
                 <a 
                    class="nav-link custom-link"
                    href="#revisoes"
                    data-analytics="bt-revisoes-navbar-landing"
                    aria-label="Conheça nossos serviços de revisões programadas"
                >
                     <small class="d-block text-red mb-n1" style="font-size: 0.65rem;">Segurança</small>
                     Revisões Programadas
                 </a>
             </li>
             <li class="nav-item">
                 <a 
                    class="nav-link custom-link"
                    href="#lavagem-saude"
                    data-analytics="bt-lavagem-e-higienizacao-navbar-landing"
                    aria-label="Conheça nossos serviços de lavagem e higienização de estofados"    
                >
                     <small class="d-block text-red mb-n1" style="font-size: 0.65rem;">Lavagem e </small>
                     Higienização de Estofados
                 </a>
             </li>
             <li class="nav-item">
                 <a 
                    class="nav-link custom-link"
                    href="#agendamento"
                    data-analytics="bt-mapa-cta-navbar-landing"
                    aria-label="Conheça nossa localização e agende uma visita"
                >
                     <small class="d-block text-red mb-n1" style="font-size: 0.65rem;">Localização </small>
                     Venha nos Visitar
                 </a>
             </li>
             <li class="nav-item mt-4">
                 <a 
                    class="btn btn-danger w-100 py-3 fw-bold"
                    target="_blank" 
                    rel="noopener"
                    href="https://wa.me/555197863963"
                    data-analytics="bt-agendar-agora-navbar-landing"
                    aria-label="Agendar agora pelo WhatsApp"
                >
                     <i class="fab fa-whatsapp" aria-hidden="true"></i>
                     Agendar Agora
                 </a>
             </li>
         </ul>

         <div class="social-nav-footer d-flex gap-4">
             <a 
                href="https://www.instagram.com/poacarservice/"
                target="_blank" 
                rel="noopener"
                class="social-icon-only"
                data-analytics="bt-insta-navbar-landing"
                aria-label="Conheça a POA Car Service no Instagram"   
            >
                 <i aria-hidden="true" class="fab fa-instagram"></i>
             </a>
             <a 
                data-analytics="bt-google-maps-navbar-landing"
                href="https://share.google/v83ggvgllRneTxbzi"
                target="_blank"
                class="social-icon-only"
                rel="noopener"
                aria-label="Conheça a POA Car Service no Google Maps"    
            >
                 <i aria-hidden="true" class="fa-brands fa-google"></i>
             </a>
         </div>
     </div>
     <div class="offcanvas-footer p-3 border-top d-flex justify-content-end">
         <a
             class="voltar-home"
             href="<?php echo home_url(); ?>/"
             data-analytics="bt-voltar-topo-do-footer"
             aria-label="Voltar para a Home Page do site">
             <small><i class="fa-solid fa-angles-right" aria-hidden="true"></i> Voltar para a Home</small>
         </a>
     </div>
 </div>