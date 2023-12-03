<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conclusão</title>
    <link rel="icon" href="icone.png">
</head>
<body>
  <div class="container">
    <img src="gifzao.gif">
    <h1>Obrigado e Seja Bem-Vindo!</h1>
    <?php
    echo '';
    ?>
    <p>Seu cadastro foi realizado com sucesso.</p>
    <button class="glow-on-hover"><a href="home_site.html">Voltar a página inicial.</a></button>
  </div>
<style>
    body {
      background-image: url(img-fundo-erro-or-good.jpg);
      background-repeat: cover;
      background-position: center;
      font-family: Arial, sans-serif;
    }
    .container {
      width: 400px;
      height: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin-top: 200px;
    }
    .container img{
      width: 200px;
      height: 200px;
      margin-left: 90px;
      margin-bottom: -130px;
    }
    .glow-on-hover a{
      color: #ffffff;
      font-size: 18px;
      text-decoration: none;
    }
    h1 {
      color: #333;
      text-align: center;
      margin-top: 150px;
    }
    .container p {
      margin-top: 50px;
      margin-bottom: 10px;
      color: #666;
      text-align: center;
      font-size: 20px;
    }
    .glow-on-hover {
      width: 200px;
      height: 40px;
      border: none;
      outline: none;
      color: #fff;
      background: #111;
      cursor: pointer;
      position: relative;
      z-index: 0;
      border-radius: 10px;
      margin-left: 95px;
      margin-top: 40px;
    }
    .glow-on-hover:before {
      content: '';
      background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
      position: absolute;
      top: -2px;
      left:-2px;
      background-size: 400%;
      z-index: -1;
      filter: blur(5px);
      width: calc(100% + 4px);
      height: calc(100% + 4px);
      animation: glowing 20s linear infinite;
      opacity: 0;
      transition: opacity .3s ease-in-out;
      border-radius: 10px;
    }
    .glow-on-hover:active {
      color: #000
    }
    .glow-on-hover:active:after {
      background: transparent;
    }
    .glow-on-hover:hover:before {
      opacity: 1;
    }
    .glow-on-hover:after {
      z-index: -1;
      content: '';
      position: absolute;
      width: 100%;
      height: 100%;
      background: #111;
      left: 0;
      top: 0;
      border-radius: 10px;
    }
    @keyframes glowing {
      0% { background-position: 0 0; }
      50% { background-position: 400% 0; }
      100% { background-position: 0 0; }
    }

   /* Responsividade para 320px á 600px obs: celular */
    @media (min-width: 320px)and (max-width: 600px) {
      .container {
        width: 90%;
        height: auto;
        margin-top: 100px;
      }
      .container img {
        width: 150px;
        height: 150px;
        margin-left: 75px;
        margin-bottom: -100px;
      }
      h1 {
        margin-top: 100px;
      }
      .container p {
        margin-top: 30px;
        margin-bottom: 20px;
        font-size: 16px;
      }
      .glow-on-hover {
        width: 150px;
        height: 40px;
        margin-left: 75px;
        margin-top: 30px;
      }
    }
    /* Responsividade de 1000px á 1200px obr: Tablet*/
    @media (min-width: 1000px) and (max-width: 1200px) {
      .container {
        width: 600px;
        height: 700px;
        margin-top: 300px;
      }
      .container img {
        width: 300px;
        height: 300px;
        margin-left: 150px;
        margin-bottom: -260px;
      }
      h1 {
        margin-top: 250px;
      }
      .container p {
        margin-top: 100px;
        margin-bottom: 80px;
        font-size: 30px;
      }
      .glow-on-hover {
        width: 300px;
        height: 80px;
        margin-left: 175px;
        margin-top: 80px;
      }
    }
    /* Responsividade de 1250px á 1400px obr: Tablet*/
    @media (min-width: 1250px) and (max-width: 1400px) {
    .container {
      width: 800px;
      height: 900px;
      margin-top: 400px;
    }
    .container img {
      width: 400px;
      height: 400px;
      margin-left: 200px;
      margin-bottom: -360px;
    }
    h1 {
      margin-top: 350px;
    }
    .container p {
      margin-top: 150px;
      font-size: 40px;
    }
    .glow-on-hover {
      width: 400px;
      height: 120px;
      margin-left: 225px;
      margin-top: 120px;
    }
  }
</style>
</body>
</html>
