<li class="{{ (request()->is('home')) ? 'active' : '' }}">
    <a href="/home">
        <i class="fa fa-th-large"></i> 
        <span>Dashboard</span> 
    </a>
</li>
<li class="{{ (request()->is('skpd/pencanangan')) ? 'active' : '' }}">
    <a href="/pencanangan">
        <i class="fa fa-th-large"></i> 
        <span>Pencanangan</span> 
    </a>
</li>
<li class="{{ (request()->is('skpd/pembangunan')) ? 'active' : '' }}">
    <a href="/pembangunan">
        <i class="fa fa-th-large"></i> 
        <span>Pembangunan</span> 
    </a>
</li>
<li class="{{ (request()->is('skpd/wbk')) ? 'active' : '' }}">
    <a href="/skpd/wbk">
        <i class="fa fa-th-large"></i> 
        <span>W B K</span> 
    </a>
</li>
<li class="{{ (request()->is('skpd/wbbm')) ? 'active' : '' }}">
    <a href="/skpd/wbbm">
        <i class="fa fa-th-large"></i> 
        <span>W B B M</span> 
    </a>
</li>
<li>
    <a href="/logout">
        <i class="fa fa-th-large"></i> 
        <span>Logout</span> 
    </a>
</li>