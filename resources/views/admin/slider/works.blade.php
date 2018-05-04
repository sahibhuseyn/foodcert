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
                        <form action="{{ route('admin_work_add') }}" method="post" enctype="multipart/form-data">
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
        @foreach($works as $count => $work)
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                #{{ $work->id }}
                                <form action="{{ route('admin_work_delete', $work->id) }}" method="post" class="pull-right">
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
                                    <img src="{{ url('/uploads/' . $work->image) }}" class="img-responsive" alt="">
                                </div>
                            </div>

                            <hr>

                            <form action="{{ route('admin_work_update', $work->id) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{--<input type="hidden" name="language_id" value="{{ $work->language->id }}">--}}
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
