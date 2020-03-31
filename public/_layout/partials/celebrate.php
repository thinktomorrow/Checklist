<?php 
    $arr = array(
    'assets/img/celebrate.gif',
    'assets/img/ace-ventura.gif',
    'assets/img/done-working.gif',
    ); 
    $key = array_rand($arr);  
?>
<div id="celebration" class="hidden fixed top-0 bottom-0 left-0 right-0 w-screen h-screen bg-black-50" data-toggle-class="#celebration">
    <div class="absolute-center w-full md:-w1/3">
    <img src="<?php echo $arr[$key]; ?>" alt="celebrate" class="block mx-auto rounded shadow-lg">
    <h3 class="text-white font-regular text-2xl text-center">Good job!</h3>
</div>
</div>