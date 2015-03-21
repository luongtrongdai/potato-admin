<!doctype html>
<html lang="en" ng-app="potatoApp">
<head>
    <meta charset="utf-8">
 {{--   <base href="/">--}}

    {{--Css--}}
    @include('includes.head')
</head>
<body>
<div class="container" ng-cloak>
	<header>
		@include('includes.header')
	</header>
    <div ui-view class="main-content">Loading . . .</div>
    <div class="row footer">
        @include('includes.footer')
    </div>
</div>
</body>
    @include('includes.include')
</html>