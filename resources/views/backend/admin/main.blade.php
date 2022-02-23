<!DOCTYPE html>
<html lang="en">
<body  class="page-has-left-panels page-has-right-panels p-0">
	@yield('css')

@include('backend.admin.layouts.topbar')
@yield('content')
@include('backend.admin.layouts.script')
@yield('js')

</body>