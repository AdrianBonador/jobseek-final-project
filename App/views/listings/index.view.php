<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>
<?= loadPartial('flash') ?>
<?= loadPartial('showcase-search', [
    'keywords' => $keywords ?? '',
    'location' => $location ?? '',
    'category' => $category ?? '',
]) ?>

<section class="container mx-auto p-4 mt-6">
    <h2 class="section-title text-2xl">
        <?php if (!empty($keywords) || !empty($location) || !empty($category)) : ?>
            Search Results
        <?php else : ?>
            All Available Jobs
        <?php endif; ?>
    </h2>
    <p class="section-intro">
        <?= count($listings) ?> <?= count($listings) === 1 ? 'job' : 'jobs' ?> found
    </p>

    <?php if (!empty($keywords) || !empty($location) || !empty($category)) : ?>
        <div class="filter-summary">
            Showing results
            <?php if ($keywords) : ?>
                for <span class="filter-chip"><?= e($keywords) ?></span>
            <?php endif; ?>
            <?php if ($category) : ?>
                in <span class="filter-chip"><?= e(categoryLabel($category)) ?></span>
            <?php endif; ?>
            <?php if ($location) : ?>
                near <span class="filter-chip"><?= e($location) ?></span>
            <?php endif; ?>
            <a href="<?= url('/listings') ?>" class="filter-clear">Clear filters</a>
        </div>
    <?php endif; ?>

    <?php if (empty($listings)) : ?>
        <div class="panel empty-state">
            <p>No jobs matched your search. Try different keywords, a different category, or another location.</p>
            <a href="<?= url('/listings') ?>" class="btn btn--primary">Browse All Jobs</a>
        </div>
    <?php else : ?>
        <div class="jobs-grid">
            <?php foreach ($listings as $listing) : ?>
                <?php require basePath('App/views/partials/listing-card.php'); ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>

<?= loadPartial('bottom-banner') ?>
<?= loadPartial('footer') ?>
