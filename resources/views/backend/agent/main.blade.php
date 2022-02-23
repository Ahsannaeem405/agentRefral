<!DOCTYPE html>
<html lang="en">
<body  class="page-has-left-panels page-has-right-panels p-0">
	@yield('css')
@include('backend.agent.layouts.topbar')
@include('backend.agent.layouts.head')
@include('backend.agent.layouts.sidebar')
@yield('content')
@include('backend.agent.layouts.script')
</body>
@yield('js')