<?php include_once 'header.php';?>

<?php
$i = 0;
for ($i = 0; $i < 2; $i++) {
    ?>
   <div class="card">
       <div class="card-body jumbotron cd">
           <h5 class="card-title">Title</h5>
           <p class="card-text">Content</p>
       </div>
       <img class="card-img-bottom" src="" alt="">
   </div>

<?php }?>
<ul class="pager">

    <a class="btn btn-info" href="#" role="button">Previous</a>
    <a class="btn btn-default" href="#" role="button">Next</a>

</ul>
<?php include_once 'footer.php';?>