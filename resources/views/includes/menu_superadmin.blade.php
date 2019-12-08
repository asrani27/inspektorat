
<li class="{{ (request()->is('home')) ? 'active' : '' }}">
    <a href="/home">
        <i class="fa fa-th-large"></i> 
        <span>Dashboard</span> 
    </a>
</li>
<li class="{{ (request()->is('zi*')) ? 'active' : '' }}">
    <a href="/zi">
        <i class="fa fa-th-large"></i>
        <span>Zona Integritas</span>
    </a>
</li>
<li class="{{ (request()->is('wbk')) ? 'active' : '' }}">
    <a href="/wbk">
        <i class="fa fa-th-large"></i> 
        <span>WBK</span> 
    </a>
</li>
<li class="{{ (request()->is('wbbm')) ? 'active' : '' }}">
    <a href="/wbbm">
        <i class="fa fa-th-large"></i> 
        <span>WBBM</span> 
    </a>
</li>
<li class="has-sub {{ (request()->is('masterdata*')) ? 'active' : '' }}">
    <a href="javascript:;">
        <b class="caret"></b>
        <i class="fa fa-th-large"></i>
        <span>Data Master</span>
    </a>
    <ul class="sub-menu">
        <li class="{{ (request()->is('masterdata/skpd')) ? 'active' : '' }}"><a href="/masterdata/skpd">SKPD</a></li>
        <li class="{{ (request()->is('masterdata/kategori')) ? 'active' : '' }}"><a href="/masterdata/kategori">Kategori Pencanangan</a></li>
        <li class="{{ (request()->is('masterdata/komponen')) ? 'active' : '' }}"><a href="/masterdata/komponen">Kategori Pembangunan</a></li>
        <li class="{{ (request()->is('masterdata/wbk')) ? 'active' : '' }}"><a href="/masterdata/wbk">Kategori W B K</a></li>
        <li class="{{ (request()->is('masterdata/wbbm')) ? 'active' : '' }}"><a href="/masterdata/wbbm">Kategori W B B M</a></li>
        <li class="{{ (request()->is('masterdata/style')) ? 'active' : '' }}"><a href="/masterdata/style">Style</a></li>
    </ul>
</li>
<li>
    <a href="/kelola_user">
        <i class="fa fa-th-large"></i> 
        <span>Kelola Users</span> 
    </a>
</li>
<li>
    <a href="/logout">
        <i class="fa fa-th-large"></i> 
        <span>Logout</span> 
    </a>
</li>