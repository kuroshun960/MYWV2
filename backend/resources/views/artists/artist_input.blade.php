@extends('layouts.app')

@section('content')
<div class="container">

<!-- 
<form action="/upload/artist" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="photo">画像ファイル:</label>
    <input type="file" class="form-control" name="file">
    <br>
    <input type="submit">
</form>
-->

{!! Form::open(['route' => 'artist.post', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        @csrf
        
        
        {!! Form::text('name', old(''), ['class' => 'form-control','placeholder' => 'アーティスト名']) !!}
        <br>

        {!! Form::text('description', old(''), ['class' => 'form-control','placeholder' => '説明']) !!}
        <br>

        {!! Form::text('style', old(''), ['class' => 'form-control','placeholder' => 'スタイル']) !!}
        <br>

        {!! Form::text('officialHp', old(''), ['class' => 'form-control','placeholder' => '公式サイト']) !!}
        <br>

        {!! Form::text('twitter', old(''), ['class' => 'form-control','placeholder' => 'Twitter']) !!}
        <br>

        {!! Form::text('insta', old(''), ['class' => 'form-control','placeholder' => 'Instagram']) !!}
        <br>
        {!! Form::label('file', '画像ファイル:') !!}
        {!! Form::file('file', ['class' => 'form-control']) !!}


        <br>
        {!! Form::submit('アーティストを登録', ['class' => 'btn btn-primary btn-block']) !!}


        
    </div>
{!! Form::close() !!}

<div class="dropify-wrapper">
    <div class="dropify-message">
        <span class="file-icon"></span>
        <p>Drag and drop a file here or click</p>
        <p class="dropify-error">Ooops, something wrong appended.</p>
    </div>
    <div class="dropify-loader"></div>
    <div class="dropify-errors-container">
        <ul></ul>
    </div>
    <input type="file" id="input-file-now" class="dropify">
    <button type="button" class="dropify-clear">Remove</button>
    <div class="dropify-preview">
        <span class="dropify-render"></span>
        <div class="dropify-infos">
            <div class="dropify-infos-inner">
                <p class="dropify-filename">
                    <span class="file-icon"></span> <span class="dropify-filename-inner"></span>
                </p>
                <p class="dropify-infos-message">Drag and drop or click to replace</p>
            </div>
        </div>
    </div>
</div>

</div>


<script>
	$(document).ready(function(){
		$('.dropify').dropify();
	});
</script>

@endsection