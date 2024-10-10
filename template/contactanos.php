<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Contacto</h2>
  <p>Contactanos</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-4">
      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
        <i class="bi bi-geo-alt flex-shrink-0"></i>
        <div>
          <h3>Ubicación</h3>
          <p>Villa del Rosario, Córdoba Argentina.</p>
        </div>
      </div><!-- End Info Item -->

      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
        <i class="bi bi-telephone flex-shrink-0"></i>
        <div>
          <h3>Telpefono</h3>
          <p>+54 9 3573-446559</p>
        </div>
      </div><!-- End Info Item -->

      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
        <i class="bi bi-envelope flex-shrink-0"></i>
        <div>
          <h3>Email</h3>
          <p>hola@lonkydev.com</p>
        </div>
      </div><!-- End Info Item -->

    </div>

    <div class="col-lg-8">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <form id="contact-form" action="contact.php" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Tu Nombre" required="">
          </div>

          <div class="col-md-6">
            <input type="email" class="form-control" name="email" placeholder="Tu Email" required="">
          </div>

          <div class="col-md-12">
            <input type="text" class="form-control" name="subject" placeholder="Asunto" required="">
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Mensaje" required=""></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading" style="display:none;">Loading</div>
            <div class="error-message" style="display:none;color:red;"></div>
            <div class="sent-message" style="display:none;color:green;">Tu mensaje ha sido enviado. ¡Gracias!</div>

            <button type="submit">Enviar Mensaje</button>
          </div>

        </div>
      </form>

      <script>
        $(document).ready(function() {
          $('#contact-form').submit(function(event) {
            event.preventDefault();
            $('.loading').show();

            $.ajax({
              url: 'contact.php',
              type: 'POST',
              data: $(this).serialize(),
              success: function(response) {
                $('.loading').hide();
                if (response.trim() === 'success') {
                  $('.sent-message').show();
                  $('#contact-form')[0].reset();
                } else {
                  $('.error-message').text('Error al enviar el mensaje. Inténtalo de nuevo.').show();
                }
              },
              error: function() {
                $('.loading').hide();
                $('.error-message').text('Hubo un error al enviar el mensaje.').show();
              }
            });
          });
        });
      </script>
    </div>


  </div>

</div>

</section><!-- /Contact Section -->