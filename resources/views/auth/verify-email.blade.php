<x-guest-layout>

            <div class="col-lg-8">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-7 p-4 mb-0">
                             <h1>Email Verification</h1>
                                <p class="text-medium-emphasis">Verify your account</p>

                             <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            
        </div>
                        </div>
                        <div class="card col-md-5 text-white bg-danger py-5">
                            <div class="align-items-center card-body d-flex justify-content-center text-center">
                                <div>
                                     <h2>Sign out</h2>
                                    <p>Welcome to Voter card Service .</p>


                                    <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn btn-lg btn-outline-light mt-3">
                    {{ __('Log Out') }}
                </button>
            </form>

                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
</x-guest-layout>
