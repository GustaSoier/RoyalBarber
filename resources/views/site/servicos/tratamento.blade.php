@extends('layout.layout')

@section('title', 'Tratamentos')

@section('conteudo')


    <section class="site-hero overlay" data-stellar-background-ratio="0.5"
        style="background: url(../images/banners/barbas.svg);max-width:1920px;">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-8 text-center">

                    <div class="mb-5 element-animate">
                        <!-- <img src="images/banner_text_1.png" alt="Image placeholder" class="img-md-fluid"> -->
                        <h1 class="mb-4">Tratamentos</h1>
                        <p class="lead">Relaxe e Renove-se: Descubra Nossos Tratamentos Exclusivos para Homens na Nossa Barbearia!</p>
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


    <section class="site-section pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 video-wrap mb-5">
                    <img src="../images/tratamentos/tratamentoFacial.png" alt="Image placeholder" class="img-fluid">
                </div>
                <div class="col-md-6 pl-md-5">
                    <h3>Tratamento Facial Masculino</h3>
                    <p class="lead">Um tratamento revigorante para sua barba</p>
                    <p>Começamos com a aplicação de uma toalha quente para abrir os poros e suavizar os pelos da barba,
                        seguida por um corte e modelagem precisos para garantir uma aparência impecável. Finalizamos com um
                        tratamento de óleo de barba para hidratar e condicionar, deixando sua barba com uma sensação suave e
                        saudável.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 video-wrap mb-5">
                    <img src="../images/tratamentos/tratamentoCabelo.png" alt="Image placeholder" class="img-fluid">
                </div>
                <div class="col-md-6 pl-md-5">
                    <h3>Tratamento de Couro Cabeludo e Cabelo</h3>
                    <p class="lead">Para um visual moderno e elegante</p>
                    <p>Este serviço é ideal para homens que desejam uma aparência sofisticada e bem cuidada. A técnica de fade na barba garante uma transição suave de comprimentos, criando um visual elegante e uniforme que é facilmente mantido entre os cortes.</p>
                  </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 video-wrap mb-5">
                    <img src="../images/tratamentos/relaxamento.png" alt="Image placeholder" class="img-fluid">
                </div>
                <div class="col-md-6 pl-md-5">
                    <h3>Tratamento de Relaxamento e Bem-Estar</h3>
                    <p class="lead">Para uma aparência nítida e definida</p>
                    <p>Um serviço clássico de modelagem e aparagem da barba, realizado com tesoura e navalha para proporcionar um acabamento impecável e personalizado de acordo com as preferências do cliente.</p>
                  </div>
            </div>
        </div>
    </section>
    <!-- END section -->




@endsection
