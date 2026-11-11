<?php require 'views/partials/header.php'; ?>

    <div class="container" style="padding: 60px 0; max-width: 460px;">
        <div class="admin-card">
            <h1 style="margin-bottom: 12px;">Admin Login</h1>
            <p style="margin-bottom: 20px; color: #667280;">Access the private admin area.</p>

        <?php if (!empty($error)): ?>
            <div class="alert alert-error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <form class="admin-form" method="POST" action="/admin/login">
            <input type="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>


<?php require 'views/partials/footer.php'; ?>