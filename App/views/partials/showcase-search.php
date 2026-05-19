<section class="showcase relative flex items-center">
    <div class="overlay absolute inset-0" aria-hidden="true"></div>
    <div class="container mx-auto z-10 relative" style="padding:4rem 1.5rem 3rem">
        <div class="showcase-content text-center" style="max-width:640px;margin:0 auto">
            <span class="showcase-eyebrow">
                ✦ Thousands of roles across the Philippines
            </span>
            <h2 class="showcase-title">Find the Job<br>You Actually Want</h2>
            <p class="showcase-subtitle">Explore verified job opportunities from companies currently hiring   no fake posts, no inactive listings.</p>
        </div>
        <form method="GET" action="<?= url('/listings') ?>" class="search-panel" role="search">
            <div class="search-panel__grid">
                <label class="search-field search-field--grow">
                    <span class="search-field__label"><i class="fa fa-magnifying-glass"></i> Keywords</span>
                    <input
                        type="search"
                        name="keywords"
                        placeholder="Role, skill, or company name"
                        value="<?= e($keywords ?? '') ?>"
                        class="search-field__input"
                        autocomplete="off" />
                </label>
                <label class="search-field">
                    <span class="search-field__label"><i class="fa fa-layer-group"></i> Category</span>
                    <select name="category" class="search-field__input search-field__select">
                        <?php foreach (jobCategories() as $slug => $label) : ?>
                            <option value="<?= e($slug) ?>" <?= ($category ?? '') === $slug ? 'selected' : '' ?>>
                                <?= e($label) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label class="search-field search-field--grow">
                    <span class="search-field__label"><i class="fa fa-location-dot"></i> Location</span>
                    <input
                        type="text"
                        name="location"
                        placeholder="City or province"
                        value="<?= e($location ?? '') ?>"
                        class="search-field__input"
                        autocomplete="off" />
                </label>
                <button type="submit" class="btn btn--primary btn--search">
                    <i class="fa fa-search"></i>
                    <span>Search</span>
                </button>
            </div>
        </form>
    </div>
</section>
