@extends('admin.layout.admin')
@section('action','Thêm tài khoản')
@section('controller','Tài khoản')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Danh tài khoản</h2>
        </header>
        <div class="panel-body">           

            <div class="row" style="margin-bottom: 1em;">
                <form class="form-inline text-left col-md-12" role="form">
                    <div class="form-group">
                        <a href="{{asset('admin/addUser')}}" class="btn btn-primary btn-sm">Thêm mới</a>
                    </div>
                </form>
            </div>
            <br/>
            <div class="table-responsive">
            <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Họ và tên</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Tài khoản</th>
                        <th>Lựa chọn</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(!empty($listUser)){
                        $number = 0;
                        foreach($listUser as $data){
                        $number++;
                    ?>
                    <tr class="gradeX">
                        <td>{{$number}}</td>
                        <td>{{$data['name']}}</td>
                        <td>{{$data['email']}}</td>
                        <td>{{$data['phone']}}</td>
                        <td>{{$data['account']}}</td>
                        <td class="actions">
                            <a href="{{asset('admin/editUser').'/'.$data["id"]}}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                            <a href="{{asset('admin/deleteUser').'/'.$data["id"]}}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <?php
                        }
                    }

                    ?>


                </tbody>
            </table>
            </div>
        </div>
    </section>
@endsection
