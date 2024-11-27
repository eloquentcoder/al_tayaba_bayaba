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
                        <h2>2FA Verification</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE-BANNER -->


    <!-- 2fa -->
    <section class="login-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="login-box">
                        <form wire:submit="verify2FA">
                            <div class="box mb-4">
                                <h4 class="golden-text">Enter token</h4>
                                <div>
                                    <div class="input-group">
                                        <input type="text" wire:model="token" class="form-control"
                                            placeholder="Enter Verification Token" />
                                    </div>
                                    @error('token')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                          
                            <button class="gold-btn-block" type="submit">Verify</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
