<?php wp_footer(); ?>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="single-box">
          <a href="index.html">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-koji.png" style="max-width: 40px; height: auto;" alt="EcoAventureiros">
          </a>
          <p>Projeto criado por Kojima. Juntos, por experiências que vão além da realidade!</p>

          <div class="social-icons">
            <a href="#" target="_blank" class="text-white mx-2">
              <i class="bi bi-facebook" style="font-size: 1.5rem;"></i>
            </a>
            <a href="#" target="_blank" class="text-white mx-2">
              <i class="bi bi-instagram" style="font-size: 1.5rem;"></i>
            </a>
            <a href="#" target="_blank" class="text-white mx-2">
              <i class="bi bi-github" style="font-size: 1.5rem;"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="single-box">
          <h5>Mapa do Site</h5>
          <ul class="footer-nav">
            <li><a class="footer-nav-link" href="index.html">Página Inicial</a></li>
            <li><a class="footer-nav-link" href="experiencia.html">Experiência Sonora</a></li>
            <li><a class="footer-nav-link" href="sobre.html">Quem Somos</a></li>
            <li><a class="footer-nav-link" href="contato.html">Contato</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="single-box">
          <h5>Destaques</h5>
          <ul class="footer-nav">
            <li><a class="footer-nav-link" href="#">Trilhas Icônicas</a></li>
            <li><a class="footer-nav-link" href="#">Momentos Memoráveis</a></li>
            <li><a class="footer-nav-link" href="#">Universo Kojima</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="single-box text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-koji.png" class="d-block w-100" alt="EcoAventureiros">
        </div>
        </div>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p id="copyright" class="w-100 text-center">
        &copy; <?php echo date("Y"); ?> Kojimamusics. Todos os direitos reservados.
      </p>
    </div>
  </div>
</footer>

<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

<script src="index.js"></script>
</body>
</html>
