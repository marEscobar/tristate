@extends('welcome')
@section('content')
    <div style="background-color: #000;">


        <div id="home" class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]"
            style="padding-top: 250px;background-image: url('{{ asset('img/home-bg.png') }}'); background-repeat: no-repeat; background-size:cover; ">
            <div class="container px-4 mx-auto">
                <div class="flex flex-wrap items-center ">
                    <div class="w-full px-4" style="display: flex;">

                        <div  class="w-full px-4 lg:w-7/12 xl:w-7/12 text-center" data-wow-delay=".2s">
                            <h1
                                class="mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]">
                                Custom Signs in West Babylon, NY and <br> Surrounding Areas
                            </h1>
                            <p
                                class="mx-auto mb-9 max-w-[600px] text-base font-medium text-white sm:text-lg sm:leading-[1.44]">
                                Five-Year Sign Warranty <br>

                                Impossible Deadlines? No Problem—We Deliver <br>

                                Over 40 Years Of Trusted Experience <br>

                                Your Local One-stop Shop For All Signage And Awning Needs: No Job Too Big Or Too Small
                            </p>
                            <h2 class="mb-4 text-3xl font-bold leading-snug text-white sm:text-3xl sm:leading-snug lg:text-2xl lg:leading-[1.2]">(718) 705-0333</h2>
                            <h2 class=" text-white ">Hours: Closed • Opens 08:00 am</h2>
                        </div>

                        <div class="w-full px-4 lg:w-5/12 xl:w-4/12" style="padding-bottom: 15px">
                            <div class="wow fadeInUp rounded-lg bg-primary px-8 py-10 shadow-testimonial dark:bg-dark-2 dark:shadow-none sm:px-10 sm:py-12 md:p-[10px] lg:p-10 lg:px-10 lg:py-12 2xl:p-[10px]"
                                data-wow-delay=".2s" style="opacity: 0.95">
                                <h4
                                    class="mb-8 text-2xl font-semibold text-white dark:text-white md:text-[28px] md:leading-[1.42]">
                                    <b> Request Call Back </b>
                                </h4>
                                <form>
                                    <div class="mb-[22px]">
                                        {{-- <label for="fullName"
                                            class="block mb-4 text-sm text-white text-body-color dark:text-dark-6">Full
                                            Name*</label> --}}
                                        <input type="text" name="fullName" placeholder="Full Name"
                                            class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-white text-body-color placeholder:text-white/60 focus:border-primary focus:outline-hidden dark:border-dark-3 dark:text-dark-6" />
                                    </div>
                                    <div class="mb-[22px]">
                                        {{-- <label for="email"
                                            class="block mb-4 text-white text-sm text-body-color dark:text-dark-6">Email*</label>--}}
                                        <input type="email" name="email" placeholder="Email"
                                            class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-white text-body-color placeholder:text-white/60 focus:border-primary focus:outline-hidden dark:border-dark-3 dark:text-dark-6" />
                                    </div>
                                    <div class="mb-[22px]">
                                        {{-- <label for="phone"
                                            class="block mb-4 text-sm text-white text-body-color dark:text-dark-6">Phone*</label>--}}
                                        <input type="text" name="phone" placeholder="Phone"
                                            class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-white text-body-color placeholder:text-white/60 focus:border-primary focus:outline-hidden dark:border-dark-3 dark:text-dark-6" />
                                    </div>
                                    <div class="mb-[30px]">
                                        <label for="message"
                                            class="block mb-4 text-sm text-white text-body-color dark:text-dark-6">Service*</label>
                                        <textarea name="message" rows="1" placeholder="type your message here"
                                            class="w-full resize-none border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-hidden dark:border-dark-3 dark:text-dark-6"></textarea>
                                    </div>
                                    <div class="mb-0">
                                        <button type="submit"
                                            class="inline-flex items-center justify-center px-10 py-3 text-base font-medium text-white transition duration-300 ease-in-out rounded-md bg-primary hover:bg-blue-dark">
                                            Send
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="bg-primary" style="height: 100px;">
        holi
    </div>
@endsection
