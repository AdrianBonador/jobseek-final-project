<header class="site-header p-4">
    <div class="container mx-auto flex flex-wrap justify-between items-center gap-4">
        <h1 class="m-0" style="font-size:0">
            <a href="<?= url('/') ?>" class="flex items-center gap-2" style="text-decoration:none">
                <!-- Custom HireHub PH logo icon -->
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <rect width="34" height="34" rx="9" fill="url(#logo-bg)"/>
                    <path d="M9 11h4v12H9V11zm12 0h4v12h-4V11zm-8 5h8v2h-8v-2z" fill="white" opacity="0.95"/>
                    <circle cx="27" cy="9" r="4" fill="#f59e0b"/>
                    <defs>
                        <linearGradient id="logo-bg" x1="0" y1="0" x2="34" y2="34" gradientUnits="userSpaceOnUse">
                            <stop offset="0%" stop-color="#5b33b0"/>
                            <stop offset="100%" stop-color="#8b5cf6"/>
                        </linearGradient>
                    </defs>
                </svg>
                <span class="brand-logo" style="font-size:1.5rem">HireHub <span style="opacity:0.7;font-weight:600">PH</span></span>
            </a>
        </h1>
        <nav class="flex flex-wrap items-center gap-2" style="font-size:0.9rem">
            <a href="<?= url('/listings') ?>" class="nav-link">Find Jobs</a>
            <?php if (isLoggedIn()) : ?>
                <span class="user-greeting hidden md:inline" style="display:none">
                    <i class="fa fa-circle-user"></i> <?= e(currentUser()['name']) ?>
                </span>
                <span class="user-greeting" style="display:inline-flex;align-items:center;gap:0.3rem;padding:0.3rem 0.7rem;background:rgba(139,92,246,0.12);border-radius:8px;font-size:0.8rem">
                    <i class="fa fa-circle-user"></i> <?= e(currentUser()['name']) ?>
                </span>
                <?php if (isEmployer()) : ?>
                    <a href="<?= url('/listings/create') ?>" class="btn btn--primary btn--sm">
                        <i class="fa fa-plus"></i> Post a Job
                    </a>
                <?php endif; ?>
                <form method="POST" action="<?= url('/logout') ?>" class="inline">
                    <button type="submit" class="btn btn-outline btn--sm cursor-pointer">Log Out</button>
                </form>
            <?php else : ?>
                <a href="<?= url('/login') ?>" class="btn btn-outline btn--sm">Log In</a>
                <a href="<?= url('/register') ?>" class="btn btn--primary btn--sm">Sign Up Free</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
