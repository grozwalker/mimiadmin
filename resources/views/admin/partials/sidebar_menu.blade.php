<ul class="nav navmenu-nav">
    <li class="{{ Request::is('admin') ? "active" : "" }}"><a href="{{ url('/admin') }}">Обзор</a></li>
</ul>
<ul class="nav navmenu-nav">
    <li class="{{ Request::is('admin/categories') ? "active" : "" }}"><a href="{{ url('/admin/categories') }}">Категории</a></li>
    <li class="{{ Request::is('admin/goods') ? "active" : "" }}"><a href="{{ url('/admin/goods') }}">Товары</a></li>
    <li class="{{ Request::is('admin/purchase') ? "active" : "" }}"><a href="{{ url('/admin/purchase') }}">Закупки</a></li>
    <li class="{{ Request::is('admin/clients') ? "active" : "" }}"><a href="{{ url('/admin/clients') }}">Клиенты</a></li>
    <li class="{{ Request::is('admin/orders') ? "active" : "" }}"><a href="{{ url('/admin/orders') }}">Заказы</a></li>
</ul>