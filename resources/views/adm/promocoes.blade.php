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
                <center>Consulta de Emails para Promoções</center>
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
                        <th scope="col">Emails</th>
                        <th scope="col" class="col-acoes">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $promocao): ?>
                    <tr>
                        <th>{{ $promocao->email }}</th>
                        <th class="col-acoes">
                            <form method="POST" action="/admin/promocoes">
                                @method('delete')
                                @csrf
                                <input type="hidden" name="id" value="{{ $promocao->id_promocao }}">
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
