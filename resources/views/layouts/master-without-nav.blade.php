<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title') - {{config('web_config')['WEB_TITLE']}}</title>
  <link rel="shortcun icon" href="{{Storage::url(config('web_config')['WEB_FAVICON'])}}"/>
  @include('layouts.head')
</head>

<body>
  <div id="app">
   		@yield('content')
</div>
  		@include('layouts.script')    
</body>
</html>

