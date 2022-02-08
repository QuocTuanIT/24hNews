<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $title }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Trang tổng quan</a></li>
                    @if ($current_page)
                        <li class="breadcrumb-item active">{{ $current_page }}</li>
                    @endif
                </ol>
            </div>
        </div>
    </div>
</div>
