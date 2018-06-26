<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/vue-style.css')}}">
    <script>
        window.vuebnb_server_data = "{!! addslashes(json_encode($data)) !!}";
    </script>
</head>
<body>
    <div id="app">
        <listing-page></listing-page>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>