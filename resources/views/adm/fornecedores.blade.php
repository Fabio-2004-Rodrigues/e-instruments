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

            .btn-tp {
                display: none;
            }
        }
    </style>
    <div style="margin: 100px">
        <div style="margin-bottom: 30px">
            <h2>
                <center>Consulta de Fornecedores</center>
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
                        <th scope="col">CNPJ</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Razão Social</th>
                        <th scope="col">Incrição Estadual</th>
                        <th scope="col" class="col-acoes">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $fornecedor): ?>
                    <tr>
                        <th>{{ $fornecedor->id_fornecedor }}</th>
                        <td>{{ $fornecedor->nome_da_empresa }}</td>
                        <td>{{ $fornecedor->cnpj }}</td>
                        <td>{{ $fornecedor->telefone }}</td>
                        <td>{{ $fornecedor->email }}</td>
                        <td>{{ $fornecedor->razao_social }}</td>
                        <td>{{ $fornecedor->inscricao_estadual }}</td>
                        <th class="col-acoes">
                            <form method="POST" action="/admin/fornecedores">
                                @method('delete')
                                @csrf
                                <input type="hidden" name="id" value="{{ $fornecedor->id_fornecedor }}">
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
