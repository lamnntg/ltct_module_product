<!-- Header -->
<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            <li><i class="ti-headphone-alt"></i>0869xxxxxx</li>
                            <li><i class="ti-email"></i> support@shopabc.com</li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-8 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                            @if(session('user'))
                                <li><i class="ti-user"></i> <a href="">{{json_decode(session('user'))->user->name}}</a></li>
                                <li><i class="ti-shopping-cart"></i> <a href="#">Lịch sử mua hàng</a></li>
                                <li><i class="ti-user"></i> <a href="{{route('product.logout')}}">Đăng xuất</a></li>
                            @else
                                <li><i class="ti-user"></i> <a href="{{url('http://laravel-login-site.herokuapp.com/administration/register')}}">Đăng ký</a></li>
                                <li><i class="ti-power-off"></i><a href="{{url('http://laravel-login-site.herokuapp.com/administration/login')}}">Đăng nhập</a></li>
                            @endif
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="#"><img src="{{asset("web/images/logo.png")}}" alt="logo"></a>
                    </div>
                    <!--/ End Logo -->
                    <!-- Search Form -->
                    <div class="search-top">
                        <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                        <!-- Search Form -->
                        <div class="search-top" method>
                            <form class="search-form" method="post" action="{{ route('products') }}">
                                @csrf
                                <input type="text" placeholder="Nhập từ khóa" name="search" value="{{old('search')}}">
                                <button value="search" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                    <!--/ End Search Form -->
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <select class="form-control" id="category_id" name="category_id">
                                <option selected="selected">Toàn bộ</option>
                                @foreach($categories as $category)
                                    <option  value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <form>
                                <input name="search" placeholder="Nhập từ khóa...." type="search">
                                <button class="btnn"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">
                        @if (session('user'))
                            <div class="sinlge-bar shopping">
                                <a href="{{route('product.checkouToCart')}}" class="single-icon"><i class="ti-bag"></i> <span class="total-count"></span></a>
                                <!-- Shopping Item -->
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--/ End Header -->
