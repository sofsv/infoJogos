<?php
session_start();
include('header.php'); ?>     

</nav>
</header>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Contacto</title>
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
    }

    .footer {
      padding: 2px;
      color: #fff;
      text-align: center;
      background-color:  #fff;
    }
  </style>
</head>
<body>
  <main>
    <section>
      <h1> À PROCURA DE MAIS INFORMAÇÕES SOBRE NÓS?</h1>
    
  
      <div class="bloco" align="center">
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1501.7108610132104!2d-8.552041159667821!3d41.16896813018609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd24639f4b95e9eb%3A0x8d5bc9d9f00952a!2sEisnt%20-%20Forma%C3%A7%C3%A3o%20e%20Consultoria!5e0!3m2!1spt-PT!2spt!4v1671583598441!5m2!1spt-PT!2spt" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <p style="color:#fff"><b>Morada: Avenida D. João I, 380/384, Soutelo</b></p>
        <p style="color:#fff"><b>Código Postal: 4435-208 - Rio Tinto</b></p>
        <p style="color:#fff"><b>Telefone: 22 480 4792 </b></p>
        <p style="color:#fff"><b>Email: formacao@eisnt.com</b></p>
      </div>
    </section>
  </main>
  <!-- Rodapé -->
  <?php include('footer.php'); ?>
</body>
</html>
