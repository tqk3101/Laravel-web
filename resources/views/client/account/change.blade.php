@extends('layouts.master')
@section('title', 'Graphics Tablet - Home')

@section('client')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{URL::asset('img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Đổi mật khẩu</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Trang chủ</a>
                            <a href="/user/profile/<?=$user->id?>">Tài khoản</a>
                            <span>Đổi mật khẩu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    @if(Auth::user())
        <div class="container bootstrap snippets bootdey mb-5">
            <div class="row">
                <div class="profile-nav col-md-3">
                    <div class="panel">
                        <div class="user-heading round">
                            <a href="#">
                                <img src="{{URL::asset('/upload/users/'.$user->avatar)}}" alt="">
                            </a>
                            <h1 class="text-white font-weight-bold pt-2">{{ $user->name }}</h1>
                            <p class="text-white">{{ $user->email }}</p>
                        </div>
                        <ul class="nav-pills nav-stacked">
                            <li><a href="/user/profile/<?=$user->id?>"> <i class="fa fa-user text-danger"></i> Tài khoản</a></li>
                            <li><a href="/user/profile/edit/<?=$user->id?>"> <i class="fa fa-edit text-danger"></i> Cập nhật tài khoản</a></li>
                            <li  class="active"><a href="/user/profile/change-pass/<?=$user->id?>"> <i class="fa fa-unlock-alt text-danger" aria-hidden="true"></i> Đổi mật khẩu</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off text-danger" aria-hidden="true"></i>
                                    {{ __('Đăng xuất') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        </ul>
                    </div>
                </div>
                <div class="profile-info col-md-9">
                    <div class="panel">
                        <div class="bio-graph-heading">
                            {{ $user->name }} thân mến. Mình chỉ muốn cảm ơn bạn bởi bạn là khách hàng quan trọng của chúng tôi. Nếu bạn có bất cứ điều gì hãy cho chúng tôi biết, chúng tôi sẽ cố gắng để đáp ứng nhu cầu của bạn.
                        </div>
                        <div class="panel-body bio-graph-info pl-3 pr-3">
                            <h1 class="mt-4 pl-2" style="border-left: 5px solid #E53935;">CẬP NHẬT TÀI KHOẢN</h1>
                            <div class="contact-form pt-0 pb-2">
                                <div class="container">
                                    <form action="#" class="form-update-account">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 update-account-item">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Username</span>
                                                    </div>
                                                    <input type="text" class="form-control" name="username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 update-account-item">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Email</span>
                                                    </div>
                                                    <input type="text" class="form-control" name="email" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 update-account-item">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Mật khẩu mới</span>
                                                    </div>
                                                    <input type="password" class="form-control" name="new_pass" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 update-account-item">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Xác nhận mật khẩu</span>
                                                    </div>
                                                    <input type="text" class="form-control" name="c_pass" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 pt-3">
                                                <button type="submit" class="site-btn">ĐỔI</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@stop
