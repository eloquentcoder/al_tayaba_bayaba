<div>
    <style>
        .page-banner {
            background-image: url({{ asset('uploads/logo/banner.jpg') }});
        }
    </style>

    <!-- page banner -->
    <section class="page-banner">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE-BANNER -->


    <!-- login -->
    <section class="login-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="login-box">



                        <form wire:submit="doLogin">
                            <input type="hidden" name="_token" value="eyMmaUdfwFpo2o10Xuplh41oWJ6ToUfyF0KBr3Mo">
                            <div class="box mb-4">
                                <h4 class="golden-text">your email or username</h4>
                                <div>
                                    <div class="input-group">
                                        <div class="img">
                                            <img src="{{ asset('themes/deepblack/img/icon/email2.png') }}"
                                                alt="email img" />
                                        </div>
                                        <input type="text" wire:model="email_username" class="form-control"
                                            placeholder="Email Or Username" />
                                    </div>
                                    @error('email_username')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="box mb-4">
                                <h4 class="golden-text">
                                    Your password
                                    <a href="{{ route('password-reset') }}" class="golden-text">Forget password?</a>
                                </h4>
                                <div>
                                    <div class="input-group">
                                        <div class="img">
                                            <img src="{{ asset('themes/deepblack/img/icon/padlock.png') }}"
                                                alt="password img" />
                                        </div>
                                        <input type="password" wire:model="password" class="form-control"
                                            placeholder="Password" />
                                    </div>
                                    @error('password')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4 bottom">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                        id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <div class="textcolor">
                                            Remember me
                                        </div>
                                    </label>
                                </div>
                                <span class="text-end">
                                    <div class="textcolor">
                                        New User? <a href="{{ route('register') }}" class="golden-text">Register</a>
                                    </div>
                                </span>
                            </div>
                            <button class="gold-btn-block" type="submit" wire:loading.attr="disabled">
                                <span wire:loading.remove>Sign in</span>
                                <span wire:loading>Loading...</span>
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
