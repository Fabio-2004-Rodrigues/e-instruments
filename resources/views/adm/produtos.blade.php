@extends('adm.main-adm')
@section('adm-content')
    <style>
        @media print {
            .col-acoes {
                display: none;
            }

            .imprecao {
                display: none;
            }

            footer {
                display: none;
            }
        }
    </style>


    <div style="margin: 100px">
        <div style="margin-bottom: 30px">
            <h2>
                <center>Consulta de Produtos</center>
            </h2>
        </div>
        <div class="row imprecao">
            <div class="col-3" style="margin-bottom: 20px">
                <button class="btn btn-primary" onclick="imprimir()">
                    Relatório
                </button>
            </div>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Fornecedor</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col" class="col-acoes">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['produtos'] as $produto): ?>
                    <tr>
                        <th>{{ $produto->id_produto }}</th>
                        <td>{{ $produto->nome_do_produto }}</td>
                        <td>{{ $produto->nome_da_empresa }}</td>
                        <td>{{ $produto->valor }}</td>
                        <td>{{ $produto->marca_do_produto }}</td>
                        <td>{{ $produto->categoria }}</td>
                        <td>{{ $produto->quantidade }}</td>
                        <th class="col-acoes">
                            <form method="POST" action="/admin/produtos">
                                @method('delete')
                                @csrf
                                <input type="hidden" name="id" value="{{ $produto->id_produto }}">
                                <input class="btn btn-danger" type="submit" value="Deletar">
                            </form>
                        </th>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <section style="text-align: right ; margin: -50px 50px 50px 0px">
        <input type='button' onclick="window.history.back();" value="Voltar" class="btn-tp " style="background-color: red">
    </section>
    <script>
        const imprimir = () => {
            print();
        }
        function Alertdelete() {
            swal({
                title: "Concluido",
                text: "Item deletado com sucesso",
                icon: "success",
            });
        }
    </script>
    <?php if(isset($_GET['deletado']) && $_GET['deletado'] == 'true'): ?>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
          Alertdelete();
        });
      </script>
    <?php endif; ?>
@endsection
