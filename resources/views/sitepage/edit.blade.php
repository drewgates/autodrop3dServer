@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit sitepage
    </h1>
    <form method = 'get' action = '{!!url("sitepage")!!}'>
        <button class = 'btn btn-danger'>sitepage Index</button>
    </form>
    <br>





    @if(isset($sitepage))
        {!! Form::model($sitepage, ['action' => ['SitenavigationController@update', $sitepage->id]]) !!}
    @else
        {!! Form::open(['action' => 'SitenavigationController@update']) !!}
    @endif

        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="PageTitle">PageTitle</label>
            {!!  Form::text('PageTitle')!!}
        </div>
        <div class="form-group">
            <label for="PageContent">PageContent</label>
            {!!  Form::wysiwyg('PageContent')!!}

        </div>
        <div class="form-group">
            <label for="PagePublishDate">PagePublishDate</label>
            <input id="PagePublishDate" name = "PagePublishDate" type="text" class="form-control" value="{!!$sitepage->
            PagePublishDate!!}"> 
        </div>
        <div class="form-group">
            <label for="PageStub">PageStub</label>
            <input id="PageStub" name = "PageStub" type="text" class="form-control" value="{!!$sitepage->
            PageStub!!}"> 
        </div>
        <div class="form-group">
            <label for="PageCSS">PageCSS</label>
            <input id="PageCSS" name = "PageCSS" type="text" class="form-control" value="{!!$sitepage->
            PageCSS!!}"> 
        </div>
        <div class="form-group">
            <label for="PageJavaScript">PageJavaScript</label>
            <input id="PageJavaScript" name = "PageJavaScript" type="text" class="form-control" value="{!!$sitepage->
            PageJavaScript!!}"> 
        </div>
        <div class="form-group">
            <label for="PageKeywords">PageKeywords</label>
            <input id="PageKeywords" name = "PageKeywords" type="text" class="form-control" value="{!!$sitepage->
            PageKeywords!!}"> 
        </div>
    <button class = 'btn btn-primary' type ='submit'>Update</button>
    {!! Form::close() !!}
</section>
@endsection