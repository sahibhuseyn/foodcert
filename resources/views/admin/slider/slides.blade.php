@extends('admin.layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Add new Slide
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin_slider_add') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" class="form-control" name="image" placeholder="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <button type="submit" class="form-control btn btn-success waves-effect">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @foreach($slides as $count => $slide)
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                #{{ $slide->id }}
                                <form action="{{ route('admin_slider_delete', $slide->id) }}" method="post" class="pull-right">
                                    {{ csrf_field() }}

                                    <div class="col-sm-4">
                                        <input class="btn btn-danger" type="submit" value="Delete">
                                    </div>
                                </form>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <img src="{{ url('/uploads/' . $slide->image) }}" class="img-responsive" alt="">
                                </div>
                            </div>

                            <hr>

                            <form action="{{ route('admin_slider_update', $slide->id) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{--<input type="hidden" name="language_id" value="{{ $slide->language->id }}">--}}
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" class="form-control" name="image" placeholder="Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-2">
                                        <button type="submit" class="form-control btn btn-success waves-effect">Change</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
