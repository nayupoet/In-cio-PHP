<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 01 - entrevista</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right,rgb(176, 119, 187),rgb(177, 104, 140));
            color: black;
        }
        header {
            background-color: rgba(127, 96, 148, 0.57);
            padding: 15px 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        section {
            padding: 20px;
            max-width: 900px;
            margin: 20px auto;
            background: rgba(127, 96, 148, 0.57);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        section h2 {
            font-size: 1.8em;
            margin-bottom: 15px;
            color:rgb(0, 0, 0);
        }
        p {
            font-size: 1.2em;
            line-height: 1.6;
        }
        .social-links {
            margin-top: 10px;
            text-align: center;
        }
        .social-links a {
            display: inline-block;
            margin: 0 10px;
            color: white;
            font-size: 1.5em;
            text-decoration: none;
            transition: transform 0.3s ease, color 0.3s ease;
        }
        .social-links a:hover {
            color:rgb(0, 0, 0);
            transform: scale(1.2);
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #127, 96, 148, 0.57;
        }
        img {
            width: 100px;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindos ao meu teste em php</h1>
    </header>

    <section>
        <h2>Sobre Mim</h2>
        <p>
            <?php 
                $nome = "Mariana Miyamoto";
                $descricao = "Bom, esse é meu primeiro teste em php!! Segui estudando o material no qual vocês me mandaram na trilha do aprimoramento, e fui tentado mexer em algumas coisas sozinha. No mais, é meu primeiro teste em php, tentei usar um pouco do que eu aprendi no meu primeiro período em sistemas, com o básico de html e css, com a ajuda das ferramentas nas quais os professores recomendaram usar, como o bootstrap. Num geral, só queria mostrar que eu tentei estudar pelo menos o início básico do php, aprendendo a guardar suas variáveis e afins.";
                echo "Olá, meu nome é <strong>$nome</strong>. $descricao";
            ?>
        </p>
    </section>

    <section>
        <h2>Contato</h2>
        <p>
            <?php
                $email = "mariana.cmiyamoto@gmail.com";
                $telefone = "(31) 98885-0076";
                echo "Você pode entrar em contato comigo pelo e-mail <a href='mailto:$email'>$email</a> ou pelo telefone <strong>$telefone</strong>. (Isso aqui foi um teste pra ver se eu entendi como guardar dados e afins, essa era uma parte que eu tinha muita dificuldade nas matérias passadas.)";
            ?>
        </p>
    </section>

    <footer>
        <h2>Projetos</h2>
        <p>Alguns dos projetos que já desenvolvi:</p>
        <p>Obs: Os projetos são fictícios, apenas para fins de demonstração. Alguns amigos meus da área disseram que era bom colocar uma tabela imagem, então apenas segui os conselhos dele e tentei fazer uma tabela imagem.</p>
        <p>Obs2: Não consegui fazer o link das imagens, então coloquei elas na pasta imagens e coloquei o caminho delas no src.</p>
    <table>
        <thead>
            <tr>
                <th>Projeto</th>
                <th>Descrição</th>
                <th>Imagem</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Projeto 1</td>
                <td>abrigo para gatos</td>
                <td><img src="https://i.pinimg.com/736x/6b/a3/a4/6ba3a4b89b17287586dfd78c95d11bb8.jpg" alt="Projeto 1"></td>
            </tr>
            <tr>
                <td>Projeto 2</td>
                <td>abrigo para cachorros</td>
                <td><img src="https://i.pinimg.com/736x/a0/86/1f/a0861f64a8a65e1bbebcb24bc256b3bc.jpg" alt="Projeto 2"></td>
            </tr>
        </tbody>
    </table>

        <div class="social-links">
            <a href="https://www.instagram.com/_miyamari/" target="_blank">Instagram</a>
            <a href="https://www.linkedin.com/in/mariana-miyamoto-205434349/" target="_blank">LinkedIn</a>
        </div>
    </footer>
</body>
</html>
