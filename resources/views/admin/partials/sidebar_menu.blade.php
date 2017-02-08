<ul class="nav navmenu-nav">
    <li class="{{ Request::is('admin') ? "active" : "" }}"><a href="{{ url('/admin') }}">Обзор</a></li>
</ul>
<ul class="nav navmenu-nav">
    <li class="{{ Request::is('admin/goods') ? "active" : "" }}"><a href="{{ url('/admin/goods') }}">Товары</a></li>
    <li class="{{ Request::is('admin/purchase') ? "active" : "" }}"><a href="{{ url('/admin/purchase') }}">Закупки</a></li>
</ul>