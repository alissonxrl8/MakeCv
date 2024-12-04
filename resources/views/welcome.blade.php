<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    
    <div class="container align-items-center">
        <div class="vh-100  d-flex flex-md-row flex-column">

            <div class="col d-flex flex-column justify-content-center align-items-md-start align-items-center">
                <h1 class="text-primary w-75">Crie Seu Currículo Agora Mesmo!</h1>
                <p class="w-75">Está pronto para dar o próximo passo na sua carreira? Com nosso site, criar um currículo profissional nunca foi tão fácil! Em apenas alguns minutos, você pode preencher suas informações, escolher o modelo ideal e gerar um currículo que vai chamar a atenção dos recrutadores. Não perca tempo – comece agora e abra as portas para novas oportunidades!</p>
            </div>
            <div class="bg-primary col d-flex flex-column justify-content-center align-items-center">
                <h6 class="text-white">Make you</h6>
                <div class="bg-white p-3 pt-0 mb-2">
                    <h4>CV</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-body-text" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 0 .5m0 2A.5.5 0 0 1 .5 2h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m9 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-9 2A.5.5 0 0 1 .5 4h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m5 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m7 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-12 2A.5.5 0 0 1 .5 6h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-8 2A.5.5 0 0 1 .5 8h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m7 0a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-7 2a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5"/>
                      </svg>
                </div>
                
                <div class="">
                    <h2 class="mb-4 text-white">Comece Agora!</h2>
                    <a href="{{route('makecv.create')}}" class="btn btn-dark w-100 mb-2 p-3">Crie seu curriculo</a>
                </div>
                
            </div>
        </div>
    </div>
    
</body>
</html>