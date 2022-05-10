
<footer class="__footer__">

      <div class="__footer__top__">

          <div class="__footer__contact__">
                Contact me
                <a href="https://github.com/AlxisHenry" target="_blank" rel="noreferrer">
                    <img title="Github" src="{{ url('assets/svg/github.svg') }}" alt="Github Link">
                </a>
                <a href="https://wakatime.com/@AlxisHenry" target="_blank" rel="noreferrer">
                    <img title="Wakatime" src="{{ url('assets/svg/wakatime.svg') }}" alt="Wakatime Link">
                </a>
          </div>

          <div class="__switch__theme__">
              Theme
              <div class="_switch_">
                  <div class="_switch_indicator_" style="display:flex; justify-content: center; align-items: center;">
                      <img style="width: 25px; height: 25px;" src="{{ url('assets/svg/lune.svg') }}">
                  </div>
              </div>
          </div>

      </div>

      <div class="__footer__main__">
            © {{ date("Y") }} Alexis Henry. All Rights Reserved
      </div>

</footer>

</body>

<script src="{{ url('js/app.js') }}"></script>

</html>