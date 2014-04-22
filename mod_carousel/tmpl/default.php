<?php // no direct access
defined('_JEXEC') or die('Restricted access');
?>
<?php echo '' ?><div class="carousel_container">
    <div class="imgFondoOdin">&nbsp;
        <div class="container fill ">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="active item">
                        <div class="fill" style="background-image: url(' <?php $imagen01 ?>');">&nbsp;</div>
                        <div class="container">
                            <div class="carousel-caption">
                                <h2><?php $caption01 ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image: url(' <?php $imagen02 ?>');">&nbsp;</div>
                        <div class="carousel-caption">
                            <h2><?php $caption02 ?></h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill" style="background-image: url(' <?php $imagen03 ?>');">&nbsp;</div>
                        <div class="carousel-caption">
                            <h2><?php $caption03 ?></h2>
                        </div>
                    </div>
                </div>
                <div class="pull-center"><a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a> <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a></div>
            </div>
        </div>
    </div>
</div><?php ;
?>