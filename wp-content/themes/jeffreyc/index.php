<?php

get_header(); ?>

<div id="body">

    <section class="row">
      <div class="margin-left margin-right margin-bottom">
        <article class="responsive-S-col-1 responsive-M-col-4 responsive-L-col-5">
          <h1>who am I?</h1>
          <p class="intro">I am an enthusiastic <a href="/web-developer"> PHP web developer</a>, a <a href="/life-lover">life lover</a> in Sydney Australia.</p>
          <p>I enjoy integrating simplicity and high efficiency in web development, both <a href="/web-developer#backend">backend</a> and <a href="/web-developer#frontend">frontend</a>. I keep myself refreshed with new knowledge and always keen to try cutting edge technology in my daily work. As a person who does not want to be limited with the term "geek", I strive to be a "people" person.</p>
          <p>When I am not sitting in front my computer or gadgets, I devote life to family and enrichment.</p>
        </article>
        <div class="responsive-S-col-1 responsive-M-col-2 responsive-M-col-last responsive-L-col-4" id="me-chart">
          <img alt="what composie me" src="<?php echo get_template_directory_uri() . '/img/me-chart.png'; ?>" />
        </div>
        <div class="responsive-S-none responsive-M-none responsive-L-col-3">
          <pre>


  &lt; logic &gt;
      &lt; senior web developer /&gt;
      &lt; gadgets lover /&gt;
      &lt; new tech junkie /&gt;
      &lt; google fanboy /&gt;
  &lt; /logic &gt;


  #emotion {
      caring husband/son
      junior photographer
      passionate traveler
      music addictive
  }
          </pre>
        </div>
      </div>
    </section>

    <section id="lastest" class="row">
      <div class="margin-left margin-right margin-bottom padding-top">
        <h2>Latest work</h2>
      </div>
    </section>

</div>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>