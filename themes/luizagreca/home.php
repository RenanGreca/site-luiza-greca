<?php get_header(); ?>


<div class="part1">

  <div class="gradient-white-bottom">
  </div>

  <span class="logo-helper"></span>
  <img class="main-logo" src="<?php echo get_bloginfo('template_url') ?>/img/logo-h.png"/>

</div>

<?php
$casos_array = get_posts_from_category('casos');
 ?>

<span class="horizontal-line"></span>
<div class="container">
  <div id="casos" class="section">
    <h1>Casos em Destaque</h1>

    <div class="mosaic-row">

      <?php
        display_mosaic_item_with_post($casos_array[0]);
        display_mosaic_item_with_post($casos_array[1]);
        display_mosaic_item_with_post($casos_array[2]);
       ?>

    </div>

  </div>

</div>
<span class="horizontal-line line-right"></span>
<div class="container">
<a class="standard-link" href="/casos"><h3>
    Leia outros casos aqui
</h3></a>
</div>

<?php
$noticias_array = get_posts_from_category('noticias');
 ?>

<span class="horizontal-line"></span>
<div class="container">
  <div id="noticias" class="section">
    <h1>Últimas Notícias</h1>

    <div class="mosaic-row">

      <?php
        display_mosaic_item_with_post($noticias_array[0]);
        display_mosaic_item_with_post($noticias_array[1]);
        display_mosaic_item_with_post($noticias_array[2]);
       ?>

      <!-- <div class="mosaic-item">
        <div class="mosaic-image">
        </div>
        <h2>Título da notícia</h2>
        Breve descrição da notícia relatada na matéria. No máximo três linhas.
      </div>

      <div class="mosaic-item">
        <div class="mosaic-image">
        </div>
        <h2>Título da notícia maior que o normal</h2>
        Breve descrição da notícia relatada na matéria. No máximo três linhas. Esta descrição é maior que as outras.
      </div>

      <div class="mosaic-item">
        <div class="mosaic-image">
        </div>
        <h2>Título da notícia</h2>
        Breve descrição da notícia relatada na matéria. No máximo três linhas.
      </div> -->

    </div>

  </div>
</div>
<span class="horizontal-line line-right"></span>
<div class="container">
<a class="standard-link" href="/noticias"><h3>
  Leia outras notícias aqui
</h3></a>
</div>

<div class="atuacao-bg">

  <div class="gradient-white-top">
  </div>

  <div class="gradient-white-bottom">
  </div>

  <span class="horizontal-line"></span>
  <div class="container">
    <div id="atuacao" class="section">
      <h1>Áreas de Atuação</h1>

      <div id="atuacao-contents">
        <div class="half-block block-left atuacao-left">
          <h2>Consultoria em Engenharia Civil</h2>
          Acessoria na área de construção civil.

          <div class="block-space"></div>

          <h2>Inspeções Prediais</h2>
          Vistoria em condomínios e edificações em geral para a verificação das condições físicas dos imóveis.<br/>
          Elaboramos o Plano de Manutenção de Condomínios para que síndicos e administradoras tenham a diretriz das prioridades das manutenções corretivas e preventivas que deverão ser executadas.
        </div>

        <div class="block-separator">
        </div>

        <div class="half-block block-right atuacao-right">
          <h2>Laudos de Vistorias</h2>
          Execução de laudos técnicos com o diagnóstico da situação do imóvel.

          <div class="block-space"></div>

          <h2>Avaliações Urbanas</h2>
          Avaliações de valor de mercado para imóveis urbanos.

          <div class="block-space"></div>

          <h2>Laudos de Vizinhança</h2>
          Execução de laudos técnicos preventivos de edificações vizinhas às novas construções.

        </div>
      </div>

    </div>
  </div>
</div>

<div class="sobre-bg">

  <div class="gradient-white-top">
  </div>

  <div class="gradient-white-bottom">
  </div>

  <span class="horizontal-line"></span>
  <div class="container">
    <div id="sobre" class="section">
      <h1>Sobre</h1>

      <div id="atuacao-contents">
        <div class="sobre-image half-block block-left">
        </div>

        <div class="block-separator">
        </div>

        <div class="half-block block-right sobre-right">
          <h2>Luiza Greca</h2>
          Texto falando dos seus valores, contando um pouco da sua história na área e o porquê do cliente dever escolher você no
          seu mercado. É importante algo assim numa empresa que carrega um nome próprio como seu nome, para aproximar mais o cliente, gerando confiança. Aqui você também deve falar da sua formação, certificações, etc.
        </div>
      </div>
    </div>
  </div>
</div>

<div class="contato-bg">

  <div class="gradient-white-top">
  </div>

  <div class="gradient-white-bottom">
  </div>

  <span class="horizontal-line"></span>
  <div class="container">
    <div id="contato" class="section">
      <h1>Contato</h1>

      <div id="contato-contents">

        <div class="half-block block-left contato-left">
          <b>Visite minha página no Facebook</b><br/>
          E-mail: emailexemplo@email.com.br<br/>
          Telefone: (41) 99999-9999<br/>
          Endereço: R. Exemplo, 123, próximo a Exemplo.
        </div>

        <div class="block-separator">
        </div>

        <div class="contato-map half-block block-right">
          <iframe
            width="360"
            height="300"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDuLM6i6jTgkeKDz0nY6vwNYQ6p8qJfyfg&q=R.+Francisco+G+Villanueva,+66+-+Tarumã,+Curitiba+-+PR,+82530-400" allowfullscreen>
          </iframe>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- <span class="horizontal-line"></span>
<div class="container">
  <div id="contato" class="section">
    <h1>Contato</h1>
  </div>
</div> -->

<?php get_footer(); ?>
