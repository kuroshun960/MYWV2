<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>MyWV</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="{{ asset('/css/dropify.css?3344144133433') }}">
        <link rel="stylesheet" href="{{ asset('/css/dropify.min.css?3344144133433') }}">

        <link rel="stylesheet" href="{{ asset('/css/mywv.css?3344343344113') }}">
        <link rel="stylesheet" href="{{ asset('/css/mywv_phone.css?3344144133433') }}">

    </head>

    <body>

        {{-- ナビゲーションバー --}}
        @include('commons.navbar')

        
            {{-- エラーメッセージ --}}
            @include('commons.error_messages')

            @yield('content')
        

<script>
    function delete_alert(e){
       if(!window.confirm('本当に削除しますか？')){
          return false;
       }
       document.deleteform.submit();
    };
</script>

        <script src="{{ asset('/jquery/jquery.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        
        <script src="{{ asset('/js/dropify.js') }}"></script>
        <script src="{{ asset('/js/dropify.min.js') }}"></script>
        <script src="{{ asset('/dropify/dropify.js') }}"></script>
        <script src="{{ asset('/dropify/dropify.min.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
        
        


    </body>
</html>