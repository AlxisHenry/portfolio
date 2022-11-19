@if(session('scroll'))

    <script>

        localStorage.setItem('scroll', true)

    </script>

@endif

@if(session('success'))

    @include('components.contact-form-success')

@else

<div class="contact-form-container">

    <form class="__contact__form__" method="post" action="{{route('contact.send')}}">

        @csrf

        <div class="primary form-section">

            <div class="name form-group">
                <i class="fa-solid fa-asterisk"></i>
                <input type="text" id="name" value="{{ session('elements')['name'] ?? '' }}" placeholder="First Name" name="name" class="form-control {{ $errors->has('name') ? 'form-error' : '' }}" required="required">
                @if ($errors->has('name'))
                    <div class="error">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>

            <div class="email form-group">
                <i class="fa-solid fa-asterisk"></i>
                <input type="email" id="email" value="{{ session('elements')['email'] ?? '' }}" placeholder="Email" name="email" class="form-control {{ $errors->has('email') ? 'form-error' : '' }}" required="required">
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
                <input type="text" placeholder="Object" value="{{ session('elements')['object'] ?? '' }}" id="object" name="object" class="form-control {{ $errors->has('object') ? 'form-error' : '' }}" required="required">
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
                <textarea name="content" id="content" placeholder="Message" class="form-control {{ $errors->has('content') ? 'form-error' : '' }} area-text-form" rows="4" required="required"  maxlength="800">{{session('elements')['content']??''}}</textarea>
                <div class="container-length-indicator">
                    <div class="length-indicator">
                        <div class="indicator">
                            <span class="on">0</span>/<span class="limit">800</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="verification form-group">
                <label for="verification"> Resolve {{ round($random_number * (2/3)) }} + {{ round($random_number * (1/3)) }} </label>
                <input type="hidden" name="random_number" value="{{ $random_number }}">
                <select name="verification" id="verification" class="form-control {{ $errors->has('verification') ? 'form-error' : '' }}" required="required">
                    <option selected disabled>Prove you're not a robot !</option>
                    @for($i = round($random_number * 1/2); $i < $random_number + 6; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                @if($errors->has('verification'))
                    <div class="error">
                        Please, solve the problem.
                    </div>
                @endif
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

@endif