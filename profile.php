<?php

$PageTitle="New Page Title";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once('header.php');
?>
 
 <!-- USER PROFILE IMAGE AND TITLE SECTION -->
  <section class="section">
  <div class="columns">
  <div class="column is-one-third">
    <img src="https://source.unsplash.com/random/1600x900" alt="Placeholder image">
  </div>


  <div class="column is-one-third">
    <h1 class="title is-1">John Doe</h1>
    <h2 class="subtitle is-4">Skuespiller</h2>
    <p>København, Denmark</p>
    <p>Spillealder: 20-30</p>
    <p>Erfaring: Professionel</p>
    <br><p>Interesseret i:</p>
    <span class="tag is-info">Kortfilm</span>
    <span class="tag is-info">Ulønnede Projekter</span>
    <span class="tag is-info">Fiktion</span>
    <span class="tag is-info">Reklamer</span>
  </div>
  <div class="column is-one-third">
  <div class="buttons">
      <button class="button is-link">Se Showreel</button>
      <button class="button is-link">Kontakt</button>
  </div>
</div>
</section>

<!-- USER CV -->
<section class="section">
  <h1 class=title>Projekter</h1>
  <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
    <thead>
      <tr>
        <th><abbr title="year">År</abbr></th>
        <th><abbr title="project">Projekt</abbr></th>
        <th><abbr title="role">Rolle</abbr></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>2017</th>
        <th>Mens Vi Lever</th>
        <th>Kristian</th>
      </tr>
      <tr>
        <th>2018</th>
      <th>Kollision</th>
      <th>Frederik</th>
    </tr>
    <tr>
        <th>2020</th>
      <th>GROW</th>
      <th>Jakob</th>
    </tr>
    </tbody>
  </table>
</section>


<?php
include_once('footer.php');
?>