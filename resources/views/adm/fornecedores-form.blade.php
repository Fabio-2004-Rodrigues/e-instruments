@extends('adm.main-adm')
@section('adm-content')

    <body>
        <br>
        <h2>
            <center>Cadastro de Fornecedor</center>
        </h2>
        <section class="signup__area po-rel-z1 pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="sign__wrapper white-bg">
                            <form action="/admin/fornecedores" method="POST">
                                @csrf
                                <div class="sign__form">
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>Nome da Empresa</h5>
                                        <div class="sign__input">
                                            <input type="text" class="form-control" name="nome_da_empresa">
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>Razão Social</h5>
                                        <div class="sign__input">
                                            <input type="text" class="form-control" name="razao_social">
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>Endereço</h5>
                                        <div class="sign__input">
                                            <input type="text" class="form-control" name="endereco">
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>CNPJ</h5>
                                        <div class="sign__input">
                                            <input type="text" class="form-control" name="cnpj">
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>Telefone</h5>
                                        <div class="sign__input">
                                            <input type="bigint" class="form-control" name="telefone">
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>Email</h5>
                                        <div class="sign__input">
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>Inscrição Estadual</h5>
                                        <div class="sign__input">
                                            <input type="text" name="inscricao_estadual" class=" form-control">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-tp w-100">Salvar</button>
                                    <br><br>
                                    <input type='button' onclick="window.history.back();" value="Voltar"
                                        class="btn-tp w-100" style="background-color: red">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
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
