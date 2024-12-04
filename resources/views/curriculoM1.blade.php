<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        /* Estilo geral */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }

        /* Estilo para cabeçalho */
        h1 {
            text-align: center;
            margin-bottom: 1rem;
        }

        h5 {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        p {
            margin: 0.5rem 0;
        }

        .border-dark {
            border: 1px solid #000;
        }

        /* Estilo para as seções */
        .d-flex {
            display: flex;
        }

        .justify-content-center {
            justify-content: center;
        }

        .flex-column {
            flex-direction: column;
        }

        /* Margens e espaçamento */
        .mb-4 {
            margin-bottom: 1.5rem;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .m-0 {
            margin: 0;
        }

        .w-100 {
            width: 100%;
        }

        hr {
            border: 0;
            border-top: 2px solid #000;
        }

        ul {
            list-style-type: none;
            padding-left: 0;
        }

        li {
            margin-bottom: 0.5rem;
        }

    </style>
    <title>Curriculo</title>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center flex-column align-items-center">
            <h1 class="mb-2">{{ $dados['nome'] }}</h1>
        </div>
        <div>
            <h5>Dados Pessoais</h5>
            <hr class="my-4 border-dark w-100 mt-1 mb-0">
        </div>
        <div>
            <p class="m-0">Idade: {{ $dados['idade'] }}</p>
            <p class="m-0">Enereço: {{ $dados['endereco'] }}</p>
            <p class="m-0">Numero de contato: {{ $dados['numero'] }}</p>
            <p class="mb-2">Email de contato: {{ $dados['email'] }}</p>
        </div>
        <div class="d-flex flex-column justify-content-center">
            <h5>Objetivo</h5>
            <hr class="my-2 border-dark w-100 mt-1 mb-0">
            <p class="mb-2">{{ $dados['objetivo'] }}</p>
        </div>
        <div class="d-flex flex-column justify-content-center">
            <h5>Formação</h5>
            <hr class="my-4 border-dark w-100 mt-1 mb-0">
           <ul>
            <li>{{ $dados['nivel'] }}</li>
            <p class="mb-2">{{ $dados['ensino'] }}</p>
           </ul>
        </div>
        <div class="d-flex flex-column justify-content-center">
            <h5>Experiências Profissionais</h5>
            <hr class="my-4 border-dark w-100 mt-1 mb-0">
           <ul>
            <li>{{ $dados['empresa1'] }}</li>
            <p class="mb-0">cargo: {{ $dados['cargo1'] }}</p>
            <p class="mb-2">Período: {{ $dados['periodo1'] }}</p>
           <li>{{ $dados['empresa2'] }}</li>
            <p class="mb-0">cargo: {{ $dados['cargo2'] }}</p>
            <p class="mb-2">Período: {{ $dados['periodo2'] }}</p>
           <li>{{ $dados['empresa3'] }}</li>
            <p class="mb-0">cargo: {{ $dados['cargo3'] }}</p>
            <p class="mb-2">Período: {{ $dados['periodo3'] }}</p>
           </ul>
        </div>
        <div class="d-flex flex-column justify-content-center">
            <h5>Habilidades</h5>
            <hr class="my-4 border-dark w-100 mt-1 mb-0">
           <ul>
            <li>Habilidade</li>
           </ul>
        </div>
    </div>
</body>
</html>
