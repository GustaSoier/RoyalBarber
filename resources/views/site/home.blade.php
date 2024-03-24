@extends('layout.layout')

@section('title', 'Home')

@section('conteudo')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(images/banner.jpeg); background-position: 0;">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-8 text-center">

                    <div class="mb-5 element-animate">
                        <img src="images/logo-royalbarberBRANCO.png" alt="Image placeholder" class="img-md-fluid">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="quick-info element-animate" data-animate-effect="fadeInLeft">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 bgcolor">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="media">
                                <div class="mr-3 icon-wrap"><span class="icon ion-ios-telephone"></span></div>
                                <div class="media-body">
                                    <h5>11 951694143</h5>
                                    <p>Nos ligue 24/7, responderemos o mais rápido possível</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="media">
                                <div class="mr-3 icon-wrap"><span class="icon ion-location"></span></div>
                                <div class="media-body">
                                    <h5>Avenida Marechal Tito, 1500</h5>
                                    <p>São Paulo, São Paulo <br> CEP 08010-090 - Brasil</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="media">
                                <div class="mr-3 icon-wrap"><span class="icon ion-android-time"></span></div>
                                <div class="media-body">
                                    <h5>Diariamente: 8h - 22h</h5>
                                    <p>Segunda a Sábado <br> Domingo: Fechado</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END section -->


    <section class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pr-5">

                    <h2 class="mb-3">Serviços</h2>
                    <p class="mb-5"> Nossos especialistas estão aqui para oferecer cortes precisos, tratamentos
                        revitalizantes e uma dose extra de confiança.</p>

                    <div class="mb-3 custom-nav">
                        <a href="#" class="btn btn-primary btn-sm custom-prev mr-2 mb-2"><span
                                class="ion-android-arrow-back"></span></a>
                        <a href="#" class="btn btn-primary btn-sm custom-next mr-2 mb-2"><span
                                class="ion-android-arrow-forward"></span></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 slider-wrap">
                            <div class="owl-carousel owl-theme no-nav js-carousel-1">

                                <a href="#" class="img-bg" style="background-image: url('images/img_2.jpg')">
                                    <div class="text">
                                        <span class="icon custom-icon flaticon-scissors"></span>
                                        <h2>Corte de Cabelo Masculino</h2>
                                        <p>Ler mais</p>
                                    </div>
                                </a>

                                <a href="#" class="img-bg" style="background-image: url('images/img_1.jpg')">
                                    <div class="text">
                                        <span class="icon custom-icon flaticon-scissors"></span>
                                        <h2>Corte de Barba</h2>
                                        <p>Ler mais</p>
                                    </div>
                                </a>

                                <a href="#" class="img-bg last" style="background-image: url('images/img_3.jpeg')">
                                    <div class="text">
                                        <span class="icon custom-icon flaticon-scissors"></span>
                                        <h2>Corte de Cabelo e Barba</h2>
                                        <p>ler mais</p>
                                    </div>
                                </a>

                                <a href="#" class="img-bg" style="background-image: url('images/img_2.jpg')">
                                    <div class="text">
                                        <span class="icon custom-icon flaticon-scissors"></span>
                                        <h2>Design de Barba</h2>
                                        <p>Ler mais</p>
                                    </div>
                                </a>

                                <a href="#" class="img-bg" style="background-image: url('images/img_1.jpg')">
                                    <div class="text">
                                        <span class="icon custom-icon flaticon-scissors"></span>
                                        <h2>Tratamento Capilar (hidratação, nutrição, reconstrução)</h2>
                                        <p>Ler mais</p>
                                    </div>
                                </a>

                                <a href="#" class="img-bg last" style="background-image: url('images/img_3.jpeg')">
                                    <div class="text">
                                        <span class="icon custom-icon flaticon-scissors"></span>
                                        <h2>Coloração de Barba e Cabelo</h2>
                                        <p>Ler mais</p>
                                    </div>
                                </a>
                                <a href="#" class="img-bg" style="background-image: url('images/img_2.jpg')">
                                    <div class="text">
                                        <span class="icon custom-icon flaticon-scissors"></span>
                                        <h2>Tratamento Antiqueda de Cabelo</h2>
                                        <p>Ler mais</p>
                                    </div>
                                </a>

                                <a href="#" class="img-bg" style="background-image: url('images/img_1.jpg')">
                                    <div class="text">
                                        <span class="icon custom-icon flaticon-scissors"></span>
                                        <h2>Barbear Clássico com Toalhas Quentes</h2>
                                        <p>Ler mais</p>
                                    </div>
                                </a>

                                <a href="#" class="img-bg last" style="background-image: url('images/img_3.jpeg')">
                                    <div class="text">
                                        <span class="icon custom-icon flaticon-scissors"></span>
                                        <h2>Tratamento de Couro Cabeludo</h2>
                                        <p>Ler mais</p>
                                    </div>
                                </a>
                                <a href="#" class="img-bg" style="background-image: url('images/img_2.jpg')">
                                    <div class="text">
                                        <span class="icon custom-icon flaticon-scissors"></span>
                                        <h2>Acabamento e Contorno de Barba</h2>
                                        <p>Ler mais</p>
                                    </div>
                                </a>

                                <a href="#" class="img-bg" style="background-image: url('images/img_1.jpg')">
                                    <div class="text">
                                        <span class="icon custom-icon flaticon-scissors"></span>
                                        <h2>Tratamento de Relaxamento Capilar</h2>
                                        <p>Ler mais</p>
                                    </div>
                                </a>

                                <a href="#" class="img-bg last" style="background-image: url('images/img_3.jpeg')">
                                    <div class="text">
                                        <span class="icon custom-icon flaticon-scissors"></span>
                                        <h2>Estilo e Modelagem de Cabelo</h2>
                                        <p>Ler mais</p>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2>Recursos da Barbearia</h2>
                    <p>Descubra nossos principais recursos e como eles podem melhorar sua experiência conosco. Oferecemos
                        serviços de alta qualidade para garantir que você saia sempre satisfeito.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">


                    <div class="media d-block media-feature text-center">
                        <div class="mr-3 icon-wrap"><span class="custom-icon flaticon-scissors-1"></span></div>
                        <div class="media-body">
                            <h3>Barba e Corte de Cabelo</h3>
                            <p>Desfrute de um serviço completo de barbearia, que inclui um corte de cabelo personalizado e
                                um barbear profissional para manter seu visual sempre impecável.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="media d-block media-feature text-center">
                        <div class="mr-3 icon-wrap"><span class="custom-icon flaticon-cream"></span></div>
                        <div class="media-body">
                            <h3>Creme &amp; Shampoo</h3>
                            <p>Relaxe enquanto cuidamos do seu cabelo com produtos de alta qualidade. Nosso serviço de creme
                                e shampoo deixará seu cabelo limpo, macio e revitalizado.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="media d-block media-feature text-center">
                      <div class="mr-3 icon-wrap"><span class="custom-icon flaticon-moustache"></span></div>
                      <div class="media-body">
                        <h3>Especialista em Bigode</h3>
                        <p>Confie em nossos especialistas para cuidar do seu bigode com maestria. Deixe-nos ajudá-lo a encontrar o estilo perfeito e mantê-lo sempre impecável.</p>
                      </div>
                    </div>
                </div>


            <div class="row">
                <div class="col-md-4">

                    <div class="media d-block media-feature text-center">
                        <div class="mr-3 icon-wrap"><span class="custom-icon flaticon-scissors"></span></div>
                        <div class="media-body">
                          <h3>Estilista de Corte de Cabelo</h3>
                          <p>Nossos estilistas são especialistas em cortes de cabelo personalizados para atender às suas necessidades e estilo. Confie em nós para proporcionar uma experiência de corte de cabelo excepcional.</p>
                        </div>
                      </div>
                </div>

                <div class="col-md-4">
                    <div class="media d-block media-feature text-center">
                      <div class="mr-3 icon-wrap"><span class="custom-icon flaticon-razor"></span></div>
                      <div class="media-body">
                        <h3>Lâmina para Barbas</h3>
                        <p>Experimente o conforto e a precisão de uma lâmina de barbear profissional. Nossos especialistas garantem um barbear suave e preciso para manter sua barba sempre em ordem.</p>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-4">
                    <div class="media d-block media-feature text-center">
                      <div class="mr-3 icon-wrap"><span class="custom-icon flaticon-hair-comb"></span></div>
                      <div class="media-body">
                        <h3>Pente para Cabelo</h3>
                        <p>Desembarace e modele seu cabelo com facilidade usando nosso pente profissional. Tenha um cabelo sempre arrumado e com um aspecto impecável.</p>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="section-cover cta" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpeg); background-position: 0;">
        <div class="container">
          <div class="row justify-content-center align-items-center intro">
            <div class="col-md-8 text-center element-animate">
              <h2 class="mb-4"><span>Agende um Corte de Cabelo Hoje e</span> Ganhe 25% de Desconto</h2>
              <p><a href="{{ url('/contato') }}" class="btn btn-black">Agende Agora</a></p>
            </div>
          </div>
        </div>
      </section>

    <!-- END section -->

    <section class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 video-wrap mb-5">
                <img src="images/img_5.jpeg" alt="Image placeholder" class="img-fluid">
              <a href="https://www.youtube.com/watch?v=z4BK08pYQE8" class="popup-vimeo btn-video"><span class="fa fa-play"></span></a>
            </div>
            <div class="col-md-6 pl-md-5">
              <h3>Estilo que Inspira Confiança</h3>
              <p class="lead">Comece conosco hoje mesmo</p>
              <p>Na nossa barbearia, oferecemos mais do que apenas cortes de cabelo, oferecemos uma experiência que inspira confiança e estilo. Nossos cabeleireiros profissionais estão prontos para criar o visual perfeito que combina com você.</p>
              <p>Além disso, oferecemos serviços exclusivos de barbearia, como tratamentos de barba e estilização, garantindo que você saia daqui não apenas com um novo visual, mas também com uma dose extra de confiança.</p>
            </div>
          </div>
        </div>
      </section>

    <!-- END section -->

@endsection
