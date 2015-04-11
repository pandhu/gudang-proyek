<div class="container main-page" style="padding: 100px 15px 0;">

<div id="modal">
   <?php $this->renderPartial('_ajaxContent', array('myValue'=>$myValue)); ?>
</div>
 
<?php echo CHtml::ajaxButton ("Update data",
                              CController::createUrl('testimoni/UpdateAjax'), 
                              array('update' => '#modal'));
?>
<a class="ajax">Ajax</a>
<script type="text/javascript">
jQuery(function($) {
   jQuery('body').delegate('.ajax','click',function(){
        jQuery.ajax({
            'url':'../testimoni/UpdateAjax',
            'cache':false,
            'success':function(html){
                jQuery("#modal").html(html);
                jQuery('#deleteModerator').modal('show');
            }
        });
        return false;
    });
});
</script>