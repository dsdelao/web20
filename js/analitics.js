// ======================================
// TRACKING CENTRALIZADO UPM
// ======================================

document.addEventListener('DOMContentLoaded', function() {
  
  // Función auxiliar para enviar eventos
  function trackEvent(eventName, params) {
    // Google Analytics
    if(typeof gtag !== 'undefined') {
      gtag('event', eventName, params);
    }
    // Facebook Pixel
    if(typeof fbq !== 'undefined') {
      var fbEventMap = {
        'click_explorar_carreras': 'ViewContent',
        'click_iniciar_admision': 'Lead',
        'click_whatsapp': 'Contact',
        'click_carrera': 'ViewContent',
        'form_submit_admision': 'CompleteRegistration'
      };
      if(fbEventMap[eventName]) {
        fbq('track', fbEventMap[eventName], params);
      }
    }
  }

  // ======================================
  // BOTÓN: EXPLORAR CARRERAS
  // ======================================
  var btnCarreras = document.querySelectorAll('a[href*="carreras"], .btn-naranja-hero');
  btnCarreras.forEach(function(btn) {
    btn.addEventListener('click', function() {
      trackEvent('click_explorar_carreras', {
        button_text: this.textContent.trim(),
        button_location: getButtonLocation(this)
      });
    });
  });

  // ======================================
  // BOTÓN: INICIAR ADMISIÓN
  // ======================================
  var btnAdmision = document.querySelectorAll('a[href*="admision"], .btn-outline-hero, .btn-naranja-gigante');
  btnAdmision.forEach(function(btn) {
    btn.addEventListener('click', function() {
      trackEvent('click_iniciar_admision', {
        button_text: this.textContent.trim(),
        page: window.location.pathname
      });
    });
  });

  // ======================================
  // BOTÓN: WHATSAPP
  // ======================================
  var btnWhatsapp = document.querySelector('.whatsapp-float');
  if(btnWhatsapp) {
    btnWhatsapp.addEventListener('click', function() {
      trackEvent('click_whatsapp', {
        contact_method: 'floating_button',
        page: window.location.pathname
      });
    });
  }

  // ======================================
  // TARJETAS: CARRERAS
  // ======================================
  var cardsCarreras = document.querySelectorAll('.card-programa, .card-carrera, .tarjeta-carrera-oferta');
  cardsCarreras.forEach(function(card) {
    card.addEventListener('click', function() {
      var carrera = this.querySelector('h3') || this.querySelector('h4');
      var carreraNombre = carrera ? carrera.textContent.trim() : 'Sin nombre';
      trackEvent('click_carrera', {
        carrera_nombre: carreraNombre,
        section: 'oferta_educativa'
      });
    });
  });

  // ======================================
  // DESCARGA: PDFs
  // ======================================
  var pdfLinks = document.querySelectorAll('a[href$=".pdf"]');
  pdfLinks.forEach(function(link) {
    link.addEventListener('click', function() {
      var pdfName = this.getAttribute('href').split('/').pop();
      trackEvent('download_pdf', {
        file_name: pdfName,
        file_type: 'mapa_curricular'
      });
    });
  });

  // ======================================
  // FORMULARIO: PRE-REGISTRO
  // ======================================
  var formAdmision = document.querySelector('.form-registro');
  if(formAdmision) {
    formAdmision.addEventListener('submit', function(e) {
      trackEvent('form_submit_admision', {
        form_type: 'pre_registro',
        page: window.location.pathname
      });
    });
  }

  // ======================================
  // REDES SOCIALES
  // ======================================
  var redesSociales = document.querySelectorAll('.redes-iconos a');
  redesSociales.forEach(function(link) {
    link.addEventListener('click', function() {
      var red = this.querySelector('img') ? this.querySelector('img').alt : 'Desconocida';
      trackEvent('click_red_social', {
        social_network: red,
        link_location: 'footer'
      });
    });
  });

  // ======================================
  // SCROLL DEPTH (Profundidad de scroll)
  // ======================================
  var scrollMarks = [25, 50, 75, 100];
  var scrollTracked = {};
  
  window.addEventListener('scroll', function() {
    var scrollPercent = Math.round((window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100);
    
    scrollMarks.forEach(function(mark) {
      if(scrollPercent >= mark && !scrollTracked[mark]) {
        scrollTracked[mark] = true;
        trackEvent('scroll_depth', {
          percent: mark,
          page: window.location.pathname
        });
      }
    });
  });

  // ======================================
  // FUNCIONES AUXILIARES
  // ======================================
  function getButtonLocation(element) {
    if(element.closest('.hero-fusion-upm') || element.closest('.hero-principal')) {
      return 'hero';
    } else if(element.closest('.seccion-cta-final') || element.closest('.cta-carrera')) {
      return 'cta_final';
    } else if(element.closest('footer')) {
      return 'footer';
    } else {
      return 'content';
    }
  }

});