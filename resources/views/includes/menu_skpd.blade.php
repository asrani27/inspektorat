<li class="{{ (request()->is('home')) ? 'active' : '' }}">
    <a href="/home">
        <i class="fa fa-th-large"></i> 
        <span>Dashboard</span> 
    </a>
</li>
<li class="{{ (request()->is('pencanangan')) ? 'active' : '' }}">
    <a href="/profil_mhs">
        <i class="fa fa-th-large"></i> 
        <span>Pencanangan</span> 
    </a>
</li>
<li class="{{ (request()->is('pembangunan')) ? 'active' : '' }}">
    <a href="/input_krs">
        <i class="fa fa-th-large"></i> 
        <span>Pembangunan</span> 
    </a>
</li>
<li>
    <a href="/logout">
        <i class="fa fa-th-large"></i> 
        <span>Logout</span> 
    </a>
</li>