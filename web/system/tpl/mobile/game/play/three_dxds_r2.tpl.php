<input type="hidden" name="playedGroup" value="<?php echo $group_id; ?>"/>
<input type="hidden" name="playedId" value="<?php echo $play_id; ?>"/>
<input type="hidden" name="type" value="<?php echo $type_id; ?>"/>
<?php foreach (array('百', '十', '个') as $var) { ?>
    <div class="pp" action="tzDXDS" length="2" random="sscRandom">
        <div class="title"><?= $var ?>位</div>
        <div class="circle-num-box">
            <div class="ey-num-box">
                <input type="button" value="大" class="code"/>
                <input type="button" value="小" class="code"/>
                <input type="button" value="单" class="code"/>
                <input type="button" value="双" class="code"/>
            </div>
        </div>
    </div>
    <?php
}
$maxPl = $this->get_play_bonus($play_id);
?>
<script type="text/javascript">
    $(function () {
        lottery.set_play_Pl(<?php echo json_encode($maxPl);?>);
    })
</script>
