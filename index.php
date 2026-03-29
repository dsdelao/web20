<!DOCTYPE html>
<html lang="es">

<head>

    <!-- ======================================
    CONFIGURACIÓN GENERAL Y SEO
    ====================================== -->
    
    <meta charset="UTF-8" />

    <title>Universidad Politécnica Mesoamericana (UPM) | Tenosique, Tabasco</title>

    <meta name="description" content="Estudia en la UPM en Tenosique, Tabasco. Obtén tu Doble Título (TSU + Ingeniería/Licenciatura) en 3.5 años. Un campus rodeado de naturaleza con formación 80% práctica. ¡Inscripción Gratis!">
    
    <meta name="keywords" content="UPM, Universidad Politécnica Mesoamericana, Universidades en Tenosique, Universidades en Tabasco, Doble titulación, Ingeniería Petrolera, Gestión Turística Tabasco, Recursos Naturales Usumacinta, Wanha">
    
    <meta name="author" content="Universidad Politécnica Mesoamericana">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.upm.edu.mx/">
    <meta property="og:site_name" content="Universidad Politécnica Mesoamericana">
    
    <meta property="og:title" content="¡Tu Futuro Empieza en la UPM! 🎓 Doble Titulación en 3.5 Años">
    
    <meta property="og:description" content="Únete a la comunidad UPM en Tenosique, Tabasco. Estudia en un laboratorio vivo rodeado por la reserva Wanha' y el Usumacinta. Modelo 80% práctico. ¡Asegura tu lugar hoy!">
    
    <meta property="og:image" content="https://www.upm.edu.mx/assets/img/share-image.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Estudiantes de la UPM celebrando su graduación en Tenosique">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Estudia en la UPM | Tenosique, Tabasco 🚀">
    <meta name="twitter:description" content="Doble título en 3.5 años en un entorno natural privilegiado. ¡Conoce nuestra oferta educativa!">
    <meta name="twitter:image" content="https://www.upm.edu.mx/assets/img/share-image.jpg">


    <!-- CSS -->
    <link rel="stylesheet" href="style.css?v=2">
    <style>
    /* ======================================
       CSS CRÍTICO DESKTOP - HERO
    ====================================== */
    
    @media (min-width: 1024px) {
    
      /* HERO PRINCIPAL */
      .hero-fusion-upm {
        min-height: 90vh;
        padding: 120px 40px 80px 40px;
        text-align: center;
      }
    
      .hero-contenedor {
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        max-width: 1000px;
        margin: 0 auto;
      }
    
      .hero-contenedor h1 {
        font-size: 4.5rem;
        color: #ffffff;
        text-align: center;
        margin-bottom: 10px;
      }
    
      .texto-naranja {
        color: #F7941D;
        position: relative;
      }
    
      .texto-naranja::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 100%;
        height: 4px;
        background-color: #F7941D;
      }
    
      .subtitulo-institucional {
        font-size: 2rem;
        color: #b9f6ca;
        margin-bottom: 30px;
        text-align: center;
      }
    
      .descripcion-hero {
        font-size: 1.3rem;
        max-width: 800px;
        color: #ffffff;
        text-align: center;
        margin: 0 auto 40px auto;
      }
    
      .badge-convocatoria {
        font-size: 1rem;
        padding: 10px 25px;
        margin-bottom: 30px;
      }
    
      /* BOTONES */
      .botones-hero-contenedor {
        display: flex;
        flex-direction: row;
        gap: 30px;
        justify-content: center;
        align-items: center;
        margin: 40px auto 50px auto;
      }
    
      .btn-naranja-hero,
      .btn-outline-hero {
        display: inline-block;
        padding: 16px 40px;
        font-size: 1.15rem;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 800;
        transition: all 0.3s ease;
        white-space: nowrap;
      }
    
      .btn-naranja-hero {
        background-color: #F7941D;
        color: #ffffff;
        border: 2px solid #F7941D;
      }
    
      .btn-naranja-hero:hover {
        background-color: #d67a0f;
        border-color: #d67a0f;
        transform: translateY(-3px);
      }
    
      .btn-outline-hero {
        background-color: transparent;
        color: #ffffff;
        border: 2px solid rgba(255, 255, 255, 0.6);
      }
    
      .btn-outline-hero:hover {
        background-color: #ffffff;
        color: #2E2A77;
        transform: translateY(-3px);
      }
    
      /* ESTADÍSTICAS */
      .hero-estadisticas {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        gap: 80px;
        justify-content: center;
        align-items: center;
        padding-top: 40px;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        margin-top: 50px;
        max-width: 1000px;
        margin-left: auto;
        margin-right: auto;
      }
    
      .stat-item {
        text-align: center;
        border-right: 1px solid rgba(255, 255, 255, 0.15);
        padding: 0 40px;
      }
    
      .stat-item:last-child {
        border-right: none;
      }
    
      .stat-item h3 {
        font-size: 3rem;
        color: #F7941D;
        margin-bottom: 8px;
        font-weight: 900;
      }
    
      .stat-item p {
        font-size: 1.1rem;
        color: #e0e0e0;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
      }
    
      /* BENEFICIOS */
      .beneficios-upm {
        padding: 60px 40px;
      }
    
      .beneficios-upm h2 {
        font-size: 2.8rem;
      }
    
      /* PROGRAMAS ACADÉMICOS */
      .programas-academicos-upm {
        padding: 100px 40px;
      }
    
      .titulo-seccion {
        font-size: 3.2rem;
        margin-bottom: 60px;
      }
    
      .grid-programas {
        grid-template-columns: repeat(3, 1fr);
        gap: 40px;
      }
    
      .card-programa {
        height: 400px;
      }
    
      .info-programa h3 {
        font-size: 1.8rem;
      }
    
      /* VIVE LA EXPERIENCIA */
      .vive-experiencia-upm {
        padding: 100px 40px;
      }
    
      .contenedor-experiencia {
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
      }
    
      .experiencia-texto h2 {
        font-size: 3.2rem;
        text-align: left;
      }
    
      .experiencia-texto h3 {
        font-size: 1.8rem;
        text-align: left;
      }
    
      .experiencia-texto p {
        font-size: 1.2rem;
        text-align: left;
      }
    
      /* MUNDO ODO */
      .mundo-odo-upm {
        padding: 100px 40px;
      }
    
      .odo-mascota-container {
        width: 400px;
        bottom: -30px;
        left: -30px;
      }
    
      .odo-contenido {
        margin-left: 380px;
      }
    
      .titulo-blanco {
        font-size: 3.5rem;
        text-align: left;
      }
    
      .grid-noticias-fb {
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
      }
    
      /* CTA FINAL */
      .seccion-cta-final {
        padding: 80px 40px;
      }
    
      .banner-comienza-futuro {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
      }
    
      .banner-comienza-futuro h2 {
        font-size: 3rem;
      }
    
      .checks-cta {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        max-width: 600px;
        margin: 30px auto;
        text-align: left;
      }
    
    }
    
    /* PANTALLAS MUY GRANDES (1440px+) */
    @media (min-width: 1440px) {
      .hero-contenedor h1 {
        font-size: 5.5rem;
      }
    
      .grid-programas {
        grid-template-columns: repeat(5, 1fr);
        max-width: 1600px;
        margin: 0 auto;
      }
    }
    </style>

    <!-- Icono del sitio -->
    <link rel="icon" href="assets/icon/favicon.png" type="image/png">

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tipografías -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

