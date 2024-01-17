<x-guest-layout>
    <div class="col-lg-8">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-7 p-4 mb-0">

                            <form class="card-body p-4" method="POST" action="{{ route('register') }}">
                                @csrf
                                <h1>Register</h1>
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                <p class="text-medium-emphasis">Create your account</p>
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>

                                        </svg></span>
                                    <input class="form-control" placeholder="Firt Name" type="text" name="first_name"
                                        :value="old('first_name')" required autofocus>
                                </div>

                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>

                                        </svg></span>
                                    <input class="form-control" placeholder="Last Name" type="text"
                                        name="last_name" :value="old('last_name')" required autofocus>
                                </div>

                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open">
                                            </use>
                                        </svg></span>
                                    <input class="form-control" type="email" name="email" :value="old('email')"
                                        required placeholder="Email">
                                </div>
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                        </svg></span>
                                    <input class="form-control" id="password" type="password" name="password"
                                        required autocomplete="new-password" placeholder="Password">
                                </div>
                                <div class="input-group mb-4"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                        </svg></span>
                                    <input class="form-control" id="password_confirmation" type="password"
                                        name="password_confirmation" required placeholder="Repeat password">
                                </div>
                                <button class="btn btn-block btn-success" type="submit">Create Account</button>
                            </form>
                        </div>
                        <div class="card col-md-5 text-white bg-primary py-5">
                            <div class="align-items-center card-body d-flex justify-content-center text-center">
                                <div>
                                    <h2>Sign in</h2>
                                    <p>Welcome to Voter card Service .</p>
                                    <a class="btn btn-lg btn-outline-light mt-3" href="{{ url('login') }}">Login
                                        Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
</x-guest-layout>