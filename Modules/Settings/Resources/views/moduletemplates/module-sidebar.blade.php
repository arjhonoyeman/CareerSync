@can('admin')
<div class="sidebar-heading">
      @lang('Admin Menu')  
</div>
<li class="nav-item {{ (request()->is('settings/dashboard*')) ? 'active' : '' }}">
	<a class="nav-link" href="{{ route('settings.dashboard') }}" >
		<i class="fas fa-tachometer-alt"></i>
		<span>@lang('Dashboard')</span>
	</a>
</li>
<li class="nav-item">
	@php 
		$sub_menu = ["settings.index","settings.localization","settings.email","settings.integrations","settings.manage-ads"];
	@endphp
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fas fa-fw fa-cog"></i><span>@lang('Website settings')</span>
	</a>
	<div id="collapseTwo" class="collapse {{ in_array(routeName(), $sub_menu) ? 'show' : ''}}" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item {{ routeName() == 'settings.index' ? 'active' : '' }}" href="{{ route('settings.index') }}">
				<span>@lang('General settings')</span>
			</a>
			<!----
			<a class="collapse-item {{ routeName() == 'settings.manage-ads' ? 'active' : '' }}" href="{{ route('settings.manage-ads') }}">
				<span>@lang('Manage Ads')</span>
			</a>
			<a class="collapse-item {{ routeName() == 'settings.localization' ? 'active' : '' }}" href="{{ route('settings.localization') }}">
				<span>@lang('Localization')</span>
			</a>
			<a class="collapse-item " href="{{ url(config('translation.ui_url')) }}">
				<span>@lang('Languages')</span>
			</a>
			<a class="collapse-item {{ routeName() == 'settings.email' ? 'active' : '' }}" href="{{ route('settings.email') }}">
					<span>@lang('E-mail Settings')</span>
			</a>
			<a class="collapse-item {{ routeName() == 'settings.integrations' ? 'active' : '' }}" href="{{ route('settings.integrations') }}">
					<span>@lang('Integrations')</span>--->
			</a>
		</div>
	</div>
</li>
@endcan
