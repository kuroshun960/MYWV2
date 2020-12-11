@extends('layouts.app')

@section('content')


    @if (Auth::check())
    <div class="container">   
        
        @include('users.userdetails')
        
        
    </div>
    @else 
    <div class="beforeLogincontainer"> 
        <div class="container">
            <div class="topPageimagephoto">

                <div class="d-flex flex-wrap">
                    @foreach ($imageUrl as $url)
                    <div class="topPageimagephoto___item"><img src="{{$url}}"></div>
                    @endforeach

                </div>
            </div>

            <div class="userRegistArea">
                <div class="text-center">
                    <h1>#アイディアを見つけよう！</h1>
                    <div class="marginZeroauto">
                        {!! link_to_route('signup.get','登録する',[],['class'=>'userRegistBtn']) !!}</div>
                </div>
            </div>

        
    </div>
    </div>
    @endif
    

@endsection