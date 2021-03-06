<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Todo - List</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link rel="stylesheet" href=" {{ URL::asset ('css/app.css') }} ">
</head>

<style>
body {
    background: rgb(7, 83, 175);
    color: #FFF;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1rem;
}

.conteudo {
    margin: 0 auto;
    width: 100%;
    ;
    max-width: 450px;
    margin-top: 50px;
    margin-bottom: 50px;
    background: #18a2c5;
    padding: 55px;
    border-radius: 12px;
}

.topo {
    display: flex;
    justify-content: space-between;
    margin-bottom: 35px;
}

.topo input {
    width: 350px;
    padding: 15px;
    border-radius: 12px;
    border: 1px solid #191817;
    outline: none;
    font-size: 1.2rem;
    background: #005;
    color: #FFF;
}

.topo button {
    width: 45px;
    border-radius: 12px;
    border: 1px solid #005990;
    background: #005990;
    color: #FFF;
    outline: none;
}

.topo button:hover {
    background: #1f1e1e;
    cursor: pointer;
}

#listaTarefas {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

#listaTarefas li {
    padding: 20px;
    background: #191818;
    border-radius: 12px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
}

.btnAcao {
    border-radius: 20px;
    border: 1px solid #191818;
    width: 38px;
    height: 38px;
    margin-right: 8px;
    cursor: pointer;
    background: #2b2a2a;
    color: #FFF;
    outline: none;
}

.btnAcao:hover {
    background: #3c3a3a;
}

.textoTarefa {
    overflow: hidden;
    text-overflow: ellipsis;
    width: 290px;
    white-space: nowrap;
}

#janelaEdicao {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    background: #191818;
    border: 1px solid #2f2e2e;
    width: 415px;
    border-radius: 12px;
    z-index: 200;
    display: none;
}

#janelaEdicao.abrir {
    display: block !important;
}

#janelaEdicaoFundo {
    position: fixed;
    top: 0;
    background-color: #000;
    bottom: 0;
    left: 0;
    opacity: 0.9;
    z-index: 100;
    right: 0;
    display: none;
}

#janelaEdicaoFundo.abrir {
    display: block !important;
}

#janelaEdicaoBtnFechar {
    position: absolute;
    top: -25px;
    right: -18px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 1px solid #2d2c2c;
    background: #2d2c2c;
    color: #FFF;
    outline: none;
}

form {
    width: 100%;
    margin-top: 20px;
}

.frm-linha {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
}

.frm-linha label {
    margin-bottom: 7px;
}

.frm-linha input {
    padding: 15px;
    border-radius: 12px;
    outline: none;
    border: 1px solid #191818;
    font-size: 1.2rem;
    background: #2d2c2c;
    color: #FFF;
}

.frm-linha button {
    background: #2d2c2c;
    border: 1px solid #191818;
    padding: 7px;
    margin-bottom: 10px;
    border-radius: 12px;
    color: #CCC;
    cursor: pointer;
    height: 50px;
    font-size: 1.3rem;
    outline: none;
}

.frm-linha button:hover {
    background: #3c3a3a;
}
</style>


<body>

    <div class="conteudo">
        <div class="topo">
            <input type="text" id="inputNovaTarefa" placeholder="Adicione uma nova tarefa">
            <button id="btnAddTarefa">
                <i class="fa fa-plus"></i>
            </button>
        </div>

        <ul id="listaTarefas">
        </ul>
    </div>

    <div id="janelaEdicao">
        <button id="janelaEdicaoBtnFechar">
            <i class="fa fa-remove fa-2x"></i>
        </button>
        <h2 id="idTarefaEdicao">#1021</h2>
        <hr>
        <form>
            <div class="frm-linha">
                <label for="nome">Nome</label>
                <input type="text" id="inputTarefaNomeEdicao">
            </div>
            <div class="frm-linha">
                <button id="btnAtualizarTarefa">Salvar</button>
            </div>
        </form>
    </div>
    <div id="janelaEdicaoFundo"></div>

    <script src="js/tarefas.js"></script>
</body>

</html>