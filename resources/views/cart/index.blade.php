@extends('layout.main')
@section('content')
    <main>
        <!-- cart-area start -->
        <section class="cart-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Imagem</th>
                                        <th class="cart-product-name">Produto</th>
                                        <th class="product-quantity">Categoria</th>
                                        <th class="product-subtotal">Preço</th>
                                        <th class="product-remove">Remover</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['produtos'] as $produto)
                                        <tr>
                                            <td class="product-thumbnail"><a href="product-details.html"><img
                                                        src="{{ asset($produto->img_produto) }}" alt=""></a>
                                            </td>
                                            <td class="product-name">{{ $produto->nome_do_produto }}<a
                                                    href="product-details.html"></a></td>
                                            <td class="product-quantity">{{ $produto->categoria }}</td>
                                            <td class="product-subtotal"><span class="amount"> R$
                                                    {{ $produto->valor }}</span></td>
                                            <td class="product-remove">
                                                <form action="/cart/destroy" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="produto_id"
                                                        value="{{ $produto->id_produto }}">
                                                    <button type="submit"><i class="fa fa-times"></i></button>
                                                </form>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-5">
                                <div class="cart-page-total">
                                    <h2>Preço Total</h2>
                                    <ul class="mb-20">
                                        <li>Total <span>R$ {{ $data['total_carrinho'] }}</span></li>
                                    </ul>
                                    <a class="btn-tp-2" href="/pages/chekout">Ir para Pagamento</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart-area end -->
    </main>
@endsection