</head>

<body>

<?php include 'header.html'; ?>
<!--<div id="header-container"></div>-->
<!-- ======================================
CONTENIDO PRINCIPAL
====================================== -->

<main>

<!-- ======================================
HERO PRINCIPAL
====================================== -->

<section class="hero-fusion-upm">
  
  <div class="slider-fondo">
<img class="slide active" src="assets/banner/banner1.jpeg" alt="Campus UPM">

    <img class="slide" src="assets/banner/banner2.jpeg" alt="Instalaciones UPM">

    <img class="slide" src="assets/banner/banner3.png" alt="Estudiantes UPM">  </div>

  <div class="hero-overlay-cristal"></div>

  <div class="hero-contenedor relativo">
    
    <div class="badge-convocatoria">
      <span class="icono-estudiante">👨‍🎓</span> Convocatoria 2026 Abierta <span class="icono-birrete">🎓</span>
    </div>

    <h1>Tu futuro empieza <span class="texto-naranja">aquí</span></h1>
    <h2 class="subtitulo-institucional">Universidad Politécnica Mesoamericana</h2>

    <p class="descripcion-hero">
      Formamos profesionales de excelencia con programas académicos innovadores y una educación integral que transforma vidas.
    </p>

    <div class="botones-hero-contenedor">
      <a href="#oferta-educativa" class="btn-naranja-hero">Explorar Carreras →</a>
      <a href="#admision" class="btn-outline-hero">Iniciar Proceso de Admisión</a>
    </div>

    <div class="hero-estadisticas">
      <div class="stat-item">
        <h3>4,500+</h3>
        <p>Egresados</p>
      </div>
      <!--<div class="stat-item">
        <h3>95%</h3>
        <p>Empleabilidad</p>
      </div>-->
      <div class="stat-item">
        <h3>15+</h3>
        <p>Años de Experiencia</p>
      </div>
      <div class="stat-item">
        <h3>5</h3>
        <p>Programas de Ingeniería</p>
      </div>
    </div>

  </div>
