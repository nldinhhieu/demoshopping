@extends('layouts.admin')

@section('title')
    <title>Cỏ May Sài Gòn</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header',['name' => 'Category', 'key' => 'Edit'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <form action="{{route('categories.update', ['id' => $category->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input type="text" class="form-control"
                                       placeholder="Nhập tên danh mục"
                                       value="{{ $category->name }}"
                                       name="name"
                                >
                            </div>
                            <div class="form-group">
                                <label>Danh mục cha</label>
                                <select class="custom-select" name="parent_id">
                                    <option value="0">--Chọn danh mục cha--</option>
                                    {!!$htmlOption!!}
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


