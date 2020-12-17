<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i
            class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<ul class="treeview-menu">
    <li>
        <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><span>User</span></a>
    </li>
    <li>
        <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/test') }}"><span>Files</span></a>
    </li>
    <li>
        <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/tag') }}"><span>Tag</span></a>
    </li>
</ul>