</section>

<div style="height: 30px; width: 100%; clear: both; background: transparent;"></div>

<section class="beneficios-upm" style="background-color: var(--naranja-upm, #FF7A00); padding: 40px 15px; color: white; text-align: center;">
  <div style="max-width: 1200px; margin: 0 auto;">
    
    <h2 style="font-size: 2.2rem; margin-bottom: 30px; font-weight: 800; color: #FFFFFF !important;">La mayor ventaja competitiva de la región 🚀</h2>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
      
      <div style="background: rgba(255,255,255,0.1); padding: 20px; border-radius: 15px; border: 1px solid rgba(255,255,255,0.2);">
        <div style="font-size: 2.5rem; margin-bottom: 10px;">🎁</div>
        <h3 style="font-size: 1.3rem; margin-bottom: 10px; color: white !important;">Inscripción GRATIS</h3>
        <p style="font-size: 1rem; margin: 0; color: white !important;">Y pase directo para que asegures tu lugar sin complicaciones.</p>
      </div>
      
      <div style="background: rgba(255,255,255,0.1); padding: 20px; border-radius: 15px; border: 1px solid rgba(255,255,255,0.2);">
        <div style="font-size: 2.5rem; margin-bottom: 10px;">🎓</div>
        <h3 style="font-size: 1.3rem; margin-bottom: 10px; color: white !important;">Doble Titulación</h3>
        <p style="font-size: 1rem; margin: 0; color: white !important;">Obtén 2 títulos y 2 cédulas profesionales en solo 3 años y medio.</p>
      </div>

      <div style="background: rgba(255,255,255,0.1); padding: 20px; border-radius: 15px; border: 1px solid rgba(255,255,255,0.2);">
        <div style="font-size: 2.5rem; margin-bottom: 10px;">🚌</div>
        <h3 style="font-size: 1.3rem; margin-bottom: 10px; color: white !important;">Apoyo Total</h3>
        <p style="font-size: 1rem; margin: 0; color: white !important;">Programas de becas de alimentación y transporte para nuestros estudiantes.</p>
      </div>
      
    </div>
  </div>
