<header class="interior-banner">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<hgroup class="text-center">
						<h1>@yield('page-title')</h1>
						<h2>@yield('page-subtitle')</h2>
					</hgroup>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="container">
	<ol class="breadcrumb">
		<li><a href="/" title="Home"><span class="fa fa-home"></span></a></li>

		@if (isset($breadcrumbs) && count($breadcrumbs) > 0)
			@foreach ($breadcrumbs as $url => $crumb)
				<li class="active"><a href="{{{ $url }}}" title="{{{ $crumb }}}">{{{ $crumb }}}</a></li>
			@endforeach
		@endif

	</ol>
</div>