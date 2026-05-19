<section class="container mx-auto my-8 px-4">
    <div class="cta-panel">
        <div>
            <h2 class="text-xl font-semibold m-0">Looking to grow your team?</h2>
            <p class="mt-2 m-0">
                Post your opening in just a few minutes and get seen by qualified candidates browsing HireHub PH right now.
            </p>
        </div>
        <?php if (isEmployer()) : ?>
            <a href="<?= url('/listings/create') ?>" class="btn btn--primary btn--sm">
                <i class="fa fa-plus"></i> Post a Job
            </a>
        <?php elseif (!isLoggedIn()) : ?>
            <a href="<?= url('/register') ?>" class="btn btn--primary btn--sm">
                <i class="fa fa-user-plus"></i> Create an Employer Account
            </a>
        <?php endif; ?>
    </div>
</section>