</section>
<section class="programas-academicos-upm" style="padding: 60px 15px;">
  <div class="contenedor-programas" style="max-width: 1200px; margin: 0 auto;">
    <h2 class="titulo-seccion" style="text-align: center; margin-bottom: 40px;">Programas Académicos</h2>
    
    <div class="grid-programas" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
      
      <a href="petrolera.html" class="card-programa" style="background-image: url('assets/img/carreras/ip.jpg'); min-height: 280px; display: flex; flex-direction: column; justify-content: flex-end; border-radius: 15px; overflow: hidden; position: relative; text-decoration: none; background-size: cover; background-position: center; padding: 25px;">
        <div class="overlay-gradiente" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 100%); z-index: 1;"></div>
        <div class="info-programa" style="position: relative; z-index: 2;">
          <span class="etiqueta-tsu" style="color: var(--naranja-upm, #F7941D); font-weight: bold; font-size: 0.9rem; text-transform: uppercase;">TSU e Ingeniería</span>
          <h3 style="color: white; margin: 5px 0 0 0; font-size: 1.3rem;">Ingeniería Petrolera</h3>
        </div>
      </a>

      <a href="itiiid.html" class="card-programa" style="background-image: url('assets/img/carreras/iti.jpg'); min-height: 280px; display: flex; flex-direction: column; justify-content: flex-end; border-radius: 15px; overflow: hidden; position: relative; text-decoration: none; background-size: cover; background-position: center; padding: 25px;">
        <div class="overlay-gradiente" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 100%); z-index: 1;"></div>
        <div class="info-programa" style="position: relative; z-index: 2;">
          <span class="etiqueta-tsu" style="color: var(--naranja-upm, #F7941D); font-weight: bold; font-size: 0.9rem; text-transform: uppercase;">TSU e Ingeniería</span>
          <h3 style="color: white; margin: 5px 0 0 0; font-size: 1.3rem;">Tecnologías de la Información e Innovación Digital</h3>
        </div>
      </a>

      <a href="manejo-recursos.html" class="card-programa" style="background-image: url('assets/img/carreras/imrn.jpg'); min-height: 280px; display: flex; flex-direction: column; justify-content: flex-end; border-radius: 15px; overflow: hidden; position: relative; text-decoration: none; background-size: cover; background-position: center; padding: 25px;">
        <div class="overlay-gradiente" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 100%); z-index: 1;"></div>
        <div class="info-programa" style="position: relative; z-index: 2;">
          <span class="etiqueta-tsu" style="color: var(--naranja-upm, #F7941D); font-weight: bold; font-size: 0.9rem; text-transform: uppercase;">TSU e Ingeniería</span>
          <h3 style="color: white; margin: 5px 0 0 0; font-size: 1.3rem;">Manejo de Recursos Naturales</h3>
        </div>
      </a>

      <a href="turismo.html" class="card-programa" style="background-image: url('assets/img/carreras/laet.jpg'); min-height: 280px; display: flex; flex-direction: column; justify-content: flex-end; border-radius: 15px; overflow: hidden; position: relative; text-decoration: none; background-size: cover; background-position: center; padding: 25px;">
        <div class="overlay-gradiente" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 100%); z-index: 1;"></div>
        <div class="info-programa" style="position: relative; z-index: 2;">
          <span class="etiqueta-tsu" style="color: var(--naranja-upm, #F7941D); font-weight: bold; font-size: 0.9rem; text-transform: uppercase;">TSU y Licenciatura</span>
          <h3 style="color: white; margin: 5px 0 0 0; font-size: 1.3rem;">Gestión y Desarrollo Turístico</h3>
        </div>
      </a>

      <a href="comercio.html" class="card-programa" style="background-image: url('assets/img/carreras/lcia.jpg'); min-height: 280px; display: flex; flex-direction: column; justify-content: flex-end; border-radius: 15px; overflow: hidden; position: relative; text-decoration: none; background-size: cover; background-position: center; padding: 25px;">
        <div class="overlay-gradiente" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 100%); z-index: 1;"></div>
        <div class="info-programa" style="position: relative; z-index: 2;">
          <span class="etiqueta-tsu" style="color: var(--naranja-upm, #F7941D); font-weight: bold; font-size: 0.9rem; text-transform: uppercase;">TSU y Licenciatura</span>
          <h3 style="color: white; margin: 5px 0 0 0; font-size: 1.3rem;">Comercio Internacional y Aduanas</h3>
        </div>
      </a>

    </div>
  </div>
</section>

