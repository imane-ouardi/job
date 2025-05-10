<div class="absolute top-0 left-0 z-40 flex items-center w-full bg-transparent ud-header">
    <div class="container px-4 mx-auto">
        <div class="relative flex items-center justify-between -mx-4">
            <div class="max-w-full px-4 w-60">
                <a href="{{ route('home') }}" class="block w-full py-5 navbar-logo">
                    <img src="assets/images/logo/logoo.svg" alt="logo" class="  header-logo" />
                </a>
            </div>
            <div class="flex items-center justify-between w-241 ">
                <div>
                    <button id="navbarToggler"
                        class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                    </button>
                    <nav id="navbarCollapse"
                        class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg  lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:px-4 lg:py-0 lg:shadow-none  xl:px-6">
                        <ul class="blcok lg:flex 2xl:ml-20">
                            <li class="relative group">
                                <a href="#home"
                                    class="flex py-2 mx-8 text-base font-medium ud-menu-scroll text-dark group-hover:text-primary d lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70">
                                    Home
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="#Jobs"
                                    class="flex py-2 mx-8 text-base font-medium ud-menu-scroll text-dark group-hover:text-primary d lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                                    Find job
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="#about"
                                    class="flex py-2 mx-8 text-base font-medium ud-menu-scroll text-dark group-hover:text-primary d lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                                    About
                                </a>
                            </li>
                            <li class="relative group">
                        
                            </li>
                            <li class="relative group">
                                <a href="#contact"
                                    class="flex py-2 mx-8 text-base font-medium ud-menu-scroll text-dark group-hover:text-primary 
                d lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white 
                lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                                    Contact
                                </a>
                            </li>
                            <li class="relative group">
                       
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="flex items-center justify-end pr-16 lg:pr-0">

                    @if (!auth()->check())
                        <div class="hidden sm:flex">
                            <a href="{{ route('signin') }}"
                                class="loginBtn px-[22px] py-2 text-base font-medium text-white hover:opacity-70">
                                Sign In
                            </a>
                            <a href="{{ route('signup') }}"
                                class="px-6 py-2 text-base font-medium text-white duration-300 ease-in-out rounded-md bg-white/20 signUpBtn hover:bg-white/100 hover:text-dark">
                                Sign Up
                            </a>
                        </div>
                    @else
                        <a href="{{ auth()->user()?->role }}"
                            class="loginBtn px-[22px] py-2 text-base font-medium text-white hover:opacity-70">
                            profile
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
