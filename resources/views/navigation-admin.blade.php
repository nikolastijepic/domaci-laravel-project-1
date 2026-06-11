<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="/admin/add-products">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarNav">
            <ul class="navbar-nav gap-3">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/admin/add-products') ? 'active' : '' }}" href="/admin/add-products">Add Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/admin/all-products') ? 'active' : '' }}" href="/admin/all-products">All Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/admin/all-contacts') ? 'active' : '' }}" href="/admin/all-contacts">All Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
