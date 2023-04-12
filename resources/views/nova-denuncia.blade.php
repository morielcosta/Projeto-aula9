<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lixo Zero Web App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-600 to-blue-400">
    <div class="flex flex-col justify-between">
        <form action="" method="POST" enctype="multipart/form-data">
            <h1 class="px-5 text-white mt-10 text-lg">Lixo Zero</h1>
            <h2 class="px-5 text-white font-bold text-3xl">Nova denúncia</h2>
            <div class="px-5 text-white text-sm">Para realizar a denuncia preecha o formulario abaixo</div>
            <hr class="border-blue-400 my-5">

            <div class="flex flex-col space-y-2 px-5">
                <div class="text-white font-bold">Bairro</div>
                <input class="ring ring-blue-400 border-0 p-3 bg-blue-700 text-white placeholder-blue-200 rounded outline-none" type="text" placeholder="Bairro">

                <div class="text-white font-bold">Cidade</div>
                <input class="ring ring-blue-400 border-0 p-3 bg-blue-700 text-white placeholder-blue-200 rounded outline-none" type="text" placeholder="Cidade">

                <div class="text-white font-bold">CEP</div>
                <input class="ring ring-blue-400 border-0 p-3 bg-blue-700 text-white placeholder-blue-200 rounded outline-none" type="text" placeholder="CEP">

                <div class="flex flex-col space-y-1">
                    <div class="text-white font-bold">Endereço</div>
                    <input required name="endereco" class="ring ring-blue-400 border-0 p-3 bg-blue-700 text-white placeholder-blue-200 rounded outline-none" type="text" placeholder="Digite o endereço">
                </div>

                <div class="text-white font-bold">Descrição</div>
                <input class="ring ring-blue-400 border-0 p-3 bg-blue-700 text-white placeholder-blue-200 rounded outline-none" type="text" placeholder="Descrição">

                <div class="flex flex-col space-y-1">
                    <div class="text-white font-bold">Anexe a foto do local</div>
                    <div class="text-white text-sm">De preferência de dia.</div>
                    <input class="text-white text-sm border-2 p-5 border-blue-400 rounded-lg" type="file" accept="image/*" />
                </div>
            </div>

            </div>

            <div class="flex flex-col px-5 pt-5">
                <button type="submit" class="bg-white py-4 w-full rounded text-blue-600 font-bold text-center">Fazer
                    nova denúncia</button>

                <div class="text-center pt-5">
                    <a href="/denuncias" class="text-white">Voltar para a home</a>
                </div>
            </div>
        </form>
        <div class="text-center text-white py-10">Créditos do WebApp aqui</div>
    </div>
</body>

</html>