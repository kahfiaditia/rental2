<div class="header header-light">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="#">
                    @foreach ($tentang as $item)
                        @if ($item->image != null)
                            <img src="{{ URL::asset('files/logo/' . $item->image) }}" class="logo" alt="" />
                        @endif
                    @endforeach
                </a>
                <div class="nav-toggle"></div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                <ul class="nav-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('transportasi') }}">Armada dan Paket</a></li>
                </ul>

                <ul class="nav-menu nav-menu-social align-to-right">

                    <li class="login_click light">
                        {{-- @foreach ($tentang as $item) --}}
                        <a href="https://wa.me/081398604136" target="_blank">Hubungi Kami</a>

                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- End Navigation -->
<div class="clearfix"></div>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->

<!-- ============================ Hero Banner  Start================================== -->
{{-- <div class="image-cover half_banner" style="background:#0b2248 url('image/banner1.jpeg') no-repeat;">
    <div class="container">
        <!-- Type -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="banner-search-2">
                    <h1 class="cl_2 f_2 mb-0">Bersama kami<br><span class="theme-cl">Mobilitas Anda Nyaman dan
                            Lancar</span></h1>
                    <p>Kenyamanan, Kebersihan, Pelayanan Ramah dan Profesional.</p>
                </div>
            </div>
        </div>
    </div>
</div> --}}
