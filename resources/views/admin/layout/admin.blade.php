@include('admin.element.header')
@include('admin.element.sidebar-left')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>@yield('action')</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>@yield('controller')</span></li>
                <li><span>@yield('action')</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>

    </header>
    <div class="row">
        <div class="col-md-12">
        @if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!}">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        </div>
    </div>
    <!-- start: page -->
    @yield('content')
    <!-- end: page -->
</section>
</div>
@include('admin.element.sidebar-right')
