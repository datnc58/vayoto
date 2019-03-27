<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>

<div class="wapper">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Vay tín dụng</button>
</div>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<div class="modal-body dichvu">
                <h1>Xin chào <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/votay.png"> Vui lòng cho Thebank biết 1 vài thông tin của bạn nhé!</h1>
                <p class="text-option">Chọn dịch vụ bạn cần tư vấn</p>
                <form id="VayOtoFrom">
                    <div class="step1" id="step1">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <div class="optionService thetindung">
                                    <input type="radio" name="option" id="thetindung" class="input-hidden" value="1">
                                    <label for="thetindung">
                                        <div class="icon-bg icon-bg-thetindung">
                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/ic1.png">
                                        </div>
                                        <p>Thẻ tín dụng</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="optionService vaytincbap">
                                    <input type="radio" name="option" id="vaytincbap" class="input-hidden" value="2">
                                    <label for="vaytincbap">
                                        <div class="icon-bg icon-bg-vaytincbap">
                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/ic2.png">
                                        </div>
                                        <p>Vay tín chấp</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="optionService vaymuanha">
                                    <input type="radio" name="option" id="vaymuanha" class="input-hidden" value="3">
                                    <label for="vaymuanha">
                                        <div class="icon-bg icon-bg-vaymuanha">
                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/ic3.png">
                                        </div>
                                        <p>Vay   mua nhà</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="optionService vaythechap">
                                    <input type="radio" name="option" id="vaythechap" class="input-hidden" value="4">
                                    <label for="vaythechap">
                                        <div class="icon-bg icon-bg-vaythechap">
                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/ic4.png">
                                        </div>
                                        <p>Vay   thế chấp</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <div class="optionService vaymuaxe">
                                    <input type="radio" name="option" id="vaymuaxe" class="input-hidden" value="5">
                                    <label for="vaymuaxe">
                                        <div class="icon-bg icon-bg-vaymuaxe">
                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/ic5.png">
                                        </div>
                                        <p>Vay mua   xe</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="optionService guitietkiem">
                                    <input type="radio" name="option" id="guitietkiem" class="input-hidden" value="6">
                                    <label for="guitietkiem">
                                        <div class="icon-bg icon-bg-guitietkiem">
                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/ic6.png">
                                        </div>
                                        <p>Gửi Tiết Kiệm</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="optionService baohiemnhantho">
                                    <input type="radio" name="option" id="baohiemnhantho" class="input-hidden" value="7">
                                    <label for="baohiemnhantho">
                                        <div class="icon-bg icon-bg-baohiemnhantho">
                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/ic7.png">
                                        </div>
                                        <p>Bảo   hiểm    nhân    thọ</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="optionService baohiemoto">
                                    <input type="radio" name="option" id="baohiemoto" class="input-hidden" value="8">
                                    <label for="baohiemoto">
                                        <div class="icon-bg icon-bg-baohiemoto">
                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/ic8.png">
                                        </div>
                                        <p>Bảo   hiểm    ô   tô</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <div class="optionService baohiemdulich">
                                    <input type="radio" name="option" id="baohiemdulich" class="input-hidden" value="9">
                                    <label for="baohiemdulich">
                                        <div class="icon-bg icon-bg-baohiemdulich">
                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/ic9.png">
                                        </div>
                                        <p>Bảo   hiểm    du  lịch</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="optionService baohiemnha">
                                    <input type="radio" name="option" id="baohiemnha" class="input-hidden" value="10">
                                    <label for="baohiemnha">
                                        <div class="icon-bg icon-bg-baohiemnha">
                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/ic10.png">
                                        </div>
                                        <p>Bảo   hiểm    nhà</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="optionService baohiembenhhiemngheo">
                                    <input type="radio" name="option" id="baohiembenhhiemngheo" class="input-hidden" value="11">
                                    <label for="baohiembenhhiemngheo">
                                        <div class="icon-bg icon-bg-baohiembenhhiemngheo">
                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/ic11.png">
                                        </div>
                                        <p>Bảo   hiểm    bệnh    hiểm    nghèo</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="optionService baohiemsuckhoe">
                                    <input type="radio" name="option" id="baohiemsuckhoe" class="input-hidden" value="12">
                                    <label for="baohiemsuckhoe">
                                        <div class="icon-bg icon-bg-baohiemsuckhoe">
                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/ic12.png">
                                        </div>
                                        <p>Bảo   hiểm    sức khỏe</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix-70"></div>
                        <p class="text-option">Địa  chỉ của bạn</p>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <?php echo CHtml::dropDownList('province', '', CHtml::listData($listProvince, 'id', 'province_name'), array(
                                    'class' => 'form-control form-group-select select-right',
                                    'prompt'=>'Tỉnh',
                                    'ajax' => array(
                                        'type'=>'POST',
                                        'url'=> CController::createUrl('Site/Districts'),
                                        'update'=>'#district',
                                        'data'=>array('province_id'=>'js:this.value'),
                                    )));
                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                                echo CHtml::dropDownList('district','', array(), array(
                                    'class' => 'form-control form-group-select select-left',
                                    'prompt'=>'Thành phố'
                                ));
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="step2" id="step2">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="info-right">
                                    <label class="text-from-center">Họ và Tên</label>
                                    <?php
                                    echo CHtml::textField('full_name','',array('class' => 'form-control form-group-select select-right'));
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-left">
                                    <label class="text-from-center">Số điện thoại</label>
                                    <?php
                                    echo CHtml::textField('phone','',array('class' => 'form-control form-group-select select-left'));
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="info-right">
                                    <label class="text-from-center">Email</label>
                                    <?php
                                    echo CHtml::textField('email','',array('class' => 'form-control form-group-select select-right'));
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-left">
                                    <label class="text-from-center">Ngày/Tháng/Năm Sinh</label>
                                    <?php
                                    echo CHtml::textField('birthday','',array('class' => 'form-control form-group-select select-left'));
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="step3" id="step3">
                        <div class="form-group row">
                            <p class="text-option" style="width: 100%; padding-bottom: 0">Bạn đã vay ở đâu chưa ?</p>
                            <div class="col-md-12">
                                <div style="width: 300px; margin: 0 auto">
                                    <ul class="radio-check">
                                        <li>
                                            <input type="radio" id="davay" name="davaychua" value="0" checked>
                                            <label for="davay">Có</label>
                                            <div class="check"></div>
                                        </li>
                                        <li>
                                            <input type="radio" id="chuavay" name="davaychua" value="1">
                                            <label for="chuavay">Chưa</label>
                                            <div class="check"><div class="inside"></div></div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <p class="text-option" style="width: 100%; padding-bottom: 0">Khoản vay đã từng chậm trả quá 10 ngày chưa ?</p>
                            <div class="col-md-12">
                                <div style="width: 300px; margin: 0 auto">
                                    <ul class="radio-check">
                                        <li>
                                            <input type="radio" id="chacham" name="chachamchua" value="0">
                                            <label for="chacham">Có</label>
                                            <div class="check"></div>
                                        </li>
                                        <li>
                                            <input type="radio" id="chadung" name="chachamchua" value="1" checked>
                                            <label for="chadung">Chưa</label>
                                            <div class="check"><div class="inside"></div></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step4" id="step4">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="info-right">
                                    <label class="text-from-center">Dư nợ hiện tại</label>
                                    <?php
                                    echo CHtml::textField('current_debt','',array('class' => 'form-control form-group-select select-right'));
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-left">
                                    <label class="text-from-center">Tại ngân hàng</label>
                                    <?php
                                    echo CHtml::textField('bank_home','',array('class' => 'form-control form-group-select select-left'));
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step5" id="step5">
                        <div class="form-group row">
                            <p class="text-option" style="width: 100%">Mức thu nhập: <span id="demo"></span> VNĐ</p>
                            <div class="slidecontainer">
                                <input type="range" name="income" min="3" max="100" value="50" class="slider" id="myRange">

                                <div class="price-min-max">
                                    <span class="price-min">3.000.000</span>
                                    <span class="price-max">100.000.000</span>
                                </div>
                                <div class="slider-track" id="income"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="info-right">
                                    <label class="text-from-center">Hình thức nhận lương</label>
                                    <?php echo CHtml::dropDownList('paymentOfWages', '', CHtml::listData($listProvince, 'id', 'province_name'), array(
                                        'class' => 'form-control form-group-select select-right',
                                        'prompt'=>'Tiền mặt',
                                    ));
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-left">
                                    <label class="text-from-center">Tài sản thế chấp khác</label>
                                    <?php echo CHtml::dropDownList('Collateral', '', CHtml::listData($listProvince, 'id', 'province_name'), array(
                                        'class' => 'form-control form-group-select select-left',
                                        'prompt'=>'Sổ tiết kiệm',
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="info-right">
                                    <label class="text-from-center">Loại hình công việc</label>
                                    <?php
                                    echo CHtml::textField('type_of_work','',array('class' => 'form-control form-group-select select-right'));
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-left">
                                    <label class="text-from-center">Thời gian làm việc</label>
                                    <?php
                                    echo CHtml::textField('year_of_service','',array('class' => 'form-control form-group-select select-left'));
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step6" id="step6">
                        <div class="form-group row">
                            <p class="text-option" style="width: 100%">Khoản vay đề nghị: <span id="demo2"></span> VNĐ</p>
                            <div class="slidecontainer">
                                <input type="range" name="recommended-loan" min="3" max="100" value="50" class="slider" id="myRange2">

                                <div class="price-min-max">
                                    <span class="price-min">3.000.000</span>
                                    <span class="price-max">100.000.000</span>
                                </div>
                                <div class="slider-track" id="recommended-loan"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="info-right">
                                    <label class="text-from-center">Thời gian muốn vay</label>
                                    <?php echo CHtml::dropDownList('paymentOfWages', '', CHtml::listData($listProvince, 'id', 'province_name'), array(
                                        'class' => 'form-control form-group-select select-right',
                                        'prompt'=>'Tiền mặt',
                                    ));
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-left">
                                    <label class="text-from-center">Mục đích sử dụng xe</label>
                                    <?php echo CHtml::dropDownList('Collateral', '', CHtml::listData($listProvince, 'id', 'province_name'), array(
                                        'class' => 'form-control form-group-select select-left',
                                        'prompt'=>'Sổ tiết kiệm',
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>

                        <p class="text-option" style="width: 100%">Thông tin bạn cần phải cung cấp</p>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="info-right">
                                    <label class="text-from-center">Thời tin cá nhân</label>
                                    <?php echo CHtml::dropDownList('paymentOfWages', '', CHtml::listData($listProvince, 'id', 'province_name'), array(
                                        'class' => 'form-control form-group-select select-right',
                                        'prompt'=>'Tiền mặt',
                                    ));
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-left">
                                    <label class="text-from-center">Chứng minh nơi ở</label>
                                    <?php echo CHtml::dropDownList('Collateral', '', CHtml::listData($listProvince, 'id', 'province_name'), array(
                                        'class' => 'form-control form-group-select select-left',
                                        'prompt'=>'Sổ tiết kiệm',
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="info-right">
                                    <label class="text-from-center">Chứng minh tài chính</label>
                                    <?php echo CHtml::dropDownList('paymentOfWages', '', CHtml::listData($listProvince, 'id', 'province_name'), array(
                                        'class' => 'form-control form-group-select select-right',
                                        'prompt'=>'Tiền mặt',
                                    ));
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-left">
                                    <label class="text-from-center">Chứng minh công việc</label>
                                    <?php echo CHtml::dropDownList('Collateral', '', CHtml::listData($listProvince, 'id', 'province_name'), array(
                                        'class' => 'form-control form-group-select select-left',
                                        'prompt'=>'Sổ tiết kiệm',
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step7" id="step7">
                        <div class="form-group row oto">
                            <div class="col-md-6">
                                <div class="info-right">
                                    <?php echo CHtml::dropDownList('cars_nha', '',
                                        CHtml::listData([
                                            0 => ['id' => 1, 'car_name' => 'Ô tô'],
                                            1 => ['id' => 2, 'car_name' => 'Nhà']
                                        ], 'id', 'car_name'),
                                        array(
                                        'class' => 'form-control form-group-select select-right'
                                    ));
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-left">
                                    <?php echo CHtml::dropDownList('car_brand', '', CHtml::listData([0 => ['id' => 1, 'car_brand_name' => 'Mới']], 'id', 'car_brand_name'), array(
                                        'class' => 'form-control form-group-select select-left',
                                        'prompt'=>'Thương hiệu xe',
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row oto">
                            <div class="col-md-6">
                                <div class="info-right">
                                    <?php echo CHtml::textField('bank_home','',array('class' => 'form-control form-group-select select-right', 'placeholder ' => 'Năm sản xuất')); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-left">
                                    <?php echo CHtml::dropDownList('car_status', '', CHtml::listData([0 => ['id' => 1, 'car_status_name' => 'Mới']], 'id', 'car_status_name'), array(
                                        'class' => 'form-control form-group-select select-left',
                                        'prompt'=>'Tình trạng xe',
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row oto">
                            <div class="col-md-6">
                                <div class="info-right">
                                    <?php echo CHtml::dropDownList('car_type', '', CHtml::listData([0 => ['id' => 1, 'car_type_name' => 'SUV']], 'id', 'car_type_name'), array(
                                        'class' => 'form-control form-group-select select-right',
                                        'prompt'=>'Loại xe',
                                    ));
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-left">
                                    <?php echo CHtml::dropDownList('vehicles', '', CHtml::listData([0 => ['id' => 1, 'vehicles_name' => 'S500']], 'id', 'vehicles_name'), array(
                                        'class' => 'form-control form-group-select select-left',
                                        'prompt'=>'Dòng xe',
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row oto">
                            <div class="col-md-6">
                                <div class="info-right">
                                    <?php echo CHtml::textField('bank_home','',array('class' => 'form-control form-group-select select-right', 'placeholder ' => 'Tên chủ sử hữu trên giấy tờ xe')); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-left">
                                    <?php echo CHtml::textField('bank_home','',array('class' => 'form-control form-group-select select-left', 'placeholder ' => 'Giá bao gồm thuế (VNĐ)')); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row nha div-hidden">
                            <div class="col-md-6">
                                <div class="info-right">
                                    <?php echo CHtml::dropDownList('cars', '', CHtml::listData([0 => ['id' => 1, 'car_name' => 'Ô tô']], 'id', 'car_name'), array(
                                        'class' => 'form-control form-group-select select-right',
                                        'prompt'=>'Tải sản đảm bảo',
                                    ));
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-left">
                                    <?php echo CHtml::textField('address_nha','',array('class' => 'form-control form-group-select select-left', 'placeholder ' => 'Nhập địa chỉ')); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row nha div-hidden">
                            <div class="col-md-6">
                                <div class="info-right">
                                    <?php echo CHtml::textField('dientich_nha','',array('class' => 'form-control form-group-select select-right', 'placeholder ' => 'Diện tích nhà')); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-left">
                                    <?php echo CHtml::textField('price_nha','',array('class' => 'form-control form-group-select select-left', 'placeholder ' => 'Giá ước tính')); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step8" id="step8">

                    </div>
                    <div class="step9" id="step9"></div>
                    <div class="step10" id="step10"></div>
                    <input id="setValue" type="hidden" value="1">
                </form>
                <div class="clearfix-70"></div>
			</div>

            <div class="modal-footer">
                <div class="confirm">
                    <div class="prev">
                        <button type="button" class="btn btn-primary button-next-prev select-right" id="prevStep">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/prev.png">
                        </button>
                    </div>
                    <div class="ketqua">
                        <p id="phantram" class="phantram">5%</p>
                    </div>
                    <div class="next">
                        <button type="button" class="btn btn-primary button-next-prev select-left" id="nextStep">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/next.png">
                        </button>
                    </div>
                </div>
            </div>
            <div class="clearfix-70"></div>
		</div>
	</div>
</div>
