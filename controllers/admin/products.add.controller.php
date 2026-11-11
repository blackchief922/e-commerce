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
            <a href="/admin/logout" class="btn">Logout</a>
        </div>

       
       <div class="admin-card">
            <h2>Add New Product</h2>
                <form class="admin-form" method="POST" action="/admin/products">
                    <input type="text" name="title" placeholder="Product title" required value="<?= htmlspecialchars($_POST['title'] ?? '') ?>" > 
                    <textarea name="description" placeholder="Description" rows="4"><?= htmlspecialchars($_POST['description'] ?? '') ?></textarea>
                    <input type="number" step="0.01" name="price" placeholder="Price" required value="<?= htmlspecialchars($_POST['price'] ?? '') ?>">
                    <!-- <input type="text" name="image" placeholder="Image URL"> -->
                    <button type="submit">Save Product</button>
                </form>
        </div>

        
<?php require 'views/partials/footer.php'; ?>