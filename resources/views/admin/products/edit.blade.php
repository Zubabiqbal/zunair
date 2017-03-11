@extends('admin_layouts.master')
@section('content')

    @include('admin.errors')

    <div class="">
        <img class="img img-thumbnail" width="200px" height="200px" src="{{$product->getImagePath()}}">
        <div class="row">
            <div class="col-md-12">
                <form action='{{ url("admin/category/{$category->id}/product/$product->id") }}' method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('put')}}
                    <div class="row margin-bottom-20">
                        <div class="col-md-7">
                            <label>Title</label>
                            <input required type="text" name="title" value="{{ $product->title }}" class="form-control" />
                        </div>
                        <div class="col-md-2">
                            <label>Image</label>
                            <input class="form-control" name="image" type="file">
                        </div>
                        <div class="col-md-3 status-buttons">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-info {{ $product->status ? 'active' : '' }}">
                                    <input checked="checked" type="radio" name="status" value="1">
                                    Active
                                </label>
                                <label class="btn btn-info {{ !$product->status ? 'active' : '' }}">
                                    <input type="radio" name="status" value="0"> In-active
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="summernote" rows="50" cols="20">
                                    {!! $product->description !!}
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection