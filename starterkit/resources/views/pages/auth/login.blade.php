<x-auth-layout>
    <div class="form-section">
        <img src="{{ image('logos/logo2.png') }}"  class="logo">
        <form action="">
            <div class="input-addon">
                <input type="email" placeholder="Email">
            </div>
            <div class="input-addon">
                <input type="password" placeholder="Password">
            </div>
            <div class="text-right">
                <a href="">Password Dimenticata?</a>
            </div>
            <div class="loginbtn">
                <button>Sigh In</button>
            </div>
            <div class="text-center">
                <a href=""><label>Non sei ancora iscritto? Registrati</label></a>
            </div>
        </form>
    </div>

    <!--begin::Form-->
    {{-- <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="{{ route('dashboard') }}" action="{{ route('login') }}">
        @csrf
        <!--begin::Heading-->
        <div class="text-center mb-11">

            <!--begin::Subtitle-->
            <div class="text-gray-500 fw-semibold fs-6">
                <img alt="Logo" src="{{ image('logos/logo2.png') }}" class="w-lg-300px"/>
            </div>
            <!--end::Subtitle--->
        </div>
        <!--begin::Heading-->



        <!--begin::Input group--->
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" value="demo@demo.com"/>
            <!--end::Email-->
        </div>

        <!--end::Input group--->
        <div class="fv-row mb-3">
            <!--begin::Password-->
            <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" value="demo"/>
            <!--end::Password-->
        </div>
        <!--end::Input group--->

        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
            <div></div>

            <!--begin::Link-->
            <a href="{{ route('password.request') }}" class="link-primary">
                Forgot Password ?
            </a>
            <!--end::Link-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Submit button-->
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                @include('partials/general/_button-indicator', ['label' => 'Sign In'])
            </button>
        </div>
        <!--end::Submit button-->

        <!--begin::Sign up-->
        <div class="text-gray-500 text-center fw-semibold fs-6">
            Not a Member yet?

            <a href="{{ route('register') }}" class="link-primary">
                Sign up
            </a>
        </div>
        <!--end::Sign up-->
    </form> --}}
    {{-- <div class="form-section">
        <img alt="Logo" src="{{ image('logos/logo2.png') }}" class="h-60px h-lg-75px"/>
        <form action="">
            <div class="input-addon">
                <input type="email" placeholder="Email">
            </div>
            <div class="input-addon">
                <input type="password" placeholder="Password">
            </div>
            <div class="text-right">
                <a href="">Password Dimenticata?</a>
            </div>
            <div class="loginbtn">
                <button>Sigh In</button>
            </div>
            <div class="text-center">
                <a href=""><label>Non sei ancora iscritto? Registrati</label></a>
            </div>
        </form>
    </div> --}}
    <!--end::Form-->

</x-auth-layout>
