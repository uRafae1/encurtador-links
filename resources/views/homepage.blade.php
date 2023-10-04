@extends('layouts.app')

@section('content')
    <div class="hero" style="background-color: #efefef;">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center">
            <h1 class="heading" data-aos="fade-up" style="color: #005555 !important;">
              Encurtador de links e gerador de QR Codes!
            </h1>
            <form
              action="#"
              class="narrow-w form-search d-flex align-items-stretch mb-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <input
                type="text"
                class="form-control px-4"
                placeholder="Seu link para ser encurtado"
                style="border: solid 1px #005555;"
              />
              <button type="submit" class="btn btn-primary">Encurtar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="site-footer" style="border-top: solid 1px #005555;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="widget">
              <h3>Email para contato</h3>
              <ul class="list-unstyled links">
                <li>
                  <a href="mailto:sousaifrafael@gmail.com">sousaifrafael@gmail.com</a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>Informações do projeto</h3>
              <p> Trabalho feito para a disciplina de Desenvolvimento Web II, 
                  do Instituto Federal de Educação, Ciência e Tecnologia de Minas Gerais, Campus Formiga.
              </p>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>Links</h3>
              <ul class="list-unstyled links">
                <li><a href="https://laravel.com">Laravel</a></li>
                <li><a href="https://getbootstrap.com">Bootstrap</a></li>
                <li><a href="https://www.linkedin.com/in/rafael-sousa-7a5392261/">Linkedin</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->

        <div class="row mt-5">
          <div class="col-12 text-center">
            <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              . Todos os direitos reservados. &mdash; Projetado com amor por
              <a href="https://untree.co">Untree.co</a>
              <!-- License information: https://untree.co/license/ -->
            </p>
            <div>
              Feito por Rafael André de Sousa
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
@endsection