<section class="vive-experiencia-upm" style="padding: 60px 15px; background-color: #f4f4f4;">
  <div class="contenedor-experiencia" style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
    
    <div class="experiencia-texto" style="flex: 1 1 500px;">
      <h2 style="color: #F7941D; font-size: 2.2rem; margin-bottom: 10px; font-weight: bold;">Vive la Experiencia UPM 🦌</h2>
      <h3 style="color: #333333 !important; font-size: 1.8rem; margin-bottom: 20px;">Doble Titulación y Excelencia</h3>
      
      <p style="color: #555555 !important; font-size: 1.1rem; line-height: 1.6; margin-bottom: 30px;">
        ¿Buscas una universidad donde no seas solo un número? En la UPM nos distinguimos por un ambiente humano. Te ofrecemos la mayor ventaja de la región: <strong style="color: #333333 !important;">¡2 títulos y 2 cédulas profesionales!</strong>
      </p>
      
      <ul class="lista-beneficios-upm" style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 15px;">
        <li style="background: white; padding: 15px 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); display: flex; align-items: center; gap: 15px; color: #333333 !important; font-weight: 600; font-size: 1.1rem;">
          <span class="icono-check" style="font-size: 1.5rem;">✅</span> Inscripción GRATIS y pase directo
        </li>
        <li style="background: white; padding: 15px 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); display: flex; align-items: center; gap: 15px; color: #333333 !important; font-weight: 600; font-size: 1.1rem;">
          <span class="icono-check" style="font-size: 1.5rem;">✅</span> Becas de alimentación y transporte
        </li>
        <li style="background: white; padding: 15px 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); display: flex; align-items: center; gap: 15px; color: #333333 !important; font-weight: 600; font-size: 1.1rem;">
          <span class="icono-check" style="font-size: 1.5rem;">✅</span> Formación 80% práctica desde el día uno
        </li>
      </ul>
    </div>

    <div class="experiencia-video" style="flex: 1 1 500px; width: 100%;">
      <div class="video-oferta-wrapper" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 15px; box-shadow: 0 10px 20px rgba(0,0,0,0.15);">
        <iframe src="https://www.youtube.com/embed/40ukutPnQnQ?si=rcDVnzT3FLzuBVHl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;"></iframe>
      </div>
    </div>

  </div>


<section class="seccion-avisos" style="padding: 60px 15px; background-color: #ffffff; text-align: center;">
  <div class="contenedor-avisos" style="max-width: 1200px; margin: 0 auto;">
    
    <div style="margin-bottom: 40px;">
      <h2 style="font-size: 2.5rem; color: #2E2A77; font-weight: 900; text-transform: uppercase; margin-bottom: 10px;">Avisos <span style="color: #F7941D;">Importantes</span></h2>
      <p style="color: #555555; font-size: 1.1rem;">Mantente informado sobre los últimos comunicados oficiales de la UPM.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; text-align: left;">
      
      <div class="tarjeta-aviso" style="background-color: #F8FAFC; border-left: 5px solid #F7941D; border-radius: 8px; padding: 25px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); display: flex; flex-direction: column;">
        <div style="display: flex; align-items: center; margin-bottom: 15px;">
          <span style="font-size: 1.8rem; margin-right: 15px;">🌴</span>
          <h3 style="color: #1E293B; font-size: 1.4rem; margin: 0; font-weight: 700;">Aviso Institucional: Periodo Vacacional</h3>
        </div>
        <p style="color: #475569; margin-bottom: 25px; flex-grow: 1;">Consulta la información oficial sobre el receso de Semana Santa y los horarios de atención exclusiva para inscripciones de nuevo ingresso.</p>
        
        <a href="https://www.facebook.com/share/14XV9pi8tGE/?mibextid=wwXIfr" target="_blank" style="display: inline-block; background-color: #F7941D; color: white; padding: 12px 20px; border-radius: 6px; text-decoration: none; font-weight: bold; text-align: center;">
          Ver comunicado en Facebook 📘
        </a>
      </div>

    <div class="tarjeta-aviso" style="background-color: #F8FAFC; border-left: 5px solid #6FB341; border-radius: 8px; padding: 25px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); display: flex; flex-direction: column;">
        <div style="display: flex; align-items: center; margin-bottom: 15px;">
          <span style="font-size: 1.8rem; margin-right: 15px;">💰</span>
          <h3 style="color: #1E293B; font-size: 1.4rem; margin: 0; font-weight: 700;">Costos Vigentes</h3>
        </div>
        <p style="color: #475569; margin-bottom: 25px; flex-grow: 1;">Consulta nuestra tabla de costos actualizados para inscripciones, reinscripciones, constancias, trámites de titulación, etc.</p>
        
        <a href="assets/img/precios_upm2026.jpg" target="_blank" style="display: inline-block; background-color: #6FB341; color: white; padding: 12px 20px; border-radius: 6px; text-decoration: none; font-weight: bold; text-align: center;">
          Ver tabla de costos 📄
        </a>
      </div>

    </div>
  </div>
