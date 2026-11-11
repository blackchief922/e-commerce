<?php require 'views/partials/header.php'; ?>

<div class="admin-shell">
    <aside class="admin-sidebar">
        <h2>Admin Panel</h2>
        <a href="/admin/dashboard" class="active">Dashboard</a>
        <a href="/admin/products">Manage Products</a>
        <a href="/admin/logout">Logout</a>
    </aside>

    <main class="admin-main">
        <div class="admin-topbar">
            <h1>Dashboard</h1>
            <a href="/admin/logout" class="btn">Logout</a>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <h3>Total Products</h3>
                <p><?php echo (int)$totalProducts; ?></p>
            </div>
        </div>

       
    </main>
</div>

<?php require 'views/partials/footer.php'; ?>
