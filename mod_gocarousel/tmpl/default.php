<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

?>
<div class="carousel_container">
    <div class="imgFondoOdin">&nbsp;
        <div class="container fill">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval=<?php echo $data_interval ?> style="height: <?php echo $chooseHeight ?>px;">
                <div class="carousel-inner">
                    
                    
                    
                    <?php if(strlen($imagelocation01)>2){ ?>
                        <div class="active item" style="height: <?php echo $chooseHeight ?>px;">
                            <div class="fill" style="background-image: url('images/<?php echo $imagelocation01 ?>');"></div>
                            <?php if (strlen($texttocaption01)>1){ ?>
                            <div class="carousel-caption">
                                <h2 style="color: <?php echo $textcolorchooser ?>; font-size: <?php echo $textsize ?>px;font-family:<?php echo $text_type ?>;"><?php echo $texttocaption01 ?></h2>
                            </div>
                            <?php } ?>
                        </div>
                    <?php } 
                    
                    if(strlen($imagelocation02)>2){ ?>
                    <div class="item"  style="height: <?php echo $chooseHeight ?>px;">
                        <div class="fill" style="background-image: url('images/<?php echo $imagelocation02 ?>');"></div>
                        <?php if (strlen($texttocaption02)>1){ ?>
                        <div class="carousel-caption">
                            <h2 style="color: <?php echo $textcolorchooser ?>; font-size: <?php echo $textsize ?>px;font-family:<?php echo $text_type ?>;"><?php echo $texttocaption02 ?></h2>
                        </div>
                        <?php } ?>
                    </div>
                    <?php }
                    
                    if(strlen($imagelocation03)>2){ ?>
                    <div class="item"  style="height: <?php echo $chooseHeight ?>px;">
                        <div class="fill" style="background-image: url('images/<?php echo $imagelocation03 ?>');"></div>
                        <?php if (strlen($texttocaption03)>1){ ?>
                        <div class="carousel-caption">
                            <h2 style="color: <?php echo $textcolorchooser ?>; font-size: <?php echo $textsize ?>px;font-family:<?php echo $text_type ?>;"><?php echo $texttocaption03 ?></h2>
                        </div>
                        <?php } ?>
                    </div>
                    <?php }
                    
                    if(strlen($imagelocation04)>2){ ?>
                        <div class="item" style="height: <?php echo $chooseHeight ?>px;">
                            <div class="fill" style="background-image: url('images/<?php echo $imagelocation04 ?>');"></div>
                            <?php if (strlen($texttocaption01)>1){ ?>
                            <div class="carousel-caption">
                                <h2 style="color: <?php echo $textcolorchooser ?>; font-size: <?php echo $textsize ?>px;font-family:<?php echo $text_type ?>;"><?php echo $texttocaption04 ?></h2>
                            </div>
                            <?php } ?>
                        </div>
                    <?php }
                    
                    if(strlen($imagelocation05)>2){ ?>
                    <div class="item"  style="height: <?php echo $chooseHeight ?>px;">
                        <div class="fill" style="background-image: url('images/<?php echo $imagelocation05 ?>');"></div>
                        <?php if (strlen($texttocaption02)>1){ ?>
                        <div class="carousel-caption">
                            <h2 style="color: <?php echo $textcolorchooser ?>; font-size: <?php echo $textsize ?>px;font-family:<?php echo $text_type ?>;"><?php echo $texttocaption05 ?></h2>
                        </div>
                        <?php } ?>
                    </div>
                    <?php }
                    
                    if(strlen($imagelocation06)>2){ ?>
                    <div class="item"  style="height: <?php echo $chooseHeight ?>px;">
                        <div class="fill" style="background-image: url('images/<?php echo $imagelocation06 ?>');"></div>
                        <?php if (strlen($texttocaption03)>1){ ?>
                        <div class="carousel-caption">
                            <h2 style="color: <?php echo $textcolorchooser ?>; font-size: <?php echo $textsize ?>px;font-family:<?php echo $text_type ?>;"><?php echo $texttocaption06 ?></h2>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } else {}?>
                    
                </div>
                <div class="pull-center"><a class="carousel-control left" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></a> <a class="carousel-control right" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></a></div>
            </div>
        </div>
    </div>
</div>