@extends('admin.layout.admin')
@section('action','Thêm tài khoản')
@section('controller','Tài khoản')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form id="summary-form" action="" method="POST" class="form-horizontal">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Thêm mới</h2>
                        <p class="panel-subtitle">
                            Vui lòng điền đầy đủ thông tin  theo mẫu bên dưới!
                        </p>
                    </header>
                    <div class="panel-body">
                        <div class=" col-md-3"></div>
                        <div class=" col-md-6">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Họ và tên <span class="required">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="fullName" class="form-control" placeholder="Nhập họ và tên" value="{{old('fullName')}}" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Email <span class="required">*</span></label>
                                <div class="col-sm-8">
                                    <input type="email" name="email"  class="form-control" min="0"  placeholder="Nhập email" value="{{old('email')}}" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Di động</label>
                                <div class="col-sm-8">
                                    <input type="number" name="phone"  min="0" class="form-control"  placeholder="Nhập số điện thoại" value="{{old('phone')}}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">vatar<span class="required">*</span></label>
                                <div class="col-sm-8">
                                    <?php showUploadFile('avatar','avatar','',0);?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Tài khoản<span class="required">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="account" class="form-control"  placeholder="Nhập tài khoản" value="{{old('account')}}" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Mật khẩu<span class="required">*</span></label>
                                <div class="col-sm-8">
                                    <input type="password" name="password"class="form-control"  placeholder="Nhập mật khẩu" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Nhập lại mật khẩu<span class="required">*</span></label>
                                <div class="col-sm-8">
                                    <input type="password" name="passwordAgain" class="form-control" placeholder="Nhập lại mật khẩu" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="text-center">
                                <button class="btn btn-primary" type="submit">Thêm</button>
                            </div>
                        </div>
                    </footer>
                </section>
            </form>
        </div>
    </div>
    <!-- end: page -->
@endsection