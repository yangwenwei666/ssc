<input type="hidden" name="playedGroup" value="<?php echo $group_id; ?>"/>
<input type="hidden" name="playedId" value="<?php echo $play_id; ?>"/>
<input type="hidden" name="type" value="<?php echo $type_id; ?>"/>
<div>
    <div class="pp" action="sscqh2zhuxhz" length="2" random="combineRandom">
        <div class="circle-num-box">
            <div class="ey-num-box">
                <input type="button" value="1" class="code min d"/>
                <input type="button" value="2" class="code min s"/>
                <input type="button" value="3" class="code min d"/>
                <input type="button" value="4" class="code min s"/>
                <input type="button" value="5" class="code max d"/>
                <input type="button" value="6" class="code max s"/>
                <input type="button" value="7" class="code max d"/>
                <input type="button" value="8" class="code max s"/>
                <input type="button" value="9" class="code max d"/>
                <input type="button" value="10" class="code min s"/>
                <input type="button" value="11" class="code min d"/>
                <input type="button" value="12" class="code min s"/>
                <input type="button" value="13" class="code min d"/>
                <input type="button" value="14" class="code min s"/>
                <input type="button" value="15" class="code max d"/>
                <input type="button" value="16" class="code max s"/>
                <input type="button" value="17" class="code max d"/>

            </div>
        </div>

    </div>
</div>
<?php $maxPl = $this->get_play_bonus($play_id); ?>
<script type="text/javascript">
    $(function () {
        lottery.set_play_Pl(<?php echo json_encode($maxPl);?>);
    })
</script>
