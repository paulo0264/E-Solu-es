@extends('layouts.app')

@section('content')

    <section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SOLUÇÕES</h1>
                                    <h2>CMS E-commerce de Qualidade</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Cadastrar Produto</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ url ('assets/images/home/girl1.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{ url ('assets/images/home/pricing.png')}}" class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SOLUÇÕES</h1>
                                    <h2>100% Responsive Design</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Cadastrar Produto</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ url ('assets/images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{ url ('assets/images/home/pricing.png" class="pricing')}}" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SOLUÇÕES</h1>
                                    <h2>Um novo modelo de comercio Online</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Cadastrar Produto</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ url ('assets/images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{ url ('assets/images/home/pricing.png')}}" class="pricing" alt="" />
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <!--/
                        <h2>Categorias</h2>
                        <div class="panel-group category-products" id="accordian">
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Eletros
                                        </a>
                                    </h4>
                                </div>
                                <div id="sportswear" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Nike </a></li>
                                            <li><a href="#">Under Armour </a></li>
                                            <li><a href="#">Adidas </a></li>
                                            <li><a href="#">Puma</a></li>
                                            <li><a href="#">ASICS </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Homen
                                        </a>
                                    </h4>
                                </div>
                                <div id="mens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Fendi</a></li>
                                            <li><a href="#">Guess</a></li>
                                            <li><a href="#">Valentino</a></li>
                                            <li><a href="#">Dior</a></li>
                                            <li><a href="#">Versace</a></li>
                                            <li><a href="#">Armani</a></li>
                                            <li><a href="#">Prada</a></li>
                                            <li><a href="#">Dolce and Gabbana</a></li>
                                            <li><a href="#">Chanel</a></li>
                                            <li><a href="#">Gucci</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Mulher
                                        </a>
                                    </h4>
                                </div>
                                <div id="womens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Fendi</a></li>
                                            <li><a href="#">Guess</a></li>
                                            <li><a href="#">Valentino</a></li>
                                            <li><a href="#">Dior</a></li>
                                            <li><a href="#">Versace</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        category-products-->

                        <!--/
                        <div class="brands_products">
                            
                            <h2>Marcas</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right">(50)</span>Puma</a></li>
                                    <li><a href="#"> <span class="pull-right">(56)</span>Nike</a></li>
                                    <li><a href="#"> <span class="pull-right">(27)</span>Lacoste</a></li>
                                    <li><a href="#"> <span class="pull-right">(32)</span>Boss</a></li>
                                </ul>
                            </div>
                        </div>
                        brands_products-->

                        <!--/
                        <div class="price-range">
                            
                            <h2>Faixa de Preço</h2>
                            <div class="well text-center">
                                <input type="text" class="span2" value="" data-slider-min="0"
                                    data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]"
                                    id="sl2"><br />
                                <b class="pull-left">R$ 0</b> <b class="pull-right">R$ 600</b>
                            </div>
                        </div>
                        price-range-->
                        <!--/
                        <div class="shipping text-center">
                            
                            <img src="images/home/shipping.jpg" alt="" />
                        </div>
                        shipping-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        
                            
                       
                        <h2 class="title text-center">Itens</h2>
                        @foreach($results as $array)
                    
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ $array['imagem'] }}" alt="" />
                                        <h2>R$ {{ $array['valor'] }}</h2>
                                        <p>{{ $array['descricao'] }}</p>
                                        <p>Unidades {{ $array['quantidade'] }}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Comprar</a>
                                    </div>
                                    <div class="product-overlay">
                                    
                                        <div class="overlay-content">
                                        <div class="productinfo text-center">
                                            <img src="{{ $array['imagem'] }}" alt="" />
                                            <h2>R$ {{ $array['valor'] }}</h2>
                                            <p>{{ $array['descricao'] }}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Comprar</a>
                                                    </div>      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                        

                    </div>
                    <!--features_items-->

                    <div class="category-tab">
                        <!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tshirt" data-toggle="tab">Camisa</a></li>
                                <li><a href="#blazers" data-toggle="tab">Blazers</a></li>
                                <li><a href="#sunglass" data-toggle="tab">Saias</a></li>
                                <li><a href="#kids" data-toggle="tab">Calça</a></li>
                                <li><a href="#poloshirt" data-toggle="tab">Eletro</a></li>
                            </ul>
                        </div>
                        @foreach($results as $array)
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="tshirt">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{ $array['imagem'] }}" alt="" />
                                                <h2>R$ "{{ $array['valor'] }}"</h2>
                                                <p>"{{ $array['descricao'] }}"</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--/category-tab-->
                    
                    {{-- <div class="recommended_items">
                        <!--recommended_items-->
                        <h2 class="title text-center">Itens Recomendados</h2>

                        
                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            
                            <div class="carousel-inner">
                                <div class="item active">
                                    @foreach($results as $array)
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                
                                                <div class="productinfo text-center">
                                                    <img src="{{ $array['imagem'] }}" alt="" />
                                                    <h2>R$ "{{ $array['valor'] }}"</h2>
                                                    <p>"{{ $array['descricao'] }}"</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i
                                                            class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                           
                            <a class="left recommended-item-control" href="#recommended-item-carousel"
                                data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right recommended-item-control" href="#recommended-item-carousel"
                                data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                            
                        </div>
                        
                    </div> --}}
                    
                    <!--/recommended_items-->
                    
                </div>
            </div>
        </div>
    </section>
@endsection


