@if (session('scroll'))
    <script>
        localStorage.setItem('scroll', true)
    </script>
@endif

@if (session('success'))
    @include('components.contact-form-success')
@else
    <div class="contact-form-container">
        <form class="__contact__form__" method="post" action="{{ route('contact.send') }}">
            @csrf
            <div class="primary form-section">
                <div class="name form-group">
                    <i class="fa-solid fa-asterisk"></i>
                    <input type="text" id="name" value="{{ session('elements')['name'] ?? '' }}"
                        placeholder="{{ __('labels.contact.firstName') }}" name="name"
                        class="form-control {{ $errors->has('name') ? 'form-error' : '' }}" required="required">
                    @if ($errors->has('name'))
                        <div class="error">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="email form-group">
                    <i class="fa-solid fa-asterisk"></i>
                    <input type="email" id="email" value="{{ session('elements')['email'] ?? '' }}"
                        placeholder="{{ __('labels.contact.email') }}" name="email"
                        class="form-control {{ $errors->has('email') ? 'form-error' : '' }}" required="required">
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
                    <input type="text" placeholder="{{ __('labels.contact.object') }}" value="{{ session('elements')['object'] ?? '' }}"
                        id="object" name="object"
                        class="form-control {{ $errors->has('object') ? 'form-error' : '' }}" required="required">
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
                    <textarea name="content" id="content" placeholder="{{ __('labels.contact.message') }}"
                        class="form-control {{ $errors->has('content') ? 'form-error' : '' }} area-text-form" rows="4"
                        required="required" maxlength="800">{{ session('elements')['content'] ?? '' }}</textarea>
                    <div class="container-length-indicator">
                        <div class="length-indicator">
                            <div class="indicator">
                                <span class="on">0</span>/<span class="limit">800</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="verification form-group">
                    <label for="verification"> {{ __('labels.contact.resolve') }} {{ round($secret * (2 / 3)) }} +
                        {{ round($secret * (1 / 3)) }} </label>
                    <input type="hidden" name="secret" value="{{ $secret }}">
                    <select name="verification" id="verification"
                        class="form-control {{ $errors->has('verification') ? 'form-error' : '' }}"
                        required="required">
                        <option selected disabled>{{ __('labels.contact.robot') }}</option>
                        @for ($i = round(($secret * 1) / 2); $i < $secret + 6; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    @if ($errors->has('verification'))
                        <div class="error">
                            {{ __('labels.contact.error.problem') }}
                        </div>
                    @endif
                </div>
                <div class="submit form-group">
                    <input type="submit" name="send" value="{{ __('labels.contact.submit') }}" class="btn submit-input">
                </div>
                <div class="informations form-group">
                    <p class="legal-form">
                        {!! __('labels.contact.required') !!}
                        {!! __('labels.contact.legals') !!}
                    </p>
                </div>
            </div>
        </form>
    </div>
@endif
