<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
        crossorigin="anonymous" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Formulário de Contato</h2>
            <form action="/cadastrar" method="POST">
                @csrf
                <div class="form-control">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" autocomplete="off" required>
                </div>
                <div class="form-control">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" placeholder="Digite seu telefone" autocomplete="off" required>
                </div>
                <div class="form-control">
                    <label for="endereco">Endereço</label>
                    <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço" autocomplete="off" required>
                </div>
                <div class="form-control">
                    <label for="sexo">Sexo</label>
                    <select id="sexo" name="sexo" required>
                        <option value="">Selecione seu sexo</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                </div>
                <input type="submit" value="Enviar" class="btn">
            </form>
        </div>
        
        @if (isset($dados))
        <div class="result">
            <h3>Dados Recebidos:</h3>
            <pre>{{ var_dump($dados) }}</pre>
        </div>
        @endif









    </div>
</body>
</html>
