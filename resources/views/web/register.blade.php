@extends('layouts.web')

@section('header')
    <x-web.header></x-web.header>
@endsection
@section('body')

    <div class="font-gilroy font-medium text-gray text-lg leading-[27px]">

        <section>
            <div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
                <div class="container text-center">
                    <h2>Sign Up</h2>
                    <nav>
                        <ol class="flex items-center justify-center space-x-3">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home </a></li>
                            <li class="breadcrumb-item">-</li>
                            <li class="text-primary">Signup</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- contact us -->
            <!-- if query submission error -->
            @if ($errors->any())
                <div class="container">
                    <div class="bg-red-100 rounded-md text-xl w-full mt-16 p-16">
                        <h4 class="text-primary">Error!</h4>
                        <ul class="space-y-4">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <!-- if registration requestion successful -->
            @if (session('success'))
                <div class="container">
                    <div class="flex flex-col justify-center items-center bg-green-100 rounded-lg text-xl p-8 my-4">
                        <h4 class="text-secondary">{{ session('success') }}</h4>
                        <a href="{{ url('/') }}">
                            <h4 class="text-blue-600 hover:text-blue-800 mt-4">Go Next</h4>
                        </a>
                    </div>

                </div>
                <!-- display registration form -->
            @else
                <div class="container">
                    <div class="nav-tab-wrapper tabs section-padding">
                        <div class="container">
                            <div class=" grid grid-cols-12 gap-[30px]">
                                <div class="xl:col-span-5 lg:col-span-6 col-span-12 ">
                                    <div class="mini-title">Register Now</div>
                                    <h4 class="column-title ">
                                        Registeration
                                        <span class="shape-bg">
                                            Why?</span>
                                    </h4>
                                    <div>
                                        To begin with, you will need to register for the program on our website. Once you've
                                        filled in the necessary details and completed the payment process, you'll receive an
                                        email confirmation with further instructions.
                                    </div>

                                </div>
                                <div class="xl:col-span-7 lg:col-span-6 col-span-12">
                                    <div class="bg-white shadow-box7 p-8 rounded-md">
                                        <form class="form" method="post" action="{{ route('users.store') }}"
                                            onsubmit="return validation(event)">
                                            @csrf
                                            <div class="md:grid-cols-2 grid grid-cols-1 gap-[30px] mt-6 ">
                                                <div>
                                                    <input type="text" name="name" class="from-control"
                                                        placeholder="Name*" required>
                                                </div>
                                                <div>
                                                    <input type="email" name="email" class=" from-control"
                                                        placeholder="Email*" required>
                                                </div>
                                                <div>
                                                    <input type="password" id='password' name="password"
                                                        class=" from-control" placeholder="Password*" required>
                                                </div>
                                                <div>
                                                    <input type="password" id='confirm' name="confirm"
                                                        class=" from-control" placeholder="Confirm Password*" required>
                                                </div>

                                                <div>
                                                    <input type="hidden" id='confirm' name="referral"
                                                        class=" from-control" placeholder="Referral"
                                                        value="{{ request()->code ?? '' }}" readonly>
                                                </div>

                                            </div>
                                            <button class="btn btn-primary mt-4" type="submit" name="submit">
                                                Register Me
                                            </button>
                                        </form>
                                        <div class="mt-8 py-4 border-t border-slate-400 border-dashed">
                                            <a href="{{ url('web/login') }}" class="text-secondary text-xl">I already have
                                                an account</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </section>

    </div>

@endsection

@section('footer')
    <x-web.footer></x-web.footer>
@endsection

@section('script')
    <script>
        function validation(event) {
            var password = $('#password').val();
            var confirm = $('#confirm').val();

            if (password == confirm)
                return true;
            else {
                event.preventDefault(); //prevent form submission
                Swal.fire({
                    icon: 'warning',
                    title: "Password not matched!",
                    showConfirmButton: false,
                    timer: 1500
                });

                return false;
            }
        }
    </script>
@endsection
