<!-- 
  Autor: Bruno Modinuti
  E-mail: modinutidev@gmail.com
  2019 © Todos os direitos reservados.
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- metas -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=yes" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="format-detection" content="telephone=yes" />
  <!-- seo -->
  <title>ZappGO - Criador de Conversas WhatsApp</title>
  <meta name="author" content="Bruno Modinuti" />
  <meta name="generator" content="whatsapp, api, chat, contato, adicionar, conversar, android, ios, web, aplicativo, aplicação, orçamento" />
  <meta name="description" content="Aplicativo online para conversar no WhatsApp sem adicionar o contato no celular. Compatível com web whatsapp, iOS e android." />
  <meta name="keywords" content="whatsapp, api, chat, contato, adicionar, conversar, android, ios, web, aplicativo, aplicação, orçamento" />
  <!-- icon -->
  <link rel="icon" href="img/icone_whatsapp.png" type="image/x-icon" />
  <link rel="shortcut icon" href="img/icone_whatsapp.png" type="image/x-icon" />
  <!-- styles -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="container">
    <div class="icone"></div>
    <div class="form-row">
      <div class="col-sm-12">
        <div class="form-group">
          <label>Número</label>
          <input class="form-control form-control" type="tel" placeholder="Ex.5511999999999">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <button class="btn btn-link" name="create">Criar Conversa</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <a href="#" data-toggle="modal" data-target="#help">Como usar?</a>
      </div>
      <div class="col-6 right">
        <a href="https://instagram.com/brunomodinuti" target="_blank">Bruno Modinuti</a>
      </div>
    </div>
  </div>

  <!-- modal -->
  <div class="modal fade" id="help" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Como usar?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
            Para criar uma conversa entre com o <label>código do pais</label>, <label>DDD</label> e o <label>telefone</label>.
            <br /><br />
            <label>Exemplo</label>: Suponha que você deseje enviar uma mensagem a alguém de São Paulo Capital. Você precisará digitar <label>55</label> (Código do Brasil), <label>11</label> (DDD) e <label>999999999</label> (O número do contato). Ficando desta maneira <label>5511999999999</label>. Após informar corretamente os dados, clique no botão <label>Criar Conversa</label>.
            <br /><br />
            <label>Importante!</label> Nenhuma informação fica registrada em nosso sistema.
            <br /><br />
            Qualquer dúvida entre em contato pelo e-mail <label>suporte@zappgo.com</label>.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Entendi!</button>
        </div>
      </div>
    </div>
  </div>
  <!-- fim modal -->
</body>
<!-- scripts -->
<script  src="./js/script.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145407135-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-145407135-1');
</script>
</html>