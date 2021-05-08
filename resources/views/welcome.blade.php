@extends('master.main')
@section('title', 'Fee Assignment')
@section('content')
        <div class="jumbotron text-center">
          <p>Fee Assignment</p> 
        </div>
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-error">
                {{ session()->get('error') }}
            </div>
        @endif
        <div class="container">
            <div class="content">
                <div class="col-md-12 form-group text-right">
                    <div class="btn-group">
                          <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Reports <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('report')}}">Report 1</a>
                            </li>
                            <li>
                                <a href="{{ url('report2')}}">Report 2</a>
                            </li>
                          </ul>
                    </div>
                </div>
                <form action="{{ url('import-data') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                    <div class="col-md-12 form-group">
                        <div class="col-md-2">
                            Upload File
                        </div>
                        <div class="col-md-6">
                            <input type="file" name="fees" class="form-control">
                          </div>
                    </div>
                    <div class="col-md-12 form-group">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-6">
                          <button type="submit" class="btn btn-success">Upload</button>
                           
                        </div>
                    </div>
                </form>
            </div>
        </div>
@stop