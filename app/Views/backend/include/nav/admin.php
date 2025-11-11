<li class="nav-item">
    <a class="nav-link menu-link" href="<?=base_url(route_to('admin.dashboard'))?>">
        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboard">Dashboard</span>
    </a>
</li>



<li class="nav-item">
    <a class="nav-link menu-link" href="#leads" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="leads">
        <i class="ri-message-2-line"></i> <span data-key="t-dashboards">User Leads</span>
    </a>
    <div class="collapse menu-dropdown" id="leads">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="<?=base_url(route_to('lead-enquiry.list'))?>" class="nav-link" data-key="t-analytics"> Enquiry </a>
            </li>
        </ul>
    </div>
</li>

<!-- <li class="nav-item">
    <a class="nav-link menu-link" href="<?=base_url(route_to('transaction.list'))?>">
        <i class="ri-wallet-line"></i> <span data-key="t-transaction">Payment History</span>
    </a>
</li> -->


<li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Website</span></li>


<!-- <li class="nav-item">
    <a class="nav-link menu-link" href="<?=base_url(route_to('client-logo.list'))?>">
        <i class="ri-markup-line"></i> <span data-key="t-transaction">Post Brands</span>
    </a>
</li> -->

<li class="nav-item">
    <a class="nav-link menu-link" href="<?=base_url(route_to('city.list'))?>">
        <i class="ri-road-map-line"></i> <span data-key="t-transaction">Add Cities</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link menu-link" href="<?=base_url(route_to('portfolio.list'))?>">
        <i class="ri-road-map-line"></i> <span data-key="t-transaction">Add Portfolio</span>
    </a>
</li>





<li class="nav-item">
    <a class="nav-link menu-link" href="#setting" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="setting">
        <i class="ri-settings-3-line"></i> <span data-key="t-dashboards">Settings</span>
    </a>
    <div class="collapse menu-dropdown" id="setting">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="<?=base_url(route_to('meta-tag.list'))?>" class="nav-link"> Meta Tags </a>
            </li>
            <li class="nav-item">
                <a href="<?=base_url(route_to('setting.policy'))?>" class="nav-link"> Policies </a>
            </li>
            <li class="nav-item">
                <a href="<?=base_url(route_to('setting.main'))?>" class="nav-link"> Social </a>
            </li>
        </ul>
    </div>
</li>
