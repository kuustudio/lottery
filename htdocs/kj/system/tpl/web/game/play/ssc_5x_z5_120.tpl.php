<input type="hidden" name="playedGroup" value="<?php echo $group_id;?>" />
<input type="hidden" name="playedId" value="<?php echo $play_id;?>" />
<input type="hidden" name="type" value="<?php echo $type_id;?>" />
<div>
    <div class="pp" action="ssc_5z_120" length="5" >
        <div class="title">选择</div>
        &nbsp;
        <input type="button" value="0" class="code s min" />
        <input type="button" value="1" class="code d min" />
        <input type="button" value="2" class="code s min" />
        <input type="button" value="3" class="code d min" />
        <input type="button" value="4" class="code s min" />
        <input type="button" value="5" class="code d max" />
        <input type="button" value="6" class="code s max" />
        <input type="button" value="7" class="code d max" />
        <input type="button" value="8" class="code s max" />
        <input type="button" value="9" class="code d max" />
    
        &nbsp;&nbsp;
        
        <input type="button" value="清" class="action none" />
        <input type="button" value="双" class="action even" />
        <input type="button" value="单" class="action odd" />
        <input type="button" value="小" class="action small" />
        <input type="button" value="大" class="action large" />
        <input type="button" value="全" class="action all" />
    </div>
</div>
<?php
	$maxPl = $this->get_play_bonus($play_id);
?>
<script type="text/javascript">
$(function(){
	lottery.set_play_Pl(<?php echo json_encode($maxPl);?>);
})
</script>