<footer style="margin-top:4rem">
    <div class="container mx-auto px-4 py-8">
        <div style="display:flex;flex-wrap:wrap;justify-content:space-between;align-items:flex-start;gap:2rem">
            <div style="display:flex;align-items:center;gap:0.85rem">
                <svg width="40" height="40" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="34" height="34" rx="9" fill="url(#footer-logo-bg)"/>
                    <path d="M9 11h4v12H9V11zm12 0h4v12h-4V11zm-8 5h8v2h-8v-2z" fill="white" opacity="0.95"/>
                    <circle cx="27" cy="9" r="4" fill="#f59e0b"/>
                    <defs>
                        <linearGradient id="footer-logo-bg" x1="0" y1="0" x2="34" y2="34" gradientUnits="userSpaceOnUse">
                            <stop offset="0%" stop-color="#5b33b0"/>
                            <stop offset="100%" stop-color="#8b5cf6"/>
                        </linearGradient>
                    </defs>
                </svg>
                <div>
                    <h3 style="font-size:1.2rem;font-weight:800;margin:0">HireHub PH</h3>
                    <p style="font-size:0.8rem;margin:0.2rem 0 0;opacity:0.6">Where careers begin in the Philippines.</p>
                </div>
            </div>
            <div style="display:flex;flex-wrap:wrap;gap:1.5rem;font-size:0.875rem;align-items:center">
                <a href="<?= url('/') ?>">Home</a>
                <a href="<?= url('/listings') ?>">Find Jobs</a>
                <a href="<?= url('/register') ?>">Sign Up</a>
                <a href="<?= url('/login') ?>">Log In</a>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <p>&copy; <?= date('Y') ?> HireHub PH &mdash; Made by Adrian Bonador. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
