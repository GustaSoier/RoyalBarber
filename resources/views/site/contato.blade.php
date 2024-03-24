@extends('layout.layout')

@section('title', 'Contato')

@section('conteudo')


    <section class="site-hero overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(images/bg-contato.jpeg);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-8 text-center">

                    <div class="mb-5 element-animate">
                        <h1 class="mb-4">Contate-nos</h1>
                        <p class="lead">Estamos aqui para ajudar! Entre em contato conosco para obter mais informações
                            sobre nossos serviços!</p>
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
                <div class="col-md-12">
                    <form action="{{ route('contato.enviar') }}" id="formContato" method="POST">
                        @csrf
                        <div class="row">

                            <div class="col-md-4 form-group">
                                <label for="name">Nome:</label>
                                <input type="text" id="nomeContato" name="nomeContato" class="form-control"
                                    id="nomeContato" value="{{ old('nomeContato') }}" required type="text">
                                <div id="nomeContatoError" class="error-mensagem"></div>
                            </div>


                            <div class="col-md-4 form-group">
                                <label for="phone">Telefone:</label>
                                <input type="text" id="" class="form-control" required type="tel"
                                    name="foneContato" id="foneContato" value="{{ old('foneContato') }}">
                                <div id="foneContatoError" class="error-mensagem"></div>
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="emailContato" name="emailContato"
                                    value="{{ old('foneContato') }}" class="form-control">
                                <div id="emailContatoError" class="error-mensagem"></div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">Escreva uma mensagem:</label>
                                <textarea name="mensContato" id="mensContato" class="form-control" value="{{ old('mensContato') }}" cols="30"
                                    rows="8"></textarea>
                                <di id="mensContato" class="error-mensagem"></di>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group-btn">
                                <input type="submit" value="Enviar" class="btn btn-primary" e-mail" class="btn-enviar"
                                    onclick="formContato(event)">
                                <div id="contatoMensagem" class="msgContato"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="section-cover cta" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
        <div class="container">
            <div class="row justify-content-center align-items-center intro">
                <div class="col-md-8 text-center element-animate">
                    <h2 class="mb-4"><span>Agende um Corte de Cabelo Hoje e</span> Ganhe 25% de desconto</h2>
                    <p><a href="#" class="btn btn-black">Agende Agora</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->


@endsection
