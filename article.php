<?php include_once('header.php'); ?>

<?php
$i = 0;
for ($i = 0; $i < 2; $i++) {
?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="thumbnail">
            <img data-src="#" alt="">
            <div class="caption">
                <h3 class=" title ">Title</h3>
                <p class="text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est porro ipsa quo placeat, vel ex. Consectetur distinctio inventore ipsa neque, illo similique quibusdam at nemo assumenda in quod tempora provident!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. At itaque iste modi consequuntur sit? Ab repellat neque quod maiores, deserunt provident numquam modi dicta amet! Neque, accusamus libero! Corporis, harum.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora, aperiam. Harum excepturi repellendus aperiam nemo ipsa quos. Quae qui perferendis labore accusamus, repellat alias, quis quaerat amet ducimus, sed corporis.
                </p>
                <p>
                    <a href="#" class="btn btn-primary">Author</a>
                    <a href="#" class="btn btn-default">Comment</a>
                </p>
            </div>
        </div>
    </div>

<?php } ?>
<ul class="pager">

    <a class="btn btn-info" href="#" role="button">Previous</a>
    <a class="btn btn-default" href="#" role="button">Next</a>

</ul>



<?php include_once('footer.php'); ?>