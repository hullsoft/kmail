@extends('web::layouts.grids.12')
@push('javascript')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
@endpush

@section('title', trans('kmail::seat.title'))
@section('page_header', trans('kmail::seat.title'))
@section('page_description', trans('mail::seat.title'))

@section('full')

<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h3 class="panel-title">{{trans('kmail::seat.title')}}</h3>                
            </div>
            <div class="panel-body">

                <form role="form" action="{{route('kmail.go')}}" method="post">                    
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="text">{{trans('kmail::seat.title_text')}}:</label>
                            <textarea name="text" class="form-control" id="text" ></textarea>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">{{trans('kmail::seat.submit_text')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="col-md-8">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Result</h3>
            </div>
            <div class="panel-body">
                
 
            </div>
            <div class="panel-footer">
               
            </div>
        </div>
    </div>
</div>




@stop


@push('javascript')


@endpush
