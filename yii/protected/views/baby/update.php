<div class="profile">
    <div class="profile_form">
        <div class="profile_formpho">
            <div class="make_pho">
                <img src="<?=Yii::app()->baseUrl . $record= $record ? $record->avatar : '/images/make_updemo.jpg'?>" />
                <div class="make_phobg make_phobg2"></div>
            </div>
        </div>
        <div class="profile_fromcom">
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'baby-update-form',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // See class documentation of CActiveForm for details on this,
                // you need to use the performAjaxValidation()-method described there.
                'enableAjaxValidation'=>false,
            )); ?>
            <?php echo $form->textField($model,'name',array('class'=>'profile_ipt profile_name')); ?>
            <?php echo $form->textField($model,'city',array('class'=>'profile_ipt profile_city')); ?>
            <?php echo $form->textField($model,'nickname',array('class'=>'profile_ipt profile_nick')); ?>
            <?php echo $form->textField($model,'address',array('class'=>'profile_ipt profile_add')); ?>
            <?php echo $form->textField($model,'sex',array('class'=>'profile_ipt profile_sex')); ?>
            <?php echo $form->textField($model,'tel',array('class'=>'profile_ipt profile_tel')); ?>
            <p class="profile_seltxt profile_selyear_txt">2011</p>
                <select name="Baby[year]" class="profile_sel profile_selyear">
                    <option>2010</option>
                    <option>2011</option>
                </select>
                <p class="profile_seltxt profile_selmon_txt"></p>
                <select name="Baby[mon]" class="profile_sel profile_selmon">
                    <option>1</option>
                    <option>2</option>
                </select>
                <p class="profile_seltxt profile_selday_txt"></p>
                <select name="Baby[day]" class="profile_sel profile_selday">
                    <option>1</option>
                    <option>2</option>
                </select>
        </div>
    </div>
    <!--  -->
    <div class="profile_txt">
        <div class="profile_txttit">
            <h1>您为何希望加入“千家万护”行动？</h1>
            <p>欢迎写下您的原因、描述宝宝病情或私人感想，增进我们对患病宝宝与您家庭的了解。</p>
        </div>
        <div class="profile_txtcom">
            <?php echo $form->textArea($model,'reason',array('class'=>'profile_txtcom')); ?>
        </div>
    </div>
    <!--  -->
    <div class="profile_hosp">
        <p class="profile_seltxt profile_selcity_txt">选择城市</p>
        <select name="Baby[point_city]" class="profile_sel profile_selcity">
            <option>北京</option>
            <option>哈尔滨</option>
        </select>
        <p class="profile_seltxt profile_selhosp_txt">选择医院</p>
        <select name="Baby[point_hospital]" class="profile_sel profile_selhosp">
            <option>北京</option>
            <option>哈尔滨</option>
        </select>
    </div>
    <a href="javascript:void(0)" class="profile_btn"></a>
    <?php $this->endWidget(); ?>
    <!--  -->
</div>
<script>
    $(document).ready(function(){
        $(".profile_btn").click(function(){
                $("#baby-update-form").submit();
            });
        });
</script>