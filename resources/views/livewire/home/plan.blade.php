<div>
    <!-- PAGE-BANNER -->
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
                        <h2>Packages</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE-BANNER -->

    <!-- plan start -->
    <section class="pricing-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-text text-center">
                        <h5>JOIN NOW</h5>
                        <h2>RENTAL PACKAGES</h2>
                        <div class="textcolor">We offer different types of rental packages, which allows you earning
                            along with learning.</div>
                    </div>
                </div>
            </div>
            <div class="row ">
                @foreach ($plans as $plan)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="box" data-aos="fade-up" data-aos-duration="800"
                            data-aos-anchor-placement="center-bottom">
                            <h2>{{ $plan->title }}</h2>
                            <!-- <h4 class="golden-text">Monthly Rental Plan</h4> -->
                            <h3>${{ $plan->min_investment_amount }} - ${{ $plan->max_investment_amount }}</h3>
                            <div class="bg">
                                <span class="golden-text">{{ $plan->min_interest_rate }}% - {{ $plan->max_interest_rate }}% <small class="small-font">Every Month</small></span>
                            </div>

                            <h4 class="golden-text">{{ $plan->description }}</h4>
                            <!-- <h4>Any Hidden Charges :
                                <small><span class="badge-small badge bg-danger">No</span></small></h4> -->
                            <!-- <h4>  <span class="golden-text">Total 125 % + </span>   </h4> -->
                            <button class="gold-btn btn investNow" type="button" data-price="${{ $plan->min_investment_amount }} - ${{ $plan->max_investment_amount }}"
                                data-resource="{&quot;id&quot;:11,&quot;name&quot;:&quot;{{$plan->title}}&quot;,&quot;badge&quot;:&quot;Premium&quot;,&quot;minimum_amount&quot;:&quot;{{ $plan->min_investment_amount }}&quot;,&quot;maximum_amount&quot;:&quot;{{ $plan->max_investment_amount }}&quot;,&quot;fixed_amount&quot;:&quot;0&quot;,&quot;profit&quot;:&quot;{{ $plan->min_interest_rate }}&quot;,&quot;profit_type&quot;:1,&quot;schedule&quot;:24,&quot;status&quot;:1,&quot;is_capital_back&quot;:0,&quot;is_lifetime&quot;:0,&quot;repeatable&quot;:655,&quot;featured&quot;:1,&quot;created_at&quot;:&quot;2024-06-29T23:28:59.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-08-24T12:41:13.000000Z&quot;,&quot;price&quot;:&quot;$100 - $50000&quot;}">Purchase
                                Now </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- plan end -->



    <!-- INVEST-NOW MODAL -->
    <div class="modal fade addFundModal" id="investNowModal" tabindex="-1" data-bs-backdrop="static" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title golden-text" id="exampleModalLabel">Purchase Now</h3>
                    <button type="button" data-bs-dismiss="modal" class="btn-close btn-close-investment"
                        aria-label="Close">
                        <img src="{{ asset('themes/deepblack/img/icon/cross.png') }}" alt="cross img" />
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-block">
                        <form class="login-form" id="invest-form" wire:submit.prevent="createPlan">
                            <input type="hidden" name="_token" value="eyMmaUdfwFpo2o10Xuplh41oWJ6ToUfyF0KBr3Mo">
                            <div class="signin">
                                <h2 class="title golden-text text-center plan-name"></h2>
                                <p class=" text-center price-range lebelFont textcolor"></p>
                                <p class="text-center profit-details lebelFont textcolor"></p>
                                {{-- <p class="text-center profit-validity pb-3 lebelFont textcolor"></p> --}}

                                <div class="form-group mb-3">
                                    <h5 class="mb-2 golden-text d-block modal_text_level">Select wallet</h5>
                                    <select class="form-control" name="balance_type" wire:model="wallet">
                                        <option value="checkout" class="bg-dark text-white">Checkout</option>
                                        @if (auth()->check())
                                        <option value="deposit_balance" class="bg-dark text-white">{{ Deposit Balance - auth()->user()->balance->deposit_balance }}</option>
                                        <option value="main_balance" class="bg-dark text-white">{{ Main Balance - auth()->user()->balance->main_balance }}</option>
                                        <option value="emr_balance" class="bg-dark text-white">{{ EMR Balance - auth()->user()->balance->emr_balance }}</option>
                                        <option value="emr_share_balance" class="bg-dark text-white">{{ EMR Share Balance - auth()->user()->balance->emr_share_balance }}</option>
                                        <option value="sales_bonus_balance" class="bg-dark text-white">{{ Sales Bonus Balance -  auth()->user()->balance->sales_bonus_balance }}</option>
                                        @endif
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="box">
                                        <h5 class="golden-text">Amount</h5>
                                        <div class="input-group">
                                            <input type="text" class="invest-amount form-control" name="amount"
                                                id="amount" value=""
                                                onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                                                autocomplete="off" placeholder="Enter amount" wire:model="amount">
                                            <button class="gold-btn show-currency"></button>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="plan_id" class="plan-id">

                                <div class="btn-area mb-30 modal-footer border-top-0 p-0">
                                    <button type="submit" class="gold-btn w-100">Purchase Now</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- INVEST-NOW MODAL -->


    <section class="faq-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-text text-center">
                        <h5>ANY QUESTIONS</h5>
                        <h2>We've Got Answers</h2>
                        <div class="textcolor">Certainly! Here are some frequently asked questions about AI Tayaba
                            Properties, your trusted management company. We combine human expertise with AI-driven
                            solutions to empower your financial journey. Feel free to explore our website and reach out
                            to us for personalized advice and solutions.</div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item mb-4">
                            <h4 class="accordion-header mb-0 " id="heading0">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                    What is wealth management? </button>
                            </h4>
                            <div id="collapse0" class="accordion-collapse collapse show" aria-labelledby="heading0"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="textcolor">
                                        Wealth management involves comprehensive financial planning and personalized
                                        strategies to help individuals and families achieve their financial goals. It
                                        encompasses portfolio management, retirement planning, risk assessment, and
                                        tax-efficient strategies. </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4">
                            <h4 class="accordion-header mb-0 " id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    Why would someone need wealth management? </button>
                            </h4>
                            <div id="collapse1" class="accordion-collapse collapse " aria-labelledby="heading1"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="textcolor">
                                        Wealth management provides expert guidance, personalized solutions, and risk
                                        management to optimize your financial portfolio. Whether you’re building wealth,
                                        planning for retirement, or safeguarding your assets, professional advice can
                                        make a significant difference. </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4">
                            <h4 class="accordion-header mb-0 " id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    How much do I need for wealth management? </button>
                            </h4>
                            <div id="collapse2" class="accordion-collapse collapse " aria-labelledby="heading2"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="textcolor">
                                        The amount needed for wealth management varies based on individual
                                        circumstances. Whether you have substantial assets or are just starting, a
                                        wealth management advisor can tailor services to your specific needs. </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4">
                            <h4 class="accordion-header mb-0 " id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    What does wealth management cost? </button>
                            </h4>
                            <div id="collapse3" class="accordion-collapse collapse " aria-labelledby="heading3"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="textcolor">
                                        The cost of wealth management depends on factors such as the complexity of your
                                        financial situation, services provided, and the advisor’s fee structure. It’s
                                        essential to discuss fees transparently with your advisor. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partner-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="partners owl-carousel">
                        <img src="{{ asset('uploads/gateway/6645fe93202151715863187.jpg') }}" class="image-partners"
                            alt="USDT - TRC20" />
                        <img src="{{ asset('uploads/gateway/669abaa977a351721416361.jpg') }}" class="image-partners"
                            alt="Local Bank Deposit" />
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