</section>

<style>
  /* 1. DOMANDO A LA MASCOTA */
  .mundo-odo-upm {
    padding: 60px 15px;
    clear: both !important; /* Rompe cualquier flotado de otras secciones */
    text-align: center;
    width: 100%;
  }
  .contenedor-mundo-odo {
    max-width: 1200px;
    margin: 0 auto;
    display: block;
  }
  .img-odo {
    max-width: 200px !important;
    height: auto !important;
    display: block !important;
    margin: 0 auto 20px auto !important; /* Fuerza el centrado */
    float: none !important; /* Elimina la fuerza que lo jalaba a la izquierda */
    position: static !important;
  }

  /* 2. OBLIGANDO LAS 3 COLUMNAS */
  .grid-noticias-fb {
    display: grid;
    /* Esto fuerza exactamente 3 columnas del mismo tamaño */
    grid-template-columns: repeat(3, 1fr); 
    gap: 20px;
    margin-bottom: 50px;
  }
  .tarjeta-fb {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    width: 100%;
  }

  /* 3. ADAPTACIÓN PARA CELULARES Y TABLETS */
  @media (max-width: 900px) {
    .grid-noticias-fb {
      grid-template-columns: 1fr; /* En pantallas pequeñas se pone 1 por fila */
    }
  }
</style>

<section class="mundo-odo-upm" style="padding: 60px 15px; background-color: #2E2A77; text-align: center; width: 100%; display: block;">
  
  <div class="contenedor-mundo-odo" style="max-width: 1200px; margin: 0 auto; display: block;">
    
    <div class="odo-mascota-container" style="display: block; width: 100%; text-align: center; margin-bottom: 30px;">
      <img src="assets/img/odo-mascota.png" alt="ODO Mascota UPM" class="img-odo" style="display: block; margin: 0 auto; max-width: 220px; float: none; position: static;">
    </div>
    
    <div class="odo-contenido" style="display: block; margin: 0; text-align: center;">
      
      <h2 class="titulo-blanco" style="font-size: 3rem; margin-bottom: 10px; color: #ffffff; font-weight: 900; text-transform: uppercase;">Mundo <span class="texto-naranja" style="color: #F7941D;">ODO</span> 🦌</h2>
      <p class="subtitulo-blanco" style="font-size: 1.2rem; margin-bottom: 40px; color: #d1c4e9;">Innovación, cultura y éxito. ¡Conoce lo que nuestra comunidad está logrando hoy!</p>
      
      <div class="grid-noticias-fb" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; margin-bottom: 50px; justify-items: center;">
        
        <div class="tarjeta-fb" style="width: 100%; max-width: 350px; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.15);">
          <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupmdifusion%2Fposts%2Fpfbid0w2s4fCcs78DtoaBQ7tCQBbacMbv7UJ1fL3Dfh3ZYJxvRwsr2t8mS3sYbTKvUp5qql&show_text=false&width=350&v=2" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>

        <div class="tarjeta-fb" style="width: 100%; max-width: 350px; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.15);">
          <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupmdifusion%2Fposts%2Fpfbid022Kk8LhRZprBgBSM4MtNkRmCAQjko36iVd2TLvtQWqW6E1Zx9jQJuw5JGo29iu5WKl&show_text=false&width=350&v=2" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>

        <div class="tarjeta-fb" style="width: 100%; max-width: 350px; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.15);">
          <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fupmdifusion%2Fposts%2Fpfbid02A5FdxsuvzdoTNERRHDkvpxC5cgZ23L31rFUCrdnC6Zpj6kPLP1tdHXVS8MBhgsbml&show_text=false&width=350&v=2" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>

      </div>
      
      <div class="acciones-odo" style="margin-top: 20px;">
        <a href="https://www.facebook.com/upmdifusion" target="_blank" class="btn-naranja-hero" style="display: inline-block; background-color: #F7941D; color: white; padding: 15px 35px; text-decoration: none; border-radius: 50px; font-weight: bold; font-size: 1.1rem; box-shadow: 0 4px 10px rgba(247, 148, 29, 0.3);">
          Ver más en nuestro Facebook 📘
        </a>
      </div>

    </div>
  </div>
