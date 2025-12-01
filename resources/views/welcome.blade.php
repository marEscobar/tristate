<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Play | Free Tailwind CSS Template for Startup and SaaS By TailGrids
    </title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}" />

    <!-- ==== WOW JS ==== -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
</head>

<body>
    <!-- ====== Navbar Section Start -->
    <div class="absolute top-0 left-0 z-40 flex items-center w-full bg-primary ud-header"
        style=" height: 200px; padding-top: 20px;">
        <div class="container mx-auto">
            <div class="flex items-center justify-between w-full px-4 py-4"
                style="display: flex;justify-content: space-between;">
                <div class="hidden sm:flex" style="display: flex;flex-direction: column; align-items: left; width:33%">
                    <div class="mb-8 flex w-[330px] max-w-full">
                        <div class="loginBtn py-2 text-primary font-medium text-white hover:opacity-70"
                            style="padding:9%">
                            <svg width="29" height="35" viewBox="0 0 29 35" class="fill-current">
                                <path
                                    d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z" />
                                <path
                                    d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z" />
                            </svg>
                        </div>
                        <div>
                            <h5 class="loginBtn py-2 text-primary font-medium text-white hover:opacity-70">
                                Visit Our Location
                            </h5>
                            <p class="loginBtn py-2 text-primary font-medium text-white hover:opacity-70">
                                333 Wyandanch Avenue
                                <br>
                                West Babylon , NY 11704
                            </p>
                        </div>
                    </div>
                    {{-- <div>

                        <p class="loginBtn py-2 text-primary font-medium text-white hover:opacity-70">
                            Visit Our Location
                        </p>
                        <h5 class="loginBtn py-2 text-primary font-medium text-white hover:opacity-70">333 Wyandanch
                            Avenue
                            <br>
                            West Babylon , NY 11704
                        </h5>
                    </div> --}}
                </div>
                <div style="display: flex;flex-direction: column; align-items: center; width:34%">

                    <a href="index.html" class="block  navbar-logo">
                        <img src="{{ asset('img/logo.png') }}" alt="logo" class="header-logo" width="300"
                            height="100" />
                    </a>
                    <p class="loginBtn py-2 text-base font-medium text-white hover:opacity-70"
                        style="text-align: center;">
                        Free custom banner included with your exterior signage/awning order!
                    </p>
                </div>
                <div class="hidden sm:flex"
                    style="display: flex;flex-direction: column; align-items:flex-end; width:33%">
                    <a href="signup.html" style="font-size: 14px; padding-top: 3px"
                        class="px-6 py-2 text-base font-small text-white duration-300 ease-in-out rounded-md bg-white/20 signUpBtn hover:bg-white/100 hover:text-dark">
                        Request Call Back
                    </a>
                    <a href="#" class="loginBtn py-2 text-base font-medium text-white hover:opacity-70">
                        (718) 705-0333
                    </a>
                </div>
            </div>
            <div class="relative flex items-center justify-between -mx-4">
                <div class="flex items-center justify-between w-full px-4">
                    <div>
                        <button id="navbarToggler"
                            class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                        </button>
                        <nav id="navbarCollapse"
                            class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark-2 lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:shadow-none dark:lg:bg-transparent">
                            <ul class="blcok lg:flex" style="align-items: center;">
                                <li class="relative group">
                                    <a href="{{ url('/') }}"
                                        class="flex py-2 mx-8 text-base font-medium ud-menu-scroll text-dark group-hover:text-secondary dark:text-white lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70">
                                        Home
                                    </a>
                                </li>
                                <li class="relative submenu-item group">
                                    <a href="javascript:void(0)"
                                        class="relative flex items-center justify-between py-2 mx-8 text-base font-medium text-dark group-hover:text-secondary dark:text-white lg:ml-8 lg:mr-0 lg:inline-flex lg:py-6 lg:pl-0 lg:pr-4 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                                        Sign Services

                                        <svg class="ml-2 fill-current" width="16" height="20" viewBox="0 0 16 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99999 14.9C7.84999 14.9 7.72499 14.85 7.59999 14.75L1.84999 9.10005C1.62499 8.87505 1.62499 8.52505 1.84999 8.30005C2.07499 8.07505 2.42499 8.07505 2.64999 8.30005L7.99999 13.525L13.35 8.25005C13.575 8.02505 13.925 8.02505 14.15 8.25005C14.375 8.47505 14.375 8.82505 14.15 9.05005L8.39999 14.7C8.27499 14.825 8.14999 14.9 7.99999 14.9Z" />
                                        </svg>
                                    </a>
                                    <div
                                        class="submenu relative left-0 top-full hidden w-[250px] rounded-xs bg-white p-4 transition-[top] duration-300 group-hover:opacity-100 dark:bg-dark-2 lg:invisible lg:absolute lg:top-[110%] lg:block lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full">
                                        <a href="about.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            About Page
                                        </a>
                                        <a href="pricing.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Pricing Page
                                        </a>
                                        <a href="contact.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Contact Page
                                        </a>
                                        <a href="blog-grids.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Blog Grid Page
                                        </a>
                                        <a href="blog-details.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Blog Details Page
                                        </a>
                                        <a href="signup.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Sign Up Page
                                        </a>
                                        <a href="signin.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Sign In Page
                                        </a>
                                        <a href="404.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            404 Page
                                        </a>
                                    </div>
                                </li>
                                <li class="relative submenu-item group">
                                    <a href="javascript:void(0)"
                                        class="relative flex items-center justify-between py-2 mx-8 text-base font-medium text-dark group-hover:text-secondary dark:text-white lg:ml-8 lg:mr-0 lg:inline-flex lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70">
                                        Awning Services

                                        <svg class="ml-2 fill-current" width="16" height="20" viewBox="0 0 16 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99999 14.9C7.84999 14.9 7.72499 14.85 7.59999 14.75L1.84999 9.10005C1.62499 8.87505 1.62499 8.52505 1.84999 8.30005C2.07499 8.07505 2.42499 8.07505 2.64999 8.30005L7.99999 13.525L13.35 8.25005C13.575 8.02505 13.925 8.02505 14.15 8.25005C14.375 8.47505 14.375 8.82505 14.15 9.05005L8.39999 14.7C8.27499 14.825 8.14999 14.9 7.99999 14.9Z" />
                                        </svg>
                                    </a>
                                    <div
                                        class="submenu relative left-0 top-full hidden w-[250px] rounded-xs bg-white p-4 transition-[top] duration-300 group-hover:opacity-100 dark:bg-dark-2 lg:invisible lg:absolute lg:top-[110%] lg:block lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full">
                                        <a href="about.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            About Page
                                        </a>
                                        <a href="pricing.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Pricing Page
                                        </a>
                                        <a href="contact.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Contact Page
                                        </a>
                                        <a href="blog-grids.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Blog Grid Page
                                        </a>
                                        <a href="blog-details.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Blog Details Page
                                        </a>
                                        <a href="signup.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Sign Up Page
                                        </a>
                                        <a href="signin.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Sign In Page
                                        </a>
                                        <a href="404.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            404 Page
                                        </a>
                                    </div>
                                </li>
                                <li class="relative group">
                                    <a href="#pricing"
                                        class="flex py-2 mx-8 text-base font-medium ud-menu-scroll text-dark group-hover:text-secondary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 ">
                                        Sign and Awnings Installations
                                    </a>
                                </li>
                                <li class="relative group">
                                    <a href="#team"
                                        class="flex py-2 mx-8 text-base font-medium ud-menu-scroll text-dark group-hover:text-secondary dark:text-white lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70">
                                        LED Displays Services
                                    </a>
                                </li>
                                <li class="relative group">
                                    <a href="#contact"
                                        class="flex py-2 mx-8 text-base font-medium ud-menu-scroll text-dark group-hover:text-secondary dark:text-white lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70">
                                        Sign Permit Expediting
                                    </a>
                                </li>
                                <li class="relative submenu-item group">
                                    <a href="javascript:void(0)"
                                        class="relative flex items-center justify-between py-2 mx-8 text-base font-medium text-dark group-hover:text-secondary dark:text-white lg:ml-8 lg:mr-0 lg:inline-flex lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70">
                                        About

                                        <svg class="ml-2 fill-current" width="16" height="20"
                                            viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99999 14.9C7.84999 14.9 7.72499 14.85 7.59999 14.75L1.84999 9.10005C1.62499 8.87505 1.62499 8.52505 1.84999 8.30005C2.07499 8.07505 2.42499 8.07505 2.64999 8.30005L7.99999 13.525L13.35 8.25005C13.575 8.02505 13.925 8.02505 14.15 8.25005C14.375 8.47505 14.375 8.82505 14.15 9.05005L8.39999 14.7C8.27499 14.825 8.14999 14.9 7.99999 14.9Z" />
                                        </svg>
                                    </a>
                                    <div
                                        class="submenu relative left-0 top-full hidden w-[250px] rounded-xs bg-white p-4 transition-[top] duration-300 group-hover:opacity-100 dark:bg-dark-2 lg:invisible lg:absolute lg:top-[110%] lg:block lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full">
                                        <a href="about.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            About Page
                                        </a>
                                        <a href="pricing.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Pricing Page
                                        </a>
                                        <a href="contact.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Contact Page
                                        </a>
                                        <a href="blog-grids.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Blog Grid Page
                                        </a>
                                        <a href="blog-details.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Blog Details Page
                                        </a>
                                        <a href="signup.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Sign Up Page
                                        </a>
                                        <a href="signin.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Sign In Page
                                        </a>
                                        <a href="404.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            404 Page
                                        </a>
                                    </div>
                                </li>
                                <li class="relative submenu-item group">
                                    <a href="javascript:void(0)"
                                        class="relative flex items-center justify-between py-2 mx-8 text-base font-medium text-dark group-hover:text-secondary dark:text-white lg:ml-8 lg:mr-0 lg:inline-flex lg:py-6 lg:pl-0 lg:pr-4 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 ">
                                        Contact

                                        <svg class="ml-2 fill-current" width="16" height="20"
                                            viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99999 14.9C7.84999 14.9 7.72499 14.85 7.59999 14.75L1.84999 9.10005C1.62499 8.87505 1.62499 8.52505 1.84999 8.30005C2.07499 8.07505 2.42499 8.07505 2.64999 8.30005L7.99999 13.525L13.35 8.25005C13.575 8.02505 13.925 8.02505 14.15 8.25005C14.375 8.47505 14.375 8.82505 14.15 9.05005L8.39999 14.7C8.27499 14.825 8.14999 14.9 7.99999 14.9Z" />
                                        </svg>
                                    </a>
                                    <div
                                        class="submenu relative left-0 top-full hidden w-[250px] rounded-xs bg-white p-4 transition-[top] duration-300 group-hover:opacity-100 dark:bg-dark-2 lg:invisible lg:absolute lg:top-[110%] lg:block lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full">
                                        <a href="about.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            About Page
                                        </a>
                                        <a href="pricing.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Pricing Page
                                        </a>
                                        <a href="contact.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Contact Page
                                        </a>
                                        <a href="blog-grids.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Blog Grid Page
                                        </a>
                                        <a href="blog-details.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Blog Details Page
                                        </a>
                                        <a href="signup.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Sign Up Page
                                        </a>
                                        <a href="signin.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            Sign In Page
                                        </a>
                                        <a href="404.html"
                                            class="block rounded-sm px-4 py-[10px] text-sm text-body-color hover:text-secondary dark:text-dark-6 dark:hover:text-secondary">
                                            404 Page
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ====== Navbar Section End -->
    <!-- ====== Hero Section Start -->
    @yield('content')
    <!-- ====== Hero Section End -->

    <!-- ====== Back To Top Start -->
    <a href="javascript:void(0)"
        class="fixed left-auto items-center justify-center hidden w-10 h-10 text-white transition duration-300 ease-in-out rounded-md shadow-md back-to-top bottom-8 right-8 z-999 bg-primary hover:bg-secondary">
        <span class="mt-[6px] h-3 w-3 rotate-45 border-l border-t border-white"></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== Made With Button Start -->
    <a target="_blank" rel="nofollow noopener"
        class="fixed bottom-8 left-4 z-999 inline-flex items-center gap-[10px] rounded-lg bg-white px-[14px] py-2 shadow-2 dark:bg-dark-2 sm:left-9"
        href="https://tailgrids.com/">
        <span class="text-base font-medium text-dark-3 dark:text-dark-6">
            Made with
        </span>
        <span class="block w-px h-4 bg-stroke dark:bg-dark-3"></span>
        <span class="block w-full max-w-[88px]">
            <img src="./assets/images/brands/tailgrids.svg" alt="tailgrids" class="dark:hidden" />
            <img src="./assets/images/brands/tailgrids-white.svg" alt="tailgrids" class="hidden dark:block" />
        </span>
    </a>
    <!-- ====== Made With Button End -->

    <!-- ====== All Scripts -->

    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        // ==== for menu scroll
        const pageLink = document.querySelectorAll(".ud-menu-scroll");

        pageLink.forEach((elem) => {
            elem.addEventListener("click", (e) => {
                e.preventDefault();
                document.querySelector(elem.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                    offsetTop: 1 - 60,
                });
            });
        });

        // section menu active
        function onScroll(event) {
            const sections = document.querySelectorAll(".ud-menu-scroll");
            const scrollPos =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop;

            for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                if (
                    refElement.offsetTop <= scrollTopMinus &&
                    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                ) {
                    document
                        .querySelector(".ud-menu-scroll")
                        .classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
            }
        }

        window.document.addEventListener("scroll", onScroll);

        // Testimonial
        const testimonialSwiper = new Swiper(".testimonial-carousel", {
            slidesPerView: 1,
            spaceBetween: 30,

            // Navigation arrows
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    </script>
</body>

</html>
