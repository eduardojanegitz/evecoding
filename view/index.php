<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="../images/logo-evecoding.png" />
    <title>Controle Patrimonial</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter">
</head>

<body>
    <main>
        <div id="container">
            <p id="container-title">Acesso ao Sistema</p>
            <form action="../controller/login.php" method="post">
                <p>
                    <input type="text" name="user" id="user" placeholder="Usuário">
                </p>

                <p>
                    <input type="password" name="password" id="password" placeholder="Senha">
                </p>

                <p>
                    <input type="submit" value="acessar" id="btn-access" name="access">
                </p>
            </form>
        </div>

        <div id="logo">
            <img src="../images/logo-evecoding.png" alt="logo-facens">
            
        </div>

    </main>
</body>

</html>