<input type="hidden" name="playedGroup" value="<?php echo $group_id; ?>"/>
<input type="hidden" name="playedId" value="<?php echo $play_id; ?>"/>
<input type="hidden" name="type" value="<?php echo $type_id; ?>"/>
<div class="dantuo">
    <label><input type="radio" name="dantuo" value="" checked="checked"/>普通</label>
    <label><input type="radio" name="dantuo" value="1"/>胆拖</label>
</div>
<div>
    <div class="pp pp11" action="tzKLSFSelect" length="2">
        <div class="circle-num-box">
            <div class="ey-num-box">
                <input type="button" value="01" class="code d min"/>
                <input type="button" value="02" class="code s min"/>
                <input type="button" value="03" class="code d min"/>
                <input type="button" value="04" class="code s min"/>
                <input type="button" value="05" class="code d min"/>
                <input type="button" value="06" class="code s min"/>
                <input type="button" value="07" class="code d min"/>
                <input type="button" value="08" class="code s min"/>
                <input type="button" value="09" class="code d min"/>
                <input type="button" value="10" class="code s min"/>
                <input type="button" value="11" class="code d max"/>
                <input type="button" value="12" class="code s max"/>
                <input type="button" value="13" class="code d max"/>
                <input type="button" value="14" class="code s max"/>
                <input type="button" value="15" class="code d max"/>
                <input type="button" value="16" class="code s max"/>
                <input type="button" value="17" class="code d max"/>
                <input type="button" value="18" class="code s max"/>
                <input type="button" value="19" class="code d max"/>
                <input type="button" value="20" class="code s max"/>
            </div>
            <div class="ey-select-box">
                <input type="button" value="清" class="action none"/>
                <input type="button" value="双" class="action even"/>
                <input type="button" value="单" class="action odd"/>
                <input type="button" value="小" class="action small"/>
                <input type="button" value="大" class="action large"/>
                <input type="button" value="全" class="action all"/>
            </div>
        </div>
    </div>
    <div class="dmtm unique" style="display:none;">
        <div class="pp pp11">
            <div class="title">胆码</div>
            <div class="circle-num-box">
                <div class="ey-num-box">
                    <input type="button" value="01" action="dt_d" max="1" class="code d min"/>
                    <input type="button" value="02" action="dt_d" max="1" class="code s min"/>
                    <input type="button" value="03" action="dt_d" max="1" class="code d min"/>
                    <input type="button" value="04" action="dt_d" max="1" class="code s min"/>
                    <input type="button" value="05" action="dt_d" max="1" class="code d min"/>
                    <input type="button" value="06" action="dt_d" max="1" class="code s min"/>
                    <input type="button" value="07" action="dt_d" max="1" class="code d min"/>
                    <input type="button" value="08" action="dt_d" max="1" class="code s min"/>
                    <input type="button" value="09" action="dt_d" max="1" class="code d min"/>
                    <input type="button" value="10" action="dt_d" max="1" class="code s min"/>
                    <input type="button" value="11" action="dt_d" max="1" class="code d max"/>
                    <input type="button" value="12" action="dt_d" max="1" class="code s max"/>
                    <input type="button" value="13" action="dt_d" max="1" class="code d max"/>
                    <input type="button" value="14" action="dt_d" max="1" class="code s max"/>
                    <input type="button" value="15" action="dt_d" max="1" class="code d max"/>
                    <input type="button" value="16" action="dt_d" max="1" class="code s max"/>
                    <input type="button" value="17" action="dt_d" max="1" class="code d max"/>
                    <input type="button" value="18" action="dt_d" max="1" class="code s max"/>
                    <input type="button" value="19" action="dt_d" max="1" class="code d max"/>
                    <input type="button" value="20" action="dt_d" max="1" class="code s max"/>
                </div>
            </div>
        </div>
        <div class="pp pp11">
            <div class="title">拖码</div>
            <div class="circle-num-box">
                <div class="ey-num-box">
                    <input type="button" value="01" class="code d min"/>
                    <input type="button" value="02" class="code s min"/>
                    <input type="button" value="03" class="code d min"/>
                    <input type="button" value="04" class="code s min"/>
                    <input type="button" value="05" class="code d min"/>
                    <input type="button" value="06" class="code s min"/>
                    <input type="button" value="07" class="code d min"/>
                    <input type="button" value="08" class="code s min"/>
                    <input type="button" value="09" class="code d min"/>
                    <input type="button" value="10" class="code s min"/>
                    <input type="button" value="11" class="code d max"/>
                    <input type="button" value="12" class="code s max"/>
                    <input type="button" value="13" class="code d max"/>
                    <input type="button" value="14" class="code s max"/>
                    <input type="button" value="15" class="code d max"/>
                    <input type="button" value="16" class="code s max"/>
                    <input type="button" value="17" class="code d max"/>
                    <input type="button" value="18" class="code s max"/>
                    <input type="button" value="19" class="code d max"/>
                    <input type="button" value="20" class="code s max"/>
                </div>
                <div class="ey-select-box">
                    <input type="button" value="清" class="action none"/>
                    <input type="button" value="双" action="dt_t" class="action even"/>
                    <input type="button" value="单" action="dt_t" class="action odd"/>
                    <input type="button" value="小" action="dt_t" class="action small"/>
                    <input type="button" value="大" action="dt_t" class="action large"/>
                    <input type="button" value="全" action="dt_t" class="action all"/>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$maxPl = $this->get_play_bonus($play_id);
?>
<script type="text/javascript">
    $(function () {
        lottery.set_play_Pl(<?php echo json_encode($maxPl);?>);
    })
</script>

