@extends('adm.main-adm')
@section('adm-content')
    <br>
    <h2>
        <center>Cadastro de Produtos</center>
    </h2>
    <section class="signup__area po-rel-z1 pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="sign__wrapper white-bg">
                        <div class="sign__form">
                            <form action="/admin/produtos" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Imagem do Produto</h5>
                                    <div class="sign__input">
                                        <input class="form-control" type="file" name="img_produto">
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Nome do Produto</h5>
                                    <div class="sign__input">
                                        <input class="form-control" type="text" name="nome_do_produto">
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Descrição</h5>
                                    <div class="sign__input">
                                        <textarea class="form-control" rows="5" type="text" name="descricao"></textarea>
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Nome do Fornecedor</h5>
                                    <div class="sign__input">
                                        <input class="form-control" type="text" name="nome_da_empresa">
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Valor</h5>
                                    <div class="sign__input">
                                        <input class="form-control" type="text" name="valor">
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Categoria</h5>
                                    <div class="sign__input">
                                        <input class="form-control" type="text" name="categoria">
                                    </div>
                                </div> 
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Mostrar em Destaques?</h5>
                                    <div class="sign__input">
                                        <select name="destaque" class="form-control">
                                            <option value="1" selected>Sim</option>
                                            <option value="0">Não</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Quantidade</h5>
                                    <div class="sign__input">
                                        <input class="form-control" type="text" name="quantidade">
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Marca do Produto</h5>
                                    <div class="sign__input">
                                        <input class="form-control" type="text" name="marca_do_produto">
                                    </div>
                                </div>
                                <button type="submit" onclick="Alertcreatepro()" class="btn-tp w-100">Salvar</button>
                                <br><br>
                                <input type='button' onclick="window.history.back();" value="Voltar" class="btn-tp w-100"
                                    style="background-color: red">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const imprimir = () => {
            print();
        }

        function Alertcreate() {
            swal({
                title: "Concluido",
                text: "Item criado com sucesso",
                icon: "success",
            });
        }
    </script>
    <?php if(isset($_GET['create']) && $_GET['create'] == 'true'): ?>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            Alertcreate();
        });
    </script>
    <?php endif; ?>
@endsection
