@isset($success)

    <div class="mail_sent_with_success">

        <img src="{{ url('assets/mail.png') }}" alt="">
        {{ $success }}

    </div>

@endisset

@empty($success)
    <div class="contact-form-container">

    <form class="__contact__form__" method="post" action="/contact">

        @csrf

        <div class="primary form-section">

            <div class="name form-group">
                <i class="fa-solid fa-asterisk"></i>
                <input type="text" placeholder="Name" name="name" class="form-control {{ $errors->has('name') ? 'form-error' : '' }}" required="required">
                @if ($errors->has('name'))
                    <div class="error">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>

            <div class="email form-group">
                <i class="fa-solid fa-asterisk"></i>
                <input type="email" placeholder="Email" name="email" class="form-control {{ $errors->has('email') ? 'form-error' : '' }}" required="required">
                @if ($errors->has('email'))
                    <div class="error">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>

        </div>

        <div class="secondary form-section">

            <div class="object form-group">
                <i class="fa-solid fa-asterisk"></i>
                <input type="text" placeholder="Object" name="object" class="form-control {{ $errors->has('object') ? 'form-error' : '' }}" required="required">
                @if ($errors->has('object'))
                    <div class="error">
                        {{ $errors->first('object') }}
                    </div>
                @endif
            </div>

        </div>

        <div class="last form-section">

            <div class="content form-group">
                <i class="fa-solid fa-asterisk"></i>
                <textarea name="content" placeholder="Message" class="form-control {{ $errors->has('content') ? 'form-error' : '' }} area-text-form" rows="4" required="required"  maxlength="800"></textarea>
                <div class="container-length-indicator">
                    <div class="length-indicator">
                        <div class="indicator">
                            <span class="on">0</span>/<span class="limit">800</span>
                        </div>
                    </div>
                </div>
                @if ($errors->has('content'))<
                <div class="error">
                    {{ $errors->first('content') }}
                </div>
                @endif
            </div>

            <div class="verification form-group">
                <label for="verification[]"> Resolve {{ 4 }} + {{ 0 }} </label>
                <input type="hidden" value="{{4}}">
                <select name="verification[]" class="form-control" required="required">
                    @for($i = 0; $i < 15; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>

            <div class="submit form-group">
                <input type="submit" name="send" value="Submit" class="btn submit-input">
            </div>

            <div class="informations form-group">
                <p class="legal-form">
                    * Required fields.
                    Visit <a href="https://cnil.fr" target="_blank" rel="noreferrer nofollow">cnil.fr</a> for more information on your rights.
                    The legal notice is available by clicking <a href="">here.</a>
                </p>
            </div>

        </div>

    </form>

</div>
@endempty
