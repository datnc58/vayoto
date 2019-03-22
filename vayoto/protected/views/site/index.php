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
                <form>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <div class="optionService thetindung">
                                <input type="radio" name="option" id="thetindung" class="input-hidden">
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
                                <input type="radio" name="option" id="vaytincbap" class="input-hidden">
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
                                <input type="radio" name="option" id="vaymuanha" class="input-hidden">
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
                                <input type="radio" name="option" id="vaythechap" class="input-hidden">
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
                                <input type="radio" name="option" id="vaymuaxe" class="input-hidden">
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
                                <input type="radio" name="option" id="guitietkiem" class="input-hidden">
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
                                <input type="radio" name="option" id="baohiemnhantho" class="input-hidden">
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
                                <input type="radio" name="option" id="baohiemoto" class="input-hidden">
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
                                <input type="radio" name="option" id="baohiemdulich" class="input-hidden">
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
                                <input type="radio" name="option" id="baohiemnha" class="input-hidden">
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
                                <input type="radio" name="option" id="baohiembenhhiemngheo" class="input-hidden">
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
                                <input type="radio" name="option" id="baohiemsuckhoe" class="input-hidden">
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
                            <select class="form-control form-group-select select-right">
                                <option>Tỉnh</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control form-group-select select-left">
                                <option>Thành Phố</option>
                            </select>
                        </div>
                    </div>
                </form>
                <div class="clearfix-70"></div>
			</div>

            <div class="modal-footer">
                <div class="confirm">
                    <div class="prev">
                        <button type="button" class="btn btn-primary button-next-prev select-right">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/prev.png">
                        </button>
                    </div>
                    <div class="ketqua">
                        <p id="phantram" class="phantram">5%</p>
                    </div>
                    <div class="next">
                        <button type="button" class="btn btn-primary button-next-prev select-left">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/next.png">
                        </button>
                    </div>
                </div>
            </div>
            <div class="clearfix-70"></div>
		</div>
	</div>
</div>
