<?php require 'views/partials/header.php'; ?>

<div class="admin-shell">
    <aside class="admin-sidebar">
        <h2>Admin Panel</h2>
        <a href="/admin/dashboard">Dashboard</a>
        <a href="/admin/products" class="active">Manage Products</a>
        <a href="/admin/logout">Logout</a>
    </aside>

    <main class="admin-main">
        <div class="admin-topbar">
            <h1>Manage Products</h1>
            <a href="/admin/products-add" class="btn">Add Product</a>
        </div>

        <?php if ($message): ?>
            <div class="alert alert-<?php echo htmlspecialchars($messageType); ?>"><?php echo htmlspecialchars($message); ?></div>
        <?php endif; ?>


        <div class="admin-panel">
            <h2>Existing Products</h2>
            <div class="table-wrap">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Description</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($product['title']); ?></td>
                                <td>$<?php echo number_format($product['price'] ?? 0, 2); ?></td>
                                <td><?php echo htmlspecialchars($product['description'] ?? ''); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

<?php require 'views/partials/footer.php'; ?>
