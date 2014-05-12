<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<div class="go_clients_review users_review">
    <div class="aleatorio">
        <h1 class="cr_title" style="font-size: <?php echo $cr_fontsize ?>px; color: <?php echo $cr_titlecolor ?>;"><?php echo $title ?></h1>
        <div id="misCitas"></div>
        
        <?php
       $i;
       
       
        $count_caption = array($texttocaption00,$texttocaption01,$texttocaption02,$texttocaption03,$texttocaption04,$texttocaption05,$texttocaption06,$texttocaption07,$texttocaption08,$texttocaption09);
        shuffle($count_caption);
        for ($i=0;$i<=9;$i++){
            
            if(strlen($count_caption[$i])>1){
                
                ?>
                
        <div id="cita<?php echo $i ?>" style="font-size: <?php echo $cr_texttocaption_size ?>px; color: <?php echo $cr_captioncolor ?>;"><i class="fa fa-quote-left"></i>&nbsp;<?php echo $count_caption[$i] ?>&nbsp;<i class="fa fa-quote-right"></i></div>
                <?php
            }
        }
        ?>
        
    </div>
</div>