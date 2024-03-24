@extends('layout.layout')

@section('title', 'Sobre')

@section('conteudo')


    <section class="site-hero overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(images/big_image_1.jpg);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-8 text-center">

                    <div class="mb-5 element-animate">
                        <!-- <img src="images/banner_text_1.png" alt="Image placeholder" class="img-md-fluid"> -->
                        <h1 class="mb-4">Sobre Nós</h1>
                        <p class="lead">Tradição e estilo se encontram na Royal Barber: onde cada corte é uma obra-prima.
                        </p>
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


    <section class="sobreNos">


        <div>
            <h1>Sobre nós</h1>
            <p> Há mais de três décadas, um jovem visionário de nome Edward Morgenstern teve um sonho: criar um espaço onde
                os homens pudessem não apenas cuidar de sua aparência, mas também encontrar camaradagem, conforto e
                confiança. Esse sonho se tornou realidade em 1989, quando Edward abriu as portas da Royal Barber pela
                primeira vez.<br>Localizada em um modesto espaço no centro da cidade, a Royal Barber rapidamente ganhou reputação como o
                local onde os cavalheiros mais exigentes encontravam serviços de qualidade inigualável. Com seu olhar afiado
                para cortes clássicos e seu compromisso inabalável com a excelência, Edward atraiu uma clientela fiel que
                vinha de todas as partes em busca de sua expertise.</p>
        </div>

        <div>

            <img src="{{ asset('images/sobre.jpeg') }}" alt="">

        </div>

    </section>


    <section class="site-section pb-5">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-8 text-center">
                    <h2>Equipe</h2>
                    <p class="lead">Conheça nossa equipe de talentosos barbeiros, dedicados a proporcionar a você o melhor
                        em cuidados com o cabelo e barba.</p>
                </div>
            </div>
            <div class="row element-animate">
                <div class="col-md-6 video-wrap mb-5">
                    <img src="images/img_5.jpg" alt="Imagem" class="img-fluid">
                </div>
                <div class="col-md-6 pl-md-5">
                    <h3>Jay Ramzee</h3>
                    <p class="lead">Barbeiro Especialista</p>
                    <p>Nascido para cortar cabelos, Jay traz consigo anos de experiência e paixão pela arte da barbearia.
                        Seu compromisso com a excelência garante que cada cliente saia da cadeira com um visual impecável e
                        renovado.</p>
                    <p>Quando não está transformando penteados, Jay gosta de passar seu tempo livre explorando novas
                        técnicas de corte e estilos, sempre buscando inovação e perfeição.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim da seção -->

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row element-animate">

                <div class="col-md-6 pl-md-5">
                    <h3>Chris Worth</h3>
                    <p class="lead">Barbeiro Especialista</p>
                    <p>Chris é apaixonado por cortes de cabelo desde muito jovem, e sua dedicação à arte da barbearia é
                        evidente em cada trabalho que realiza. Ele é conhecido por sua habilidade em entender as
                        preferências individuais de cada cliente e transformá-las em realidade.</p>
                    <p>Além de sua expertise em cortes clássicos e modernos, Chris é um mestre em cuidados com a barba,
                        fornecendo conselhos e produtos personalizados para garantir que sua barba esteja sempre no seu
                        melhor estado.</p>
                </div>

                <div class="col-md-6 video-wrap mb-5">
                    <img src="images/img_7.jpg" alt="Imagem" class="img-fluid">
                </div>

            </div>
        </div>
    </section>
    <!-- Fim da seção -->

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row element-animate">
                <div class="col-md-6 video-wrap mb-5">
                    <img src="images/img_8.jpg" alt="Imagem" class="img-fluid">
                </div>
                <div class="col-md-6 pl-md-5">
                    <h3>Dan Fisher</h3>
                    <p class="lead">Barbeiro Especialista</p>
                    <p>Com um olho aguçado para detalhes e uma paixão pela precisão, Dan é um barbeiro que supera as
                        expectativas de seus clientes. Ele combina habilidades tradicionais com as técnicas mais recentes
                        para oferecer cortes de cabelo e barba que impressionam.</p>
                    <p>Além de seu talento para a arte da barbearia, Dan é conhecido por sua personalidade acolhedora e
                        habilidade em criar um ambiente relaxante para seus clientes. Cada visita à sua cadeira é uma
                        experiência única e rejuvenescedora.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

@endsection
