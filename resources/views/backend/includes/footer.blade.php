<footer class="c-footer">
    <div>
        <strong>
            &copy; {{ date('Y') }}
            MCMG Projekt Sp. z o.o.
        </strong>
        @lang('All Rights Reserved')
    </div>

    <div class="mfs-auto">
        @lang('Powered by')
        <x-utils.link href="http://laravel-boilerplate.com" target="_blank" :text="__(appName())" />, 
        <x-utils.link href="https://coreui.io" target="_blank" text="CoreUI" />
    </div>
</footer>
