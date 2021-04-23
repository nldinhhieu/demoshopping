@extends('layouts.admin')

@section('title')
    <title>Cỏ May Sài Gòn</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Menu', 'key' => 'List'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('menus.create')}}" class="btn btn-success float-right m-2">Thêm danh
                            mục</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Menu Name</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                           @foreach($menus as $menu)
                              <tr>
                                    <th scope="row">{{$menu->id}}</th>
                                  <td>{{$menu->name}}</td>
                                 <td>
                                      
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                       {{ $menus->links() }}
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection


