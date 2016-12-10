<ul class="nav nav-sidebar">
    <li class="{{ Request::is('admin') ? "active" : "" }}"><a href="{{ url('/admin') }}">Обзор</a></li>
</ul>
<ul class="nav nav-sidebar">
    <li class="{{ Request::is('admin/goods') ? "active" : "" }}"><a href="{{ url('/admin/goods') }}">Товары</a></li>
</ul>