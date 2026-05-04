(function ($) {
  "use strict"; 

  /* ==========================================================================
  Pre loader - Spinner
   ========================================================================== */
  window.addEventListener("load", function () {
    var preloader = document.getElementById("preloader");
    if (preloader) {
      preloader.style.transition = "opacity 0.5s ease"; 
      preloader.style.opacity = "0";
      setTimeout(function () {
        preloader.style.display = "none";
        preloader.remove();
      }, 500);
    }
  });

  /* ==========================================================================
 Menu Lateral - Fechar ao clicar em um link de âncora
   ========================================================================== */
  // document.addEventListener("DOMContentLoaded", function () {
  //   const menuLateralEl = document.getElementById("menuLateral");

  //   // Só executa se o menu lateral existir na página (evita erros no console)
  //   if (menuLateralEl) {
  //     const navLinks = document.querySelectorAll(".custom-link");

  //     // Pegamos a instância existente ou criamos uma nova
  //     const bsOffcanvas =
  //       bootstrap.Offcanvas.getOrCreateInstance(menuLateralEl);

  //     navLinks.forEach((link) => {
  //       link.addEventListener("click", () => {
  //         // Fecha o menu sempre que clicar num link de âncora (#)
  //         // Removi a trava de width pra garantir que ele feche em qualquer tela
  //         bsOffcanvas.hide();
  //       });
  //     });
  //   }
  // });


  document.addEventListener("DOMContentLoaded", function () {
    const menuLateralEl = document.getElementById("menuLateral");
    if (!menuLateralEl) return;

    const bsOffcanvas = bootstrap.Offcanvas.getOrCreateInstance(menuLateralEl);
    const navLinks = document.querySelectorAll(".custom-link");

    navLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            const href = this.getAttribute("href");

            // Se for link de âncora interna
            if (href.startsWith("#")) {
                e.preventDefault(); // Mata o bounce nativo

                // 1. Primeiro fechamos o menu
                bsOffcanvas.hide();

                // 2. Esperamos o evento de "escondido" do Bootstrap para scrollar
                // Isso garante que o corpo da página já está liberado (sem overflow:hidden)
                menuLateralEl.addEventListener('hidden.bs.offcanvas', function () {
                    const targetElement = document.querySelector(href);
                    if (targetElement) {
                        const navHeight = document.querySelector(".navbar").offsetHeight;
                        const targetPosition = targetElement.offsetTop - navHeight;

                        window.scrollTo({
                            top: targetPosition,
                            behavior: "smooth"
                        });
                    }
                }, { once: true }); // Executa apenas uma vez por clique
            }
        });
    });
});

  /* ==========================================================================
   BOTÃO BACK TO TOP
   ========================================================================== */
  const $backToTop = document.getElementById("backToTop");
  if ($backToTop) {
    // Mostrar/Esconder botão ao rolar a página
    window.addEventListener("scroll", () => {
      if (window.scrollY > 400) {
        // Aparece após 400px de scroll
        $backToTop.classList.add("show");
      } else {
        $backToTop.classList.remove("show");
      }
    });

    // Ação de clique para subir
    $backToTop.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth", // Faz o scroll ser suave/lento
      });
    });
  }

  /* ==========================================================================
    Mapa Interativo - Substitui a imagem pelo iframe do Google Maps ao clicar
   ========================================================================== */

  document.addEventListener("DOMContentLoaded", function () {
    const mapPlaceholder = document.getElementById("trigger-mapa");
    const mapContainer = document.getElementById("map-interactive-container");

    if (mapPlaceholder && mapContainer) {
      mapPlaceholder.addEventListener("click", function () {
        // 1. Limpa o container e adiciona o Spinner
        mapContainer.innerHTML = `
                <div class="map-loader" id="map-loader">
                    <div class="spinner"></div>
                    <span>Carregando Mapa...</span>
                </div>
                <div class="iframe-trimmer" id="iframe-wrapper" style="opacity: 0; transition: opacity 0.5s ease; height: 100%; width: 100%;">
                </div>`;

        const loader = document.getElementById("map-loader");
        const wrapper = document.getElementById("iframe-wrapper");

        // 2. Cria o iframe via JS (mais seguro para garantir o onload)
        const iframe = document.createElement("iframe");

        iframe.src =
          "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4105.665984061049!2d-51.21458601906041!3d-30.081588064676065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9519832ef61c6fb9%3A0xd7b047976739b4f0!2sPOA%20Car%20Service!5e0!3m2!1spt-BR!2sbr!4v1776097965733!5m2!1spt-BR!2sbr";
        iframe.width = "100%";
        iframe.height = "600";
        iframe.style.border = "0";
        iframe.setAttribute("allowfullscreen", "");
        iframe.setAttribute("loading", "lazy");

        // 3. Define o evento de carregamento ANTES de dar o append
        iframe.onload = function () {
          if (loader) loader.style.display = "none";
          if (wrapper) wrapper.style.opacity = "1";
          console.log("Mapa carregado com sucesso!");
        };

        // 4. Injeta o iframe dentro do wrapper
        wrapper.appendChild(iframe);
      });
    }
  });
})(jQuery);