</section>

<!-- Tarjeta de Vida UPM
    <div class="tarjeta-vida-upm">
      <div class="header-vida">
        <div class="odo-avatar-mini">🦌</div>
        <h3>Vida UPM</h3>
        <span class="badge-en-vivo">En vivo</span>
      </div> -->
      
      <!-- Thumbnail clickeable
      <div class="media-vida">
        <a href="https://www.youtube.com/channel/UCatPzz6EJoscQL6u73w9sJw" target="_blank" rel="noopener noreferrer" style="display: block; position: relative;">
          
          <img src="assets/galeria-carreras/itid/iti5.jpeg" alt="Primer Lugar Laberinto" style="width: 100%; display: block;">
          
          <div class="overlay-play">▶</div>
        </a>
      </div>
    </div> -->


<section class="seccion-cta-final" style="padding: 80px 15px; background-color: #F8FAFC; display: flex; justify-content: center; align-items: center;">
  
  <div class="contenedor-cta-grid" style="max-width: 900px; width: 100%; background: #FFFFFF; border-radius: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); padding: 50px 30px; text-align: center;">
    
    <div class="banner-comienza-futuro">
      
      <span class="badge-convocatoria" style="display: inline-block; color: #662D91; background-color: #E0E7FF; padding: 8px 20px; border-radius: 50px; font-weight: 700; font-size: 0.95rem; margin-bottom: 20px;">
        🕒 Convocatoria Agosto 2026
      </span>
      
      <h2 style="color: #1E293B; font-size: 3rem; margin-bottom: 20px; font-weight: 900; line-height: 1.2;">
        Comienza tu futuro <br><span class="texto-naranja" style="color: #F26522;">profesional</span> hoy
      </h2>
      
      <p style="color: #475569; font-size: 1.2rem; max-width: 600px; margin: 0 auto 30px auto; line-height: 1.6;">
        Únete a nuestros estudiantes que ya están transformando su futuro en la Universidad Politécnica Mesoamericana.
      </p>
      
      <ul class="checks-cta" style="list-style: none; padding: 0; margin: 0 auto 40px auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; max-width: 650px; text-align: left;">
        
        <li style="background: #F8FAFC; padding: 15px 20px; border-radius: 12px; font-weight: 600; color: #1E293B; display: flex; align-items: center; gap: 12px; border: 1px solid #E2E8F0;">
          <span style="font-size: 1.3rem;">✅</span> Becas disponibles
        </li>
        <li style="background: #F8FAFC; padding: 15px 20px; border-radius: 12px; font-weight: 600; color: #1E293B; display: flex; align-items: center; gap: 12px; border: 1px solid #E2E8F0;">
          <span style="font-size: 1.3rem;">✅</span> Prácticas profesionales
        </li>
        <li style="background: #F8FAFC; padding: 15px 20px; border-radius: 12px; font-weight: 600; color: #1E293B; display: flex; align-items: center; gap: 12px; border: 1px solid #E2E8F0;">
          <span style="font-size: 1.3rem;">✅</span> Titulación asegurada
        </li>
        <li style="background: #F8FAFC; padding: 15px 20px; border-radius: 12px; font-weight: 600; color: #1E293B; display: flex; align-items: center; gap: 12px; border: 1px solid #E2E8F0;">
          <span style="font-size: 1.3rem;">✅</span> Bolsa de trabajo
        </li>
        
      </ul>
      
      <a href="admisiones.html" class="btn-naranja-gigante" style="background-color: #F26522; color: #FFFFFF; padding: 18px 45px; border-radius: 50px; text-decoration: none; font-weight: 800; font-size: 1.2rem; display: inline-block; box-shadow: 0 10px 25px rgba(242, 101, 34, 0.3);">
        Inicia tu proceso de admisión ➔
      </a>
      
      <p class="nota-chiquita" style="color: #94A3B8; font-size: 0.95rem; margin-top: 15px; font-weight: 500;">
        🔒 El proceso es 100% en línea
      </p>
      
    </div>
  </div>
