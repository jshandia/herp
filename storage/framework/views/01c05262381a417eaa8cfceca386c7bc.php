<?php
    use App\Models\Utility;
    $setting = \App\Models\Utility::settings();

?>
<!-- [ Main Content ] end -->
<footer class="dash-footer">
    <div class="footer-wrapper">
        <div class="py-1">
            <p class="mb-0 text-muted"> &copy;
                <?php echo e(date('Y')); ?> <?php echo e($setting['footer_text'] ? $setting['footer_text'] : config('app.name', 'HSystem')); ?>

            </p>
        </div>
    </div>
</footer>


<!-- Warning Section Ends -->
<!-- Required Js -->
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.form.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/simplebar.min.js')); ?>"></script>


<script src="<?php echo e(asset('assets/js/plugins/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/dash.js')); ?>"></script>
<script src="<?php echo e(asset('js/moment.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/plugins/bootstrap-switch-button.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/plugins/sweetalert2.all.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/simple-datatables.js')); ?>"></script>

<!-- Apex Chart -->
<script src="<?php echo e(asset('assets/js/plugins/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/main.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/choices.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/flatpickr.min.js')); ?>"></script>

<script src="<?php echo e(asset('js/jscolor.js')); ?>"></script>

<script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>




<script>
    var site_currency_symbol_position = '<?php echo e($setting['site_currency_symbol_position']); ?>';
    var site_currency_symbol = '<?php echo e($setting['site_currency_symbol']); ?>';

</script>
<script src="<?php echo e(asset('js/custom.js')); ?>"></script>

<?php if($message = Session::get('success')): ?>
    <script>
        show_toastr('success', '<?php echo $message; ?>');
    </script>
<?php endif; ?>
<?php if($message = Session::get('error')): ?>
    <script>
        show_toastr('error', '<?php echo $message; ?>');
    </script>
<?php endif; ?>
<?php if($setting['enable_cookie'] == 'on'): ?>
    <?php echo $__env->make('layouts.cookie_consent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php echo $__env->yieldPushContent('script-page'); ?>

<?php echo $__env->yieldPushContent('old-datatable-js'); ?>

<script>


    feather.replace();
    var pctoggle = document.querySelector("#pct-toggler");
    if (pctoggle) {
        pctoggle.addEventListener("click", function () {
            if (
                !document.querySelector(".pct-customizer").classList.contains("active")
            ) {
                document.querySelector(".pct-customizer").classList.add("active");
            } else {
                document.querySelector(".pct-customizer").classList.remove("active");
            }
        });
    }

    var themescolors = document.querySelectorAll(".themes-color > a");
    for (var h = 0; h < themescolors.length; h++) {
        var c = themescolors[h];

        c.addEventListener("click", function (event) {
            var targetElement = event.target;
            if (targetElement.tagName == "SPAN") {
                targetElement = targetElement.parentNode;
            }
            var temp = targetElement.getAttribute("data-value");
            removeClassByPrefix(document.querySelector("body"), "theme-");
            document.querySelector("body").classList.add(temp);
        });
    }

    var custthemebg = document.querySelector("#cust-theme-bg");
    custthemebg.addEventListener("click", function () {
        if (custthemebg.checked) {
            document.querySelector(".dash-sidebar").classList.add("transprent-bg");
            document
                .querySelector(".dash-header:not(.dash-mob-header)")
                .classList.add("transprent-bg");
        } else {
            document.querySelector(".dash-sidebar").classList.remove("transprent-bg");
            document
                .querySelector(".dash-header:not(.dash-mob-header)")
                .classList.remove("transprent-bg");
        }
    });

    var custdarklayout = document.querySelector("#cust-darklayout");
    custdarklayout.addEventListener("click", function() {
        if (custdarklayout.checked) {

            document
                .querySelector("#main-style")
                .setAttribute("href", "<?php echo e(asset('assets/css/style-dark.css')); ?>");

            document
                .querySelector(".m-header > .b-brand > .logo-lg")
                .setAttribute("src", "<?php echo e(asset('/storage/uploads/logo/logo-light.png')); ?>");
        } else {
            document
                .querySelector("#main-style")
                .setAttribute("href", "<?php echo e(asset('assets/css/style.css')); ?>");
            document
                .querySelector(".m-header > .b-brand > .logo-lg")
                .setAttribute("src", "<?php echo e(asset('/storage/uploads/logo/logo-dark.png')); ?>");
        }
    });


    function removeClassByPrefix(node, prefix) {
        for (let i = 0; i < node.classList.length; i++) {
            let value = node.classList[i];
            if (value.startsWith(prefix)) {
                node.classList.remove(value);
            }
        }
    }
</script>


<?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/footer.blade.php ENDPATH**/ ?>