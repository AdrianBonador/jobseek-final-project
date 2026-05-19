<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>
<?= loadPartial('flash') ?>

<section class="container mx-auto px-4">
    <div class="bg-white auth-card rounded-lg shadow-md">
        <h2 class="text-3xl font-bold text-center mb-2 text-primary-brand">Welcome Back!</h2>
        <p class="text-center text-gray-500 mb-6">Log in to manage your job postings on HireHub PH</p>

        <?php if (!empty($errors['auth'])) : ?>
            <div class="message-error"><?= e($errors['auth']) ?></div>
        <?php endif; ?>

        <form method="POST" action="<?= url('/login') ?>">
            <div class="mb-4">
                <label class="block mb-1 font-medium">Email Address</label>
                <input type="email" name="email" required
                    value="<?= e($email ?? '') ?>"
                    class="w-full px-4 py-2 border rounded" placeholder="you@example.com" />
                <?php if (!empty($errors['email'])) : ?><p class="text-red-600 text-sm mt-1"><?= e($errors['email']) ?></p><?php endif; ?>
            </div>
            <div class="mb-4">
                <label class="block mb-1 font-medium">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 border rounded" placeholder="••••••••" />
                <?php if (!empty($errors['password'])) : ?><p class="text-red-600 text-sm mt-1"><?= e($errors['password']) ?></p><?php endif; ?>
            </div>
            <button type="submit" class="w-full btn-accent py-3 rounded my-3">Log In</button>
        </form>

        <p class="text-center text-sm mt-4">
            No account yet? <a href="<?= url('/register') ?>" class="text-primary-brand font-semibold">Create one here</a>
        </p>
        <p class="text-center text-xs text-gray-500 mt-4">Demo: demo@hirehubph.com / password123</p>
    </div>
</section>

<?= loadPartial('footer') ?>
