import 'https://unpkg.com/sweetalert/dist/sweetalert.min.js';

function Alertdelete() {
    swal({
        title: "Você tem certeza?",
        text: "Uma vez excluido, você não poderá ter esses dados novamente.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                swal("Os dados foram deletados.", {
                    icon: "success",
                });
            } else {
                swal("Os dados não foram deletados.");
            }
        });
}

function Alertcreatepro() {
    swal({
        title: "Concluido",
        text: "Produto Criado com Sucesso",
        icon: "success",
    });
}

function Alertcreateforn() {
    swal({
        title: "Concluido",
        text: "Fornecedor criado com sucesso",
        icon: "success",
    });
}

function Alertcreatecli() {
    swal({
        title: "Parabéns",
        text: "Seu cadastro foi efetuado com sucesso !!!",
        icon: "success",
    });
}

function Alertlogin() {
    swal({
        title: "Parabéns",
        text: "Seu login foi efetuado com sucesso !!!",
        icon: "success",
    });
}