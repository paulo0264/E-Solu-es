@extends('layouts.app')

@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/">Inicio</a></li>
                    <li class="active">Itens adicionados</li>
                </ol>
            </div>
            @if (isset($apiArray) && count($apiArray) > 0)
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Preço</td>
                            <td class="quantity">Quantidade</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($apiArray as $indice => $p)
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="images/cart/one.png" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">Colorblock Scuba</a></h4>
                                <p>{{ $p->nome }}</p>
                            </td>
                            <td class="cart_price">
                                <p>R$59</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1"
                                        autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">R$59</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>    
            </div>
            <div class="pag">
                <button type="button" class="btn btn-success">Finalizar Pagamento</button>
            </div>
        </div>
    </section>
    @else
        <h2 class="title text-center">Nenhum item no carrinho</h2>
    @endif
    <!--/#cart_items-->
@endsection
