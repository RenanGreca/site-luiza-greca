<?php get_header(); ?>


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
<a class="standard-link" href="/category/casos"><h3>
    Outros casos
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

    </div>

  </div>
</div>
<span class="horizontal-line line-right"></span>
<div class="container">
<a class="standard-link" href="/category/noticias"><h3>
  Outras notícias
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
          Assessoria na área de construção civil.

          <div class="block-space"></div>

          <h2>Inspeções Prediais</h2>
          Vistoria em condomínios e edificações em geral para a verificação das condições físicas dos imóveis.<br/>
          Elaboramos o Plano de Manutenção de Condomínios para que síndicos e administradoras tenham a diretriz das prioridades das manutenções corretivas e preventivas que deverão ser executadas.

          <div class="block-space"></div>
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

      <div id="sobre-contents">
        <div class="sobre-image half-block block-left">
        </div>

        <div class="block-separator">
        </div>

        <div class="half-block block-right sobre-right">
          <h2>Luiza Greca</h2>
          Engenheira Civil formada pela Universidade Federal do Paraná em 1988.
          Iniciou sua carreira no ramo de licitações de obras públicas e posteriormente consolidou sua carreira na área administrativa de obras atuando em  orçamentos,
          custos de construções, gerenciamento de fornecedores de materiais, de equipamentos e empreiteiros.
          Paralelamente, capacitou-se na área de Engenharia de Avaliações de Imóveis Urbanos, trabalhando no ramo desde o ano de 2000 e
          obtendo o Certificado de Qualificação Profissional em Engenharia de Avaliações – Qualificação “A” do IBAPE Nacional em 2014, renovado em 2017.
          Atua, também, na área de Inspeção Predial e atualmente amplia seus conhecimentos com a Pós Gradução em andamento em Patologia nas Obras Civis pela Faculdade IDD.
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

        <!-- <div class="half-block block-left contato-left"> -->
          E-mail: inovacao.eng@gmail.com<br/><br/>
          Telefone: (41) 98464-0748<br/><br/><br/>
          <!-- <a class="standard-link" href="https://www.facebook.com/Luiza-Greca-Engenharia-e-Consultoria-199455997471451/">
            <b>Facebook</b>
          </a><br/><br/> -->
          <a href="https://www.facebook.com/Luiza-Greca-Engenharia-e-Consultoria-199455997471451/" class="social-icon social-fb" target="_blank">
            <img class="social-icon" src="<?php echo get_bloginfo('template_url') ?>/img/facebook.png">
          </a>
        <!-- </div> -->

      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
