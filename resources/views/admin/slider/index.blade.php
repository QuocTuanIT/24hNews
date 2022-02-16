@extends('layouts.admin')

@push('title')
    {{ __('Quản lý slider') }}
@endpush
@push('styles')
    @include('admin.partials.style-list')
@endpush
@section('content')
    @include('admin.partials.header',[$title = 'Danh sách slider', $current_page = 'Danh mục'])
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- @can('category-create') --}}
                        {{-- @endcan --}}
                        <div class="card-body table-responsive p-2">
                            <a href="{{ route('admin.sliders.create') }}" style="color:#fff">
                                <btn class="btn btn-primary mb-3 mt-1">
                                    <i class="fa fa-plus"></i>
                                    Thêm mới
                                </btn>
                            </a>
                            <table class="table table-hover table-border text-nowrap" id="datatable">
                                <thead>
                                    <tr style="text-align:center;">
                                        <th>ID</th>
                                        <th>Tiều đề</th>
                                        <th>Hình ảnh</th>
                                        <th>Link liên kết</th>
                                        <th>Trạng thái</th>
                                        <th>Ngày tạo</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align:center">
                                    @forelse ($sliders as $slider)
                                        <tr>
                                            <td>{{ $slider->id }}</td>
                                            <td>{{ $slider->title }}</td>
                                            <td>
                                                <img src="{{ $slider->slider_image_thumb }}" alt="{{ $slider->title }}">
                                            </td>
                                            <td>
                                                <a href="{{ $slider->url }}" target="_blank" title="{{ $slider->url }}"
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </td>
                                            <td>
                                                @if ($slider->status == 1)
                                                    <span class="badge badge-success">Hiển thị</span>
                                                @else
                                                    <span class="badge badge-secondary">Ẩn</span>
                                                @endif
                                            </td>
                                            <td>{{ $slider->created_at }}</td>
                                            <td>
                                                <a href="{{ route('admin.sliders.edit', $slider->id) }}"
                                                    class="btn btn-outline-primary mr-2 btn-sm"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="" class="btn btn-outline-danger btn-sm action_delete"
                                                    data-target="#deleteModal"
                                                    data-url={{ route('admin.sliders.destroy', $slider->id) }}""><i
                                                        class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">Không có dữ liệu !</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    @include('admin.partials.script-list')
@endpush
