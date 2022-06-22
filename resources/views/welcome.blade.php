<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Todo - List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
        <link rel="stylesheet" href=" {{ URL::asset ('css/app.css') }} ">
    </head>

    <body>
        <div class="container-main">
            <div class="container">
                <input type="text" id="inputnovaTarefa"placeholder="adicione uma nova tarefa">
                <button id="addTarefa">
                    <i class="fa fa-plus"></i>
                </button>
            </div>

            <ul id="listadeTarefas">
                <li>
                    <span id="textoTarefa">
                        Tarefa 1
                    </span>
                    <div>
                        <button id="btnAcao">
                            <i class="fa fa-pencil"></i>
                        </button>
                        <button id="btnAcao">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                </li>
            </ul>
        </div>