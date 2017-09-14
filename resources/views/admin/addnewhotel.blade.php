@extends('admin.admin')
@section('action','Thêm tài khoản')
@section('controller','Tài khoản')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form id="summary-form" action="forms-validation.html" class="form-horizontal">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Thêm mới khách sạn</h2>
                        <p class="panel-subtitle">
                            Vui lòng điền đầy đủ thông tin khách sạn theo mẫu bên dưới!
                        </p>
                    </header>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Tên khách sạn <span class="required">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="fullname" class="form-control" placeholder="Please enter a name." required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Điện thoại <span class="required">*</span></label>
                                <div class="col-sm-8">
                                    <input type="number" name="phone" title="Số bạn điền không đúng mã vùng" class="form-control" min="0" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Di động</label>
                                <div class="col-sm-8">
                                    <input type="number" name="cellphone" title="Số bạn điền không thuộc nhà mạng nào." min="0" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Tỉnh thành</label>
                                <div class="col-sm-8">
                                    <select id="company" class="form-control" required>
                                        <option value="">Chọn tỉnh/thành phố</option>
                                        <option value="">Hà Nội</option>
                                        <option value="">Tp. Hồ Chí Minh</option>
                                        <option value="">Vũng Tàu</option>
                                        <option value="">Nha Trang</option>
                                    </select>
                                    <label class="error" for="city"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Quận huyện</label>
                                <div class="col-sm-8">
                                    <select id="company" class="form-control" required>
                                        <option value="">Chọn quận/huyện</option>
                                        <option value="">Hà Nội</option>
                                        <option value="">Tp. Hồ Chí Minh</option>
                                        <option value="">Vũng Tàu</option>
                                        <option value="">Nha Trang</option>
                                    </select>
                                    <label class="error" for="district"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Loại khách sạn</label>
                                <div class="col-sm-8">
                                    <select id="company" class="form-control" required>
                                        <option value="">Chọn loại khách sạn</option>
                                        <option value="">Khách sạn 1 sao</option>
                                        <option value="">Khách sạn 2 sao</option>
                                        <option value="">Khách sạn 3 sao</option>
                                        <option value="">Khách sạn 5 sao</option>
                                    </select>
                                    <label class="error" for="hoteltype"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Địa chỉ <span class="required">*</span></label>
                                <div class="col-sm-8">
                                    <textarea name="address" rows="3" class="form-control" placeholder="Enter your address" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Ngày hợp đồng <span class="required">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" data-plugin-datepicker class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Loại hợp đồng</label>
                                <div class="col-sm-8">
                                    <select id="company" class="form-control" required>
                                        <option value="">Chọn loại hợp đồng</option>
                                        <option value="">3 tháng</option>
                                        <option value="">6 tháng</option>
                                        <option value="">1 năm</option>
                                        <option value="">Trên 1 năm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Hình đại diện</label>
                                <div class="col-md-8">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-append">
                                            <div class="uneditable-input">
                                                <i class="fa fa-file fileupload-exists"></i>
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileupload-exists">Thay đổi</span>
                                                <span class="fileupload-new">Chọn ảnh</span>
                                                <input type="file" />
                                            </span>
                                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Xóa</a>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-append">
                                            <div class="uneditable-input">
                                                <i class="fa fa-file fileupload-exists"></i>
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileupload-exists">Thay đổi</span>
                                                <span class="fileupload-new">Chọn ảnh</span>
                                                <input type="file" />
                                            </span>
                                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Xóa</a>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-append">
                                            <div class="uneditable-input">
                                                <i class="fa fa-file fileupload-exists"></i>
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileupload-exists">Thay đổi</span>
                                                <span class="fileupload-new">Chọn ảnh</span>
                                                <input type="file" />
                                            </span>
                                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Xóa</a>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-append">
                                            <div class="uneditable-input">
                                                <i class="fa fa-file fileupload-exists"></i>
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileupload-exists">Thay đổi</span>
                                                <span class="fileupload-new">Chọn ảnh</span>
                                                <input type="file" />
                                            </span>
                                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Xóa</a>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-append">
                                            <div class="uneditable-input">
                                                <i class="fa fa-file fileupload-exists"></i>
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileupload-exists">Thay đổi</span>
                                                <span class="fileupload-new">Chọn ảnh</span>
                                                <input type="file" />
                                            </span>
                                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Xóa</a>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-append">
                                            <div class="uneditable-input">
                                                <i class="fa fa-file fileupload-exists"></i>
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileupload-exists">Thay đổi</span>
                                                <span class="fileupload-new">Chọn ảnh</span>
                                                <input type="file" />
                                            </span>
                                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Xóa</a>
                                        </div>
                                    </div>
                                    <br/>
                                </div>                              
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Website <span class="required">*</span></label>
                                <div class="col-sm-8">
                                    <input type="video" name="" class="form-control" placeholder="Enter a name for your website" required/>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tiện nghi <span class="required">*</span></label>
                                <div class="col-sm-9 convenient">
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]"/>
                                        <label><img src="images/wifi.png" alt=""/> Wifi</label>
                                    </div>
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label><img src="images/maygiat.jpg" alt=""/> Máy giặt</label>
                                    </div>
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label><img src="images/hanhly.png" alt=""/> Vận chuyển hành lý</label>
                                    </div>
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label><img src="images/thangmay.jpg" alt=""/> Thang máy</label>
                                    </div>
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label><img src="images/nhahang.png" alt=""/> Nhà hàng</label>
                                    </div>
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label><img src="images/massage.png" alt=""/> Massage</label>
                                    </div>
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label><img src="images/bar.jpg" alt=""/> Quầy bar</label>
                                    </div>
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label><img src="images/tivi.png" alt=""/> Tivi</label>
                                    </div>
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label><img src="images/chodexe.jpg" alt=""/> Chỗ để xe</label>
                                    </div>
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label><img src="images/nonglanh.png" alt=""/> Nóng lạnh</label>
                                    </div>
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label><img src="images/thuexe.png" alt=""/> Thuê xe đạp/máy</label>
                                    </div>
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" value="" type="checkbox" name="for[]" />
                                        <label><img src="images/tulanh.jpg" alt=""/> Tủ lạnh</label>
                                    </div>
                                    <label class="error" for="for[]"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Vị trí</label>
                                <div class="col-sm-9 position">
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" name="" type="checkbox" value=""/>
                                        <label for="">Gần biển</label>
                                    </div>                                   
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" name="" type="checkbox" value=""/>
                                        <label for="">Gần siêu thị</label>
                                    </div>                                   
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" name="" type="checkbox" value=""/>
                                        <label for="">Gần chợ</label>
                                    </div>                                   
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" name="" type="checkbox" value=""/>
                                        <label for="">Mặt tiền biển</label>
                                    </div>                                   
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" name="" type="checkbox" value=""/>
                                        <label for="">Gần sân bay</label>
                                    </div>                                   
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" name="" type="checkbox" value=""/>
                                        <label for="">Gần công viên</label>
                                    </div>                                   
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" name="" type="checkbox" value=""/>
                                        <label for="">Gần bến xe</label>
                                    </div>                                   
                                    <div class="checkbox-custom chekbox-primary">
                                        <input id="" name="" type="checkbox" value=""/>
                                        <label for="">Gần trường đại học</label>
                                    </div>                                   
                                    <label class="error" for="porto_is"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="text-center">
                                <button class="btn btn-primary">Thêm</button>
                                <button type="reset" class="btn btn-default">Hủy</button>
                            </div>
                        </div>
                    </footer>
                </section>
            </form>
        </div>
    </div>
    <!-- end: page -->
@endsection