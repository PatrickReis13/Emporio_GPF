<h1>Entre em contato e nos siga nas redes sociais</h1>

<div class="contact">
  <form action="action_page.php">

    <label for="fname">Primeiro Nome</label>
    <input type="text" id="fname" name="Primeiro Nome" placeholder="...">

    <label for="lname">Sobrenome</label>
    <input type="text" id="lname" name="Sobrenome" placeholder="...">

    <label for="subject">Assunto</label>
    <textarea id="subject" name="subject" placeholder="Pergunte..." style="height:200px"></textarea>

    <input type="submit" value="enviar">

  </form>
<?php

$title = " - Fale Conosco";


require('_header.php') ?>

<article></article>

<aside></aside>

<?php require('_footer.php') ?>