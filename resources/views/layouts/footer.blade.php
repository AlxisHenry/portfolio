<footer class="__footer__">
    <div class="__footer__settings__">
        <a href="/login">
            <i class="fa-solid fa-gear"></i>
        </a>
    </div>
    <div class="__footer__main__">
        <a class="__footer__main__link__" style="text-decoration: none; color: inherit;"
            href="{{ route('legal-notice.index') }}">© {{ date('Y') }} Alexis Henry. All Rights Reserved</a>
    </div>
</footer>

@include('components.to-top-arrow')

@vite(['resources/js/app.js'])

@yield('footer')

</body>
</html>
