@extends('l::base')

@section('title')短链生成器 @stop

@section('beforeStyle')
    {{ style('bootstrap-3.0.3') }}
@stop

@section('style')
h1
{
    text-align: center;
    font-size: 50px;
    margin-top: 100px;
    margin-bottom: 40px;
}
.col-lg-10
{
    float: none;
    margin: 0 auto;
    text-align: center;
}
@parent @stop

@section('container')

    <h1>短链生成器</h1>
    <div class="col-lg-10">
        {{ Form::open(array('url'=>$storeURL)) }}
            <div class="input-group input-group-lg">
                {{ Form::text('url', '', array('class'=>'form-control', 'placeholder'=>'请输入URL链接')) }}
                <span class="input-group-btn">
                    {{ Form::submit('缩短', array('class'=>'btn btn-success')) }}
                </span>
            </div><!-- /input-group -->
        {{ Form::close() }}
        <br /><br />
        @if($errors->first('url'))
            <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{ $errors->first('url') }}</strong>
            </div>
        @elseif(Session::has('dbError'))
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{ Session::get('dbError') }}</strong>
            </div>
        @elseif(Session::has('shortened'))
        <h2>您的短链：{{ link_to_route('urlShortenedRedirect', null, array(Session::get('shortened')), array('target'=>'_blank')) }}</h2>
        @endif
    </div>

@stop


@section('end')
    {{ script(array('jquery-1.10.2', 'bootstrap-3.0.3')) }}
@stop


<?php /* 若需引入网络公共资源，可以像下面这样做
@section('end')
    {{ script('google::jquery-1.10.2') }}
    <script>
        window.jQuery || document.write({{ or_script('jquery-1.10.2') }})
    </script>
    {{ script('bootstrap-3.0.3') }}
@stop
*/ ?>