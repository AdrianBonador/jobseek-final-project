<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>
<?= loadPartial('flash') ?>

<section class="container mx-auto px-4 mt-10 mb-12">
    <div class="panel max-w-lg mx-auto p-8">
        <h2 class="text-2xl font-bold text-primary-brand mb-2">Delete This Job?</h2>
        <p class="text-gray-600 mb-6">
            You are about to permanently remove <strong><?= e($listing->title) ?></strong>.
            This cannot be undone. Enter your password to proceed.
        </p>

        <?php if (!empty($errors['password'])) : ?>
            <p class="message-error mb-4"><?= e($errors['password']) ?></p>
        <?php endif; ?>

        <form method="POST" action="<?= url('/listings/' . $listing->id . '/delete') ?>">
            <label class="block mb-1 font-medium" for="password">Your Password</label>
            <input
                type="password"
                id="password"
                name="password"
                required
                autocomplete="current-password"
                class="w-full px-4 py-2 border rounded mb-4"
                placeholder="Enter your password to confirm" />
            <button type="submit" class="w-full btn bg-red-500 text-white py-3 rounded mb-3 font-semibold">
                <i class="fa fa-trash"></i> Yes, Delete This Listing
            </button>
            <a href="<?= url('/listings/' . $listing->id) ?>" class="block text-center w-full btn-outline py-2 rounded">
                No, Keep It
            </a>
        </form>
    </div>
</section>

<?= loadPartial('footer') ?>
