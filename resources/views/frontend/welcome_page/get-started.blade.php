<section class="get-started-section py-5">
    <div class="container text-center">
        <!-- Heading -->
        <h2 class="display-5 fw-bold mb-3">Get Started in 2 Steps</h2>
        <p class="lead mb-5">From zero to production-ready API in under 60 seconds</p>

        <!-- Steps -->
        <div class="row justify-content-center g-4">

            <!-- Step 1 -->
            <div class="col-md-5">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h4 class="step-title">Install the Package</h4>
                    <pre class="step-command">composer require hasinhayder/tyro</pre>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-md-5">
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h4 class="step-title">Run the Installer</h4>
                    <pre class="step-command">php artisan tyro:install</pre>
                    <p class="step-desc mt-2">
                        Wraps <code>install:api</code> + <code>migrate</code> + <code>seed</code> +
                        <code>prepare-user-model</code>
                    </p>
                </div>
            </div>

        </div>

        <!-- Final Note -->
        <p class="">
            That's it! You now have complete authentication, authorization, roles, privileges, 7 Blade directives,
            middleware, and 40+ CLI commands.
        </p>
    </div>
</section>