</section>
<!--
<section class="reconocimientos-upm">
  <div class="contenedor-maximo">
    
    <h2 class="titulo-oscuro-centro">Reconocimientos y Alianzas</h2>
    
    <div class="grid-reconocimientos">
      <div class="card-reco">
        <div class="icono-reco">🏆</div>
        <h4>Acreditación CACEI</h4>
        <p>Programas de ingeniería acreditados</p>
      </div>
      <div class="card-reco">
        <div class="icono-reco">🌍</div>
        <h4>Movilidad Internacional</h4>
        <p>Convenios con universidades</p>
      </div>
      <div class="card-reco">
        <div class="icono-reco">🤝</div>
        <h4>Vinculación Empresarial</h4>
        <p>Alianzas con industria nacional</p>
      </div>
      <div class="card-reco">
        <div class="icono-reco">⭐</div>
        <h4>Calidad Educativa</h4>
        <p>Actualización de programs educativos</p>
      </div>
    </div>

    <h3 class="titulo-socios">Nuestros Socios Estratégicos</h3>
    
    <div class="grid-logos-socios">
      <div class="logo-socio"><img src="assets/img/logo-pemex.png" alt="PEMEX"></div>
      <div class="logo-socio"><img src="assets/img/logo-cfe.png" alt="CFE"></div>
      <div class="logo-socio"><img src="assets/img/logo-conafor.png" alt="CONAFOR"></div>
      <div class="logo-socio"><img src="assets/img/logo-sectur.png" alt="SECTUR"></div>
      <div class="logo-socio"><img src="assets/img/logo-texas.png" alt="Universidad de Texas"></div>
      <div class="logo-socio"><img src="assets/img/logo-tec.png" alt="TEC Monterrey"></div>
      <div class="logo-socio"><img src="assets/img/logo-salamanca.png" alt="Universidad de Salamanca"></div>
      <div class="logo-socio"><img src="assets/img/logo-anuies.png" alt="ANUIES"></div>
    </div>

  </div>
</section>
-->

</main>

<!-- ======================================
MICROSITIOS
====================================== -->

<section class="mundo-odo-upm">

    <!-- Micrositio -->

    <div class="micrositio-centro" style="margin-top:50px;">

        <a href="Micrositio.html" class="btn-micrositio-img">

            <div class="box-blanco shadow-machin">

                <img src="assets/img/micro.png" alt="Plataforma de Transparencia">

            </div>

        </a>

    </div>

</section>

<!--<div id="footer-container"></div>-->
<?php include 'footer.html'; ?>
<!-- =========================
        BOTÓN WHATSAPP
========================= -->
<a href="https://wa.me/529341347639?text=Hola%20quiero%20informes%20sobre%20las%20inscripciones"
class="whatsapp-float"
target="_blank">

<img src="assets/icon/whatsapp.png" alt="WhatsApp UPM">

</a>

<!-- JS -->
<script src="faq.js"></script>
<script src="js/cargar-componentes.js"></script>

</body>
</html>