<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Servicios</h2>
  <p>Descubre nuestras soluciones en desarrollo web adaptadas a las necesidades de tu negocio.</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">

    <?php
    // Array de servicios con sus datos
    $servicios = [
      [
        "nombre" => "Página Web Corporativa",
        "descripcion" => "Diseño profesional y personalizado para tu empresa, ideal para presentar servicios y obtener contacto directo con tus clientes.",
        "icono" => "bi bi-laptop",
        "color" => "#0dcaf0"
      ],
      [
        "nombre" => "Tienda Online Básica",
        "descripcion" => "Solución rápida basada en plantillas predefinidas. Tu tienda estará lista en 10 días hábiles para empezar a vender online.",
        "icono" => "bi bi-cash-stack",
        "color" => "#fd7e14"
      ],
      [
        "nombre" => "Tienda Online a Medida",
        "descripcion" => "Desarrollo de una tienda online completamente personalizada, adaptada a tus productos, branding, y necesidades comerciales.",
        "icono" => "bi bi-cart-check",
        "color" => "#20c997"
      ],
      [
        "nombre" => "Redes Sociales",
        "descripcion" => "Manejo de redes sociales, creación de contenido.",
        "icono" => "bi bi-globe",
        "color" => "#20c997"
      ]
    ];

    // Generar el HTML dinámico para cada servicio
    foreach ($servicios as $index => $servicio):
    ?>
      <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="<?= ($index + 1) * 100 ?>">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="<?= $servicio['icono'] ?>" style="color: <?= $servicio['color'] ?>;"></i>
          </div>
          <a href="https://wa.me/5493573451066?text=Hola%20quiero%20más%20información%20sobre%20<?= urlencode($servicio['nombre']) ?>" class="stretched-link" target="_blank">
            <h3><?= $servicio['nombre'] ?></h3>
          </a>
          <p><?= $servicio['descripcion'] ?></p>
        </div>
      </div><!-- End Service Item -->
    <?php endforeach; ?>

  </div>

</div>
