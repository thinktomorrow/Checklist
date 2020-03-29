<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Checklist</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,800&display=swap" rel="stylesheet">

  <link href="assets/main.css" type="text/css" rel="stylesheet" />

</head>

<body class="bg-primary-100">
  <?php include() ?>
  <nav class="container stack">Dagelijkse checklist</nav>

  <main class="w-1/2 mx-auto py-12">
    <div class="my-12">
      <h1 class="text-4xl">Jouw dagelijkse checklist</h1>
      <p class="text-xl font-hairline">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut eaque error id asperiores! Dolores nihil nobis dignissimos repellendus eius odio necessitatibus obcaecati tempore esse, facilis blanditiis numquam accusamus totam soluta.</p>
    </div>
    <?php
    $listItemsWork = array(
    '🤸‍♀️ Neem korte pauzes om je benen te strekken',
    '🏃🏻‍♀️ Stop op tijd met werken en ga een wandeling maken!',
    '💦 Drink voldoende water of thee',
    '🍎 Eet gezond');
    ?>

    <?php foreach($listItemsWork as $a=>$item){ ?>
      <article id="article-<?php echo $a; ?>" class="py-8 px-4 stack bg-primary-200 font-light cursor-pointer" data-toggle-class="#article-<?php echo $a; ?>,checked|#icon-<?php echo $a; ?>">
        <div id="icon-<?php echo $a; ?>" class="hidden">
          <svg width="28" height="28">
          <use xlink:href="#check"></use>
          </svg>
          
        </div>
        <?php echo $item; ?>
      </article>
      <?php }; ?>

  </main>

  <script src="assets/main.js"></script>
</body>

</html>