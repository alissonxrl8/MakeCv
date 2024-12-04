<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <nav class="nav d-flex justify-content-center align-items-center bg-dark">
        <h4 class="text-white p-3">Make You CV</h4>

        <div class="bg-white h-50 p-1">
            
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-body-text" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 0 .5m0 2A.5.5 0 0 1 .5 2h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m9 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-9 2A.5.5 0 0 1 .5 4h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m5 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m7 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-12 2A.5.5 0 0 1 .5 6h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-8 2A.5.5 0 0 1 .5 8h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m7 0a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-7 2a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5"/>
              </svg>
        </div>
        
    </nav>
    <div class="container">
        <form action="{{route('makecv.viewCv')}}" method="post">
            @csrf
            <div class="mb-5 d-flex flex-column align-items-center justify-content-center">
                <h3 class="m-4 text-primary">Preencha os dados do seu curriculo:</h3>
                <div class="w-50">
                    <h5>Dados Pessoais:</h5>
                </div>
                <div class="d-flex flex-column w-50  mb-4">
                    <label for="name">Nome Completo:</label>
                    <input class="rounded form-control" type="text" name="nome">
                </div>
                <div class="d-flex flex-column w-50  mb-4">
                    <label for="idade">Idade:</label>
                    <input class="rounded form-control" type="text" name="idade">
                </div>
                <div class="d-flex flex-column w-50 mb-4">
                    <label for="endereco">Endereço:</label>
                    <input class="rounded form-control" type="text" name="endereco">
                </div>
                <div class="d-flex flex-column w-50 mb-4">
                    <label for="cidade">Cidade:</label>
                    <input class="rounded form-control" type="text" name="cidade">
                </div>
                <div class="d-flex flex-column w-50 mb-4">
                    <label for="numero">Numero para contato:</label>
                    <input class="rounded form-control" type="text" name="numero">
                </div>
                <div class="d-flex flex-column w-50 mb-4">
                    <label for="email">Email para contato:</label>
                    <input class="rounded form-control" type="text" name="email">
                </div>
                <div class="w-50 shadow p-3 rounded mb-5">
                      <h5 class="mb-3">Objetivo:</h5>
                      <div class="form-check mb-4">
                        <input class="form-check-input " type="radio" name="objetivo" id="option1" value="Contribuir para o crescimento da empresa, aplicando minhas habilidades e buscando constante desenvolvimento profissional.">
                        <label class="form-check-label" for="option1">Contribuir para o crescimento da empresa, aplicando minhas habilidades e buscando constante desenvolvimento profissional.</label>
                      </div>       
                      <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="objetivo" id="option2" value="Desenvolver minhas habilidades e contribuir para o sucesso da empresa, sempre buscando aprendizado e resultados consistentes.">
                        <label class="form-check-label" for="option2">Desenvolver minhas habilidades e contribuir para o sucesso da empresa, sempre buscando aprendizado e resultados consistentes.</label>
                      </div>     
                      <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="objetivo" id="option3" value="Atuar na empresa, tendo como maior intuito aprender com as atividades, e alcançar os objetivos que a mim foram designados ao meu cargo.">
                        <label class="form-check-label" for="option3">Atuar na empresa, tendo como maior intuito aprender com as atividades, e alcançar os objetivos que a mim foram designados ao meu cargo.</label>
                      </div>      
                        
                </div>
                <div class="w-50  shadow rounded p-5 mt-2 mb-5" >
                    <h4>Formação</h4>
                    <label for="nivel">Nivel</label>
                     <input class="rounded form-control w-100" type="text" name="nivel">

                     <label for="ensino">Ensíno</label>
                     <input class="rounded form-control w-100" type="text" name="ensino">
                </div> 

                <div>
                    <h4>Exeperiências profissionais:</h4>
                    <p>Usar ultimas 3 que constam na carteira de trabalho.</p>
                </div>

                <div class="w-50 shadow rounded p-5 mt-2 " >
                    <h4>Empresa:</h4>
                    <label for="empresa1">Empresa 1:</label>
                     <input class="rounded form-control w-100" type="text" name="empresa1">

                     <label for="cargo1">Cargo:</label>
                     <input class="rounded form-control w-100" type="text" name="cargo1">

                     <label for="periodo1">Periodo:</label>
                     <input class="rounded form-control w-100" type="text" name="periodo1">
                </div> 
                <div class="w-50 shadow rounded p-5 mt-2 " >
                    <h4>Empresa:</h4>
                    <label for="empresa2">Empresa 2:</label>
                     <input class="rounded form-control w-100" type="text" name="empresa2">

                     <label for="cargo2">Cargo:</label>
                     <input class="rounded form-control w-100" type="text" name="cargo2">

                     <label for="periodo2">Periodo:</label>
                     <input class="rounded form-control w-100" type="text" name="periodo2">
                </div> 
                <div class="w-50 shadow rounded p-5 mt-2 " >
                    <h4>Empresa:</h4>
                    <label for="empresa3">Empresa 3:</label>
                     <input class="rounded form-control w-100" type="text" name="empresa3">

                     <label for="cargo3">Cargo:</label>
                     <input class="rounded form-control w-100" type="text" name="cargo3">

                     <label for="periodo3">Periodo:</label>
                     <input class="rounded form-control w-100" type="text" name="periodo3">
                </div> 

                <div class="d-flex flex-column w-50  mb-4">
                    <input class="w-100 rounded btn mt-5 btn-primary" type="submit" value="Criar curriculo">
                </div>

        </form>
    </div>
</body>
</html>