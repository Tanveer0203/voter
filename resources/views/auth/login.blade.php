<x-guest-layout>
                <div class="col-lg-8">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-7 p-4 mb-0">
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('login') }}" class="card-body">
                                @csrf


                                <h1>Login</h1>
                                <p class="text-medium-emphasis">Sign In to your account</p>
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                        </svg></span>
                                    <input class="form-control" type="email" name="email" :value="old('email')"
                                        required autofocus placeholder="Username">
                                </div>
                                <div class="input-group mb-4"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                        </svg></span>
                                    <input class="form-control" type="password" name="password" required
                                        autocomplete="current-password" placeholder="Password">
                                </div>



                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary px-4" type="submit">Login</button>
                                    </div>
                                    <div class="col-6 text-end">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">
                                                <button class="btn btn-link px-0" type="button">Forgot
                                                    password?</button>
                                            </a>
                                        @endif

                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="card col-md-5 text-white bg-primary py-5">
                            <div class="align-items-center card-body d-flex justify-content-center text-center">
                                <div>
                                    <h2>Sign up</h2>
                                    <p>Welcome to Voter card Service .</p>
                                    <a class="btn btn-lg btn-outline-light mt-3"
                                        href="{{ url('register') }}">Register Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
</x-guest-layout>