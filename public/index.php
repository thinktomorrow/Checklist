<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Dagelijkse checklist om je thuiswerk te vergemakkelijken</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,800&display=swap" rel="stylesheet">

  <link href="assets/main.css" type="text/css" rel="stylesheet" />
  <link rel="icon" type="image/svg+xml" href="assets/img/checklist.svg">

  <?php include('_layout/partials/manifest.php') ?>
  <?php include('_layout/partials/metaheader.php') ?>

</head>

<body class="bg-primary-100">
  <?php include('assets/img/svg-symbol.php') ?>
  <nav class="container stack flex justify-between font-hairline hidden md:flex">
    <span>Dagelijkse checklist</span>
    <div>
      <a href="mailto:info@thinktomorrow.be?subject=Een checklist voor jouw bedrijf" target="_blank" class="mx-2">Jouw eigen checklist?</a>
      <a class="twitter-share-button mx-2" target="_blank" href="https://twitter.com/intent/tweet?text=Jouw%20dagelijkse%20checklist"
      data-size="large">Tweet</a>
    </div>
  </nav>

  <main class="w-4/5 md:w-1/2 mx-auto py-12">
    <div class="my-12 relative">
      <svg width="28" height="28" class="md:absolute md:-ml-10 md:mt-3">
        <use xlink:href="#clipboard"></use>
      </svg>
      <h1 class="text-4xl">Jouw dagelijkse checklist</h1>
      <p class="font-hairline mb-2"><span id="checkedItems">0</span> van <span id="numberOfItems">0</span></p>
      <p class="text-xl font-hairline">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut eaque error id asperiores! Dolores nihil nobis dignissimos repellendus eius odio necessitatibus obcaecati tempore esse, facilis blanditiis numquam accusamus totam soluta.</p>
    </div>
    <?php
    $listItemsWork = array(
      'Ik heb laten weten aan mijn collega\'s weten dat ik aanwezig ben',
      'Ik heb een dagplanning gemaakt',
      'Ik heb al mijn mails behandeld (max 1 uur)',
      'Ik deed een stand-up met mijn team',
      'Ik heb genoeg focus-time gehad vandaag',
      'Ik heb mijn timetracking ingevuld.',
      'Ik heb mijn meetings in de namiddag gepland.',
      'Ik heb mijn collega\'s voldoende geïnformeerd over mijn taken',
      'Ik heb minstens twee actieve activiteiten gedaan',
      'Ik heb minstens 2 liter water gedronken.',
    );
    ?>

    <?php foreach($listItemsWork as $a=>$item){ ?>
      <article id="article-<?php echo $a; ?>" class="checklistitems hover:line-through inset stack bg-primary-200 font-light cursor-pointer flex items-center justify-between" data-toggle-class="#article-<?php echo $a; ?>,active|#icon-<?php echo $a; ?>">
        <span><?php echo $item; ?></span>
        <svg id="icon-<?php echo $a; ?>" width="15" height="15" class="text-green-800 hidden fill-current">
          <use xlink:href="#check"></use>
        </svg>
      </article>
      <?php }; ?>

      <?php include('_layout/partials/celebrate.php') ?>
  </main>

  <footer class="container stack text-center font-hairline text-sm text-primary-800">
    &copy; 2020 - &#129412; &#127881; door Think Tomorrow
  </footer>

  <script src="assets/main.js"></script>
</body>

</html>