@extends('welcome')
@section('content')
    <div style="background-color: #000;">


        <div id="home" class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]"
            style="padding-top: 250px;background-image: url('{{ asset('img/home-bg.png') }}'); background-repeat: no-repeat; background-size:cover; ">
            <div class="container px-4 mx-auto">
                <div class="flex flex-wrap items-center ">
                    <div class="w-full px-4" style="display: flex;">

                        <div class="w-full px-4 lg:w-7/12 xl:w-7/12 text-center" data-wow-delay=".2s">
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
                            <h2
                                class="mb-4 text-3xl font-bold leading-snug text-white sm:text-3xl sm:leading-snug lg:text-2xl lg:leading-[1.2]">
                                (718) 705-0333</h2>
                            <h2 class=" text-white ">Hours: <span class="text-danger" style="color: #ff0000;">Closed</span>
                                • Opens 08:00 am</h2>
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
                                            class="block mb-4 text-white text-sm text-body-color dark:text-dark-6">Email*</label> --}}
                                        <input type="email" name="email" placeholder="Email"
                                            class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-white text-body-color placeholder:text-white/60 focus:border-primary focus:outline-hidden dark:border-dark-3 dark:text-dark-6" />
                                    </div>
                                    <div class="mb-[22px]">
                                        {{-- <label for="phone"
                                            class="block mb-4 text-sm text-white text-body-color dark:text-dark-6">Phone*</label> --}}
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
    <div class="relative overflow-hidden bg-primary " style="padding-top: 50px">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap items-center ">
                <div class="w-full px-4" style="display: flex;">

                    <div class="w-full px-4 lg:w-5/12 xl:w-5/12 text-center" data-wow-delay=".2s"
                        style=" display: flex;justify-content: flex-end;">
                        <div class="w-full px-4 lg:w-5/12 xl:w-5/12"
                            style="width: 150px; height: 150px; border-radius: 15%; padding: 20px; background-color: #406497;">

                            <svg fill="white" id="1141745877" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 64 64" class="svg u_1141745877" data-icon-custom="true"
                                data-icon-name="video-chat.svg">
                                <title id="1129826765">A black and white icon of a person talking on a computer screen.
                                </title>
                                <path
                                    d="M260.55346,282.40881h-22a1,1,0,0,1-.55469-1.832l2.55469-1.7032v-1.4648h2v2a.99947.99947,0,0,1-.44531.832l-.252.168h15.39457l-.252-.168a.99951.99951,0,0,1-.4453-.832v-2h2v1.4648l2.5547,1.7032a1,1,0,0,1-.5547,1.832Z"
                                    transform="translate(-217.55346 -218.40881)" id="1795197966"></path>
                                <path
                                    d="M277.55346,275.40881h-56a4.00454,4.00454,0,0,1-4-4v-44a4.00454,4.00454,0,0,1,4-4H244.553v2H221.55346a2.002,2.002,0,0,0-2,2v44a2.002,2.002,0,0,0,2,2h56a2.002,2.002,0,0,0,2-2V245.4093h2v25.99951A4.00454,4.00454,0,0,1,277.55346,275.40881Z"
                                    transform="translate(-217.55346 -218.40881)" id="1248999224"></path>
                                <path
                                    d="M274.55346,265.40881h-50a1.00011,1.00011,0,0,1-1-1v-34a1.00011,1.00011,0,0,1,1-1h20v2h-19v32h48v-18h2v19A1.00011,1.00011,0,0,1,274.55346,265.40881Z"
                                    transform="translate(-217.55346 -218.40881)" id="1174228849"></path>
                                <path
                                    d="M256.55346,248.40881a1.00013,1.00013,0,0,1-1-1v-6h-2v-2h3a1.00011,1.00011,0,0,1,1,1v4.79639l6.3413-5.54879a1.00031,1.00031,0,0,1,.6587-.2476h14a1.00126,1.00126,0,0,0,1-1v-17a1.00126,1.00126,0,0,0-1-1h-27a1.00126,1.00126,0,0,0-1,1v11h-2v-11a3.00328,3.00328,0,0,1,3-3h27a3.00328,3.00328,0,0,1,3,3v17a3.00328,3.00328,0,0,1-3,3h-13.624l-7.7173,6.75244A1.00036,1.00036,0,0,1,256.55346,248.40881Z"
                                    transform="translate(-217.55346 -218.40881)" id="1877369615"></path>
                                <circle cx="40.5" cy="11.5" r="1.5" id="1327111970"></circle>
                                <circle cx="47.5" cy="11.5" r="1.5" id="1116376404"></circle>
                                <circle cx="54.5" cy="11.5" r="1.5" id="1935850170"></circle>
                                <path
                                    d="M259.55246,264.40881a.99933.99933,0,0,1-.9975-.9497c-.0025-.0435-.2857-4.57423-3.4488-6.15577l-6.5507-2.80566a14.18432,14.18432,0,0,1-10.00347,0l-6.60449,2.83008c-3.10986,1.55712-3.39306,6.08785-3.3955,6.13325a.98744.98744,0,0,1-1.05074.9454.9988.9988,0,0,1-.9463-1.0479c.0117-.2334.3359-5.73632,4.55123-7.84423l7.05323-3.02442a.99828.99828,0,0,1,.84131.02442,11.33072,11.33072,0,0,0,4.55273.89453,11.127,11.127,0,0,0,4.5527-.89453.998.998,0,0,1,.8413-.02442l7,3c4.2686,2.13233,4.5928,7.63525,4.6045,7.86865a.999.999,0,0,1-.9482,1.0488Q259.57811,264.40881,259.55246,264.40881Z"
                                    transform="translate(-217.55346 -218.40881)" id="1919686550"></path>
                                <path
                                    d="M246.55444,250.40881a1,1,0,0,1-.55567-1.832c2.41509-1.60986,2.51319-2.44336,2.80419-4.917l.0674-.5669a7.124,7.124,0,0,0-.3989-4.11718,4.81867,4.81867,0,0,0-2.79544-2.2217,6.83311,6.83311,0,0,0-4.24512.0005,4.81139,4.81139,0,0,0-2.79492,2.2212,7.11978,7.11978,0,0,0-.39942,4.11718l.06739.5669c.291,2.47363.38916,3.30713,2.8042,4.917a1,1,0,0,1-1.10938,1.66406c-3.18408-2.12256-3.37109-3.71289-3.68115-6.34717l-.06641-.55761a8.87213,8.87213,0,0,1,.61426-5.29105,6.79734,6.79734,0,0,1,3.92578-3.1855,8.86534,8.86534,0,0,1,5.52442-.0005,6.801,6.801,0,0,1,3.92579,3.1855,8.87388,8.87388,0,0,1,.6142,5.29155l-.0664.55761c-.31,2.63428-.497,4.22461-3.68111,6.34717A.99435.99435,0,0,1,246.55444,250.40881Z"
                                    transform="translate(-217.55346 -218.40881)" id="1643371315"></path>
                                <path
                                    d="M246.55346,264.40881a1.00008,1.00008,0,0,1-1-1,11.50607,11.50607,0,0,0-.91846-3.60449.99958.99958,0,0,1,.02393-.84278c.51074-1.02148.69775-3.335.1875-3.8457a.99989.99989,0,0,1,1.41406-1.41406c1.36477,1.36474.89307,4.29492.37354,5.71387a12.63762,12.63762,0,0,1,.91943,3.99316A1.00008,1.00008,0,0,1,246.55346,264.40881Z"
                                    transform="translate(-217.55346 -218.40881)" id="1617339819"></path>
                                <path
                                    d="M240.55346,264.40881a1.00008,1.00008,0,0,1-1-1,12.63762,12.63762,0,0,1,.91943-3.99316c-.51953-1.419-.99121-4.34913.37354-5.71387a.99989.99989,0,0,1,1.41406,1.41406c-.51025.51074-.32324,2.82422.1875,3.8457a1.00388,1.00388,0,0,1,.02442.84229,11.55323,11.55323,0,0,0-.91895,3.605A1.00008,1.00008,0,0,1,240.55346,264.40881Z"
                                    transform="translate(-217.55346 -218.40881)" id="1985815100"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="w-full px-4 lg:w-6/12 xl:w-6/12" style="padding-bottom: 15px">
                        <div class="w-full  justify-center mb-4 text-white">
                            <h3 style="font-size: 20px"><b>Now Offering</b></h3>
                            <div class="text-left">
                                <h1 class=" text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]"
                                    style="font-size: 34px">
                                    <b>Virtual Consultations</b>
                                </h1>
                                <p>Submit your request today to set up a live video consultation with Tri State Signs &
                                    Awnings
                                    from your smartphone, tablet, or computer! Get 5% off a service when you request a
                                    virtual
                                    call!</p>
                            </div>
                        </div>
                        <button
                            class="px-6 py-2 text-base font-small text-white duration-300 ease-in-out rounded-md bg-white/20 signUpBtn hover:bg-white/100 hover:text-white"
                            style="background-color: grey; padding: 1rem;border: 1px solid #fff;">Request
                            Consultation</button>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <div class="relative overflow-hidden bg-white " style="padding-top: 50px">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap items-center ">
                <div class="w-full px-4" style="display: flex;">
                    <div class="w-full px-4  text-center" data-wow-delay=".2s">
                        <h1
                            class="mb-6 text-3xl font-bold leading-snug text-grey sm:text-4xl sm:leading-snug lg:text-2xl lg:leading-[1.2]">
                            Your Trusted Partner in Signage Solutions
                        </h1>
                        <p class="mx-auto mb-9 text-base font-medium text-grey sm:text-lg sm:leading-[1.44]"
                            style="font-size: 14px; max-width: 850px;">

                            Tri State Signs & Awnings has been a cornerstone in the tri-state area for over three decades,
                            delivering exceptional signage solutions tailored to your business needs. We are committed to
                            providing 100% customer satisfaction through our concierge-level service, ensuring every project
                            exceeds expectations.
                        </p>
                        <p class="mx-auto mb-9 text-base font-medium text-grey sm:text-lg sm:leading-[1.44]"
                            style="font-size: 14px; max-width: 850px;">



                            Our team of experts handles all permitting on behalf of our clients, making the process seamless
                            and hassle-free. As a UL-listed company, we guarantee the quality and durability of our
                            materials and craftsmanship. Whether you need exterior signs, interior signs, awe-inspiring
                            awnings, or cutting-edge LED displays, we’ve got you covered.
                        </p>
                        <p class="mx-auto mb-9 text-base font-medium text-grey sm:text-lg sm:leading-[1.44]"
                            style="font-size: 14px; max-width: 850px;">



                            Trust us to bring your brand to life with signs that not only capture attention but also stand
                            the test of time.
                        </p>
                        <h1
                            class="mb-6 text-3xl font-bold leading-snug text-grey sm:text-4xl sm:leading-snug lg:text-2xl lg:leading-[1.2]">
                            Learn More Today
                        </h1>
                        <p class="mx-auto mb-9 text-base font-medium text-grey sm:text-lg sm:leading-[1.44]"
                            style="font-size: 14px; max-width:1150px;">

                            To get started with custom signs in West Babylon, NY and the nearby areas, reach out to our team
                            today. We look forward to hearing from you and discussing your vision for your custom signage.
                            We’re here to learn more about how we can assist you. If you have any questions or concerns,
                            don’t hesitate to contact our professionals. Whatever you need, we’re here to help. Want to
                            learn more about the services we offer? Check out the rest of our website! Whether you’re
                            looking for interior or exterior custom signs in Babylon, NY or the surrounding areas, our
                            experts have got you covered. Reach out to our team today to discover how we can help you take
                            your branding to the next level.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="relative overflow-hidden bg-primary " style="padding-top: 50px">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap items-center  ">
                <div class="text-center" style="text-align: center; width: 100%;">
                    <h1
                        class="mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-2xl lg:leading-[1.2] text-center">
                        Why Choose Tri State Signs & Awnings?
                    </h1>
                </div>
                <div class="w-full px-4" style="display: flex;">


                    <div class="w-full px-4 lg:w-5/12 xl:w-5/12 text-left" data-wow-delay=".2s"
                        style=" display: flex;justify-content: flex-end; margin-left:6rem">
                        <ul>
                            <li class="text-white"
                                style="display: flex; align-items: center; justify-content: flex-start;">
                                <svg fill="white" width="7%" height="7%" version="1.1" viewBox="0 0 100 100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m39.207 67.863-14.219-15.688c-2.3984-2.6445-2.4375-5.8125-1.1836-8.4375 0.47266-0.98047 1.1328-1.8906 1.9648-2.6992 0.87109-0.82812 1.8438-1.4688 2.8945-1.8906 2.6289-1.0547 5.6836-0.79688 8.1914 1.7773l8.6172 8.8516c3.4258-7.1836 11.625-17.387 21.289-26.438 9.1992-8.6133 19.785-16.246 28.914-19.312 0.60938-0.19922 1.3047 0.007812 1.6914 0.55469 0.47266 0.67188 0.31641 1.6055-0.35547 2.0781-9.7188 6.8789-19.09 18.77-26.75 30.391-7.6758 11.645-13.652 23.055-16.551 28.859-0.48828 0.98438-1.1484 1.8281-1.9219 2.5273-1.3633 1.2344-3.0625 1.9766-4.8242 2.2031-1.7617 0.23047-3.5938-0.046875-5.2148-0.85547-0.92578-0.46094-1.793-1.1055-2.543-1.9336zm28.391-53.293c1.6758 0.95703 2.2578 3.0977 1.3008 4.7695-0.95703 1.6758-3.0977 2.2578-4.7695 1.3008-2.7266-1.5586-5.6641-2.7812-8.7461-3.5977-2.9844-0.79297-6.1406-1.2148-9.4141-1.2148-10.105 0-19.262 4.0977-25.883 10.723-6.625 6.625-10.723 15.777-10.723 25.883 0 10.105 4.0977 19.262 10.723 25.883 6.6211 6.625 15.777 10.723 25.883 10.723s19.262-4.0977 25.883-10.723c6.625-6.6211 10.723-15.777 10.723-25.883 0-3.4883-0.48438-6.8555-1.3828-10.027-0.93359-3.293-2.3164-6.3945-4.0664-9.2266-1.0117-1.6367-0.50391-3.7891 1.1328-4.8008 1.6367-1.0117 3.7891-0.50391 4.8008 1.1328 2.1016 3.3945 3.75 7.0898 4.8594 11 1.0781 3.8008 1.6562 7.8008 1.6562 11.914 0 12.043-4.8828 22.945-12.77 30.836-7.8906 7.8906-18.793 12.77-30.836 12.77s-22.945-4.8828-30.836-12.77c-7.8906-7.8906-12.77-18.793-12.77-30.836 0-12.039 4.8828-22.945 12.77-30.836 7.8906-7.8906 18.793-12.77 30.836-12.77 3.8477 0 7.6016 0.51172 11.191 1.4609 3.7031 0.98047 7.2109 2.4336 10.441 4.2812z">
                                    </path>
                                </svg>
                                <p style="font-size: 18px;">

                                    &nbsp;Five-Year Sign Warranty
                                </p>
                            </li>
                            <li class="text-white"
                                style="display: flex; align-items: center; justify-content: flex-start;">
                                <svg fill="white" width="7%" height="7%" version="1.1" viewBox="0 0 100 100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m39.207 67.863-14.219-15.688c-2.3984-2.6445-2.4375-5.8125-1.1836-8.4375 0.47266-0.98047 1.1328-1.8906 1.9648-2.6992 0.87109-0.82812 1.8438-1.4688 2.8945-1.8906 2.6289-1.0547 5.6836-0.79688 8.1914 1.7773l8.6172 8.8516c3.4258-7.1836 11.625-17.387 21.289-26.438 9.1992-8.6133 19.785-16.246 28.914-19.312 0.60938-0.19922 1.3047 0.007812 1.6914 0.55469 0.47266 0.67188 0.31641 1.6055-0.35547 2.0781-9.7188 6.8789-19.09 18.77-26.75 30.391-7.6758 11.645-13.652 23.055-16.551 28.859-0.48828 0.98438-1.1484 1.8281-1.9219 2.5273-1.3633 1.2344-3.0625 1.9766-4.8242 2.2031-1.7617 0.23047-3.5938-0.046875-5.2148-0.85547-0.92578-0.46094-1.793-1.1055-2.543-1.9336zm28.391-53.293c1.6758 0.95703 2.2578 3.0977 1.3008 4.7695-0.95703 1.6758-3.0977 2.2578-4.7695 1.3008-2.7266-1.5586-5.6641-2.7812-8.7461-3.5977-2.9844-0.79297-6.1406-1.2148-9.4141-1.2148-10.105 0-19.262 4.0977-25.883 10.723-6.625 6.625-10.723 15.777-10.723 25.883 0 10.105 4.0977 19.262 10.723 25.883 6.6211 6.625 15.777 10.723 25.883 10.723s19.262-4.0977 25.883-10.723c6.625-6.6211 10.723-15.777 10.723-25.883 0-3.4883-0.48438-6.8555-1.3828-10.027-0.93359-3.293-2.3164-6.3945-4.0664-9.2266-1.0117-1.6367-0.50391-3.7891 1.1328-4.8008 1.6367-1.0117 3.7891-0.50391 4.8008 1.1328 2.1016 3.3945 3.75 7.0898 4.8594 11 1.0781 3.8008 1.6562 7.8008 1.6562 11.914 0 12.043-4.8828 22.945-12.77 30.836-7.8906 7.8906-18.793 12.77-30.836 12.77s-22.945-4.8828-30.836-12.77c-7.8906-7.8906-12.77-18.793-12.77-30.836 0-12.039 4.8828-22.945 12.77-30.836 7.8906-7.8906 18.793-12.77 30.836-12.77 3.8477 0 7.6016 0.51172 11.191 1.4609 3.7031 0.98047 7.2109 2.4336 10.441 4.2812z">
                                    </path>
                                </svg>
                                <p style="font-size: 18px;">
                                    &nbsp;40+ Years of Experience
                                </p>
                            </li>
                            <li class="text-white"
                                style="display: flex; align-items: center; justify-content: flex-start;">
                                <svg fill="white" width="7%" height="7%" version="1.1" viewBox="0 0 100 100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m39.207 67.863-14.219-15.688c-2.3984-2.6445-2.4375-5.8125-1.1836-8.4375 0.47266-0.98047 1.1328-1.8906 1.9648-2.6992 0.87109-0.82812 1.8438-1.4688 2.8945-1.8906 2.6289-1.0547 5.6836-0.79688 8.1914 1.7773l8.6172 8.8516c3.4258-7.1836 11.625-17.387 21.289-26.438 9.1992-8.6133 19.785-16.246 28.914-19.312 0.60938-0.19922 1.3047 0.007812 1.6914 0.55469 0.47266 0.67188 0.31641 1.6055-0.35547 2.0781-9.7188 6.8789-19.09 18.77-26.75 30.391-7.6758 11.645-13.652 23.055-16.551 28.859-0.48828 0.98438-1.1484 1.8281-1.9219 2.5273-1.3633 1.2344-3.0625 1.9766-4.8242 2.2031-1.7617 0.23047-3.5938-0.046875-5.2148-0.85547-0.92578-0.46094-1.793-1.1055-2.543-1.9336zm28.391-53.293c1.6758 0.95703 2.2578 3.0977 1.3008 4.7695-0.95703 1.6758-3.0977 2.2578-4.7695 1.3008-2.7266-1.5586-5.6641-2.7812-8.7461-3.5977-2.9844-0.79297-6.1406-1.2148-9.4141-1.2148-10.105 0-19.262 4.0977-25.883 10.723-6.625 6.625-10.723 15.777-10.723 25.883 0 10.105 4.0977 19.262 10.723 25.883 6.6211 6.625 15.777 10.723 25.883 10.723s19.262-4.0977 25.883-10.723c6.625-6.6211 10.723-15.777 10.723-25.883 0-3.4883-0.48438-6.8555-1.3828-10.027-0.93359-3.293-2.3164-6.3945-4.0664-9.2266-1.0117-1.6367-0.50391-3.7891 1.1328-4.8008 1.6367-1.0117 3.7891-0.50391 4.8008 1.1328 2.1016 3.3945 3.75 7.0898 4.8594 11 1.0781 3.8008 1.6562 7.8008 1.6562 11.914 0 12.043-4.8828 22.945-12.77 30.836-7.8906 7.8906-18.793 12.77-30.836 12.77s-22.945-4.8828-30.836-12.77c-7.8906-7.8906-12.77-18.793-12.77-30.836 0-12.039 4.8828-22.945 12.77-30.836 7.8906-7.8906 18.793-12.77 30.836-12.77 3.8477 0 7.6016 0.51172 11.191 1.4609 3.7031 0.98047 7.2109 2.4336 10.441 4.2812z">
                                    </path>
                                </svg>
                                <p style="font-size: 18px;">

                                    &nbsp;One-Year Electrical Warranty
                                </p>
                            </li>
                            <li class="text-white"
                                style="display: flex; align-items: center; justify-content: flex-start;">
                                <svg fill="white" width="7%" height="7%" version="1.1" viewBox="0 0 100 100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m39.207 67.863-14.219-15.688c-2.3984-2.6445-2.4375-5.8125-1.1836-8.4375 0.47266-0.98047 1.1328-1.8906 1.9648-2.6992 0.87109-0.82812 1.8438-1.4688 2.8945-1.8906 2.6289-1.0547 5.6836-0.79688 8.1914 1.7773l8.6172 8.8516c3.4258-7.1836 11.625-17.387 21.289-26.438 9.1992-8.6133 19.785-16.246 28.914-19.312 0.60938-0.19922 1.3047 0.007812 1.6914 0.55469 0.47266 0.67188 0.31641 1.6055-0.35547 2.0781-9.7188 6.8789-19.09 18.77-26.75 30.391-7.6758 11.645-13.652 23.055-16.551 28.859-0.48828 0.98438-1.1484 1.8281-1.9219 2.5273-1.3633 1.2344-3.0625 1.9766-4.8242 2.2031-1.7617 0.23047-3.5938-0.046875-5.2148-0.85547-0.92578-0.46094-1.793-1.1055-2.543-1.9336zm28.391-53.293c1.6758 0.95703 2.2578 3.0977 1.3008 4.7695-0.95703 1.6758-3.0977 2.2578-4.7695 1.3008-2.7266-1.5586-5.6641-2.7812-8.7461-3.5977-2.9844-0.79297-6.1406-1.2148-9.4141-1.2148-10.105 0-19.262 4.0977-25.883 10.723-6.625 6.625-10.723 15.777-10.723 25.883 0 10.105 4.0977 19.262 10.723 25.883 6.6211 6.625 15.777 10.723 25.883 10.723s19.262-4.0977 25.883-10.723c6.625-6.6211 10.723-15.777 10.723-25.883 0-3.4883-0.48438-6.8555-1.3828-10.027-0.93359-3.293-2.3164-6.3945-4.0664-9.2266-1.0117-1.6367-0.50391-3.7891 1.1328-4.8008 1.6367-1.0117 3.7891-0.50391 4.8008 1.1328 2.1016 3.3945 3.75 7.0898 4.8594 11 1.0781 3.8008 1.6562 7.8008 1.6562 11.914 0 12.043-4.8828 22.945-12.77 30.836-7.8906 7.8906-18.793 12.77-30.836 12.77s-22.945-4.8828-30.836-12.77c-7.8906-7.8906-12.77-18.793-12.77-30.836 0-12.039 4.8828-22.945 12.77-30.836 7.8906-7.8906 18.793-12.77 30.836-12.77 3.8477 0 7.6016 0.51172 11.191 1.4609 3.7031 0.98047 7.2109 2.4336 10.441 4.2812z">
                                    </path>
                                </svg>
                                <p style="font-size: 18px;">

                                    &nbsp;Service Provided Within 48 Hours
                                </p>
                            </li>
                            <li class="text-white"
                                style="display: flex; align-items: center; justify-content: flex-start;">
                                <svg fill="white" width="7%" height="7%" version="1.1" viewBox="0 0 100 100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m39.207 67.863-14.219-15.688c-2.3984-2.6445-2.4375-5.8125-1.1836-8.4375 0.47266-0.98047 1.1328-1.8906 1.9648-2.6992 0.87109-0.82812 1.8438-1.4688 2.8945-1.8906 2.6289-1.0547 5.6836-0.79688 8.1914 1.7773l8.6172 8.8516c3.4258-7.1836 11.625-17.387 21.289-26.438 9.1992-8.6133 19.785-16.246 28.914-19.312 0.60938-0.19922 1.3047 0.007812 1.6914 0.55469 0.47266 0.67188 0.31641 1.6055-0.35547 2.0781-9.7188 6.8789-19.09 18.77-26.75 30.391-7.6758 11.645-13.652 23.055-16.551 28.859-0.48828 0.98438-1.1484 1.8281-1.9219 2.5273-1.3633 1.2344-3.0625 1.9766-4.8242 2.2031-1.7617 0.23047-3.5938-0.046875-5.2148-0.85547-0.92578-0.46094-1.793-1.1055-2.543-1.9336zm28.391-53.293c1.6758 0.95703 2.2578 3.0977 1.3008 4.7695-0.95703 1.6758-3.0977 2.2578-4.7695 1.3008-2.7266-1.5586-5.6641-2.7812-8.7461-3.5977-2.9844-0.79297-6.1406-1.2148-9.4141-1.2148-10.105 0-19.262 4.0977-25.883 10.723-6.625 6.625-10.723 15.777-10.723 25.883 0 10.105 4.0977 19.262 10.723 25.883 6.6211 6.625 15.777 10.723 25.883 10.723s19.262-4.0977 25.883-10.723c6.625-6.6211 10.723-15.777 10.723-25.883 0-3.4883-0.48438-6.8555-1.3828-10.027-0.93359-3.293-2.3164-6.3945-4.0664-9.2266-1.0117-1.6367-0.50391-3.7891 1.1328-4.8008 1.6367-1.0117 3.7891-0.50391 4.8008 1.1328 2.1016 3.3945 3.75 7.0898 4.8594 11 1.0781 3.8008 1.6562 7.8008 1.6562 11.914 0 12.043-4.8828 22.945-12.77 30.836-7.8906 7.8906-18.793 12.77-30.836 12.77s-22.945-4.8828-30.836-12.77c-7.8906-7.8906-12.77-18.793-12.77-30.836 0-12.039 4.8828-22.945 12.77-30.836 7.8906-7.8906 18.793-12.77 30.836-12.77 3.8477 0 7.6016 0.51172 11.191 1.4609 3.7031 0.98047 7.2109 2.4336 10.441 4.2812z">
                                    </path>
                                </svg>
                                <p style="font-size: 18px;">

                                    &nbsp;Handle All Permitting on Your Behalf
                                </p>
                            </li>
                            <li class="text-white"
                                style="display: flex; align-items: center; justify-content: flex-start;">
                                <svg fill="white" width="7%" height="7%" version="1.1" viewBox="0 0 100 100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m39.207 67.863-14.219-15.688c-2.3984-2.6445-2.4375-5.8125-1.1836-8.4375 0.47266-0.98047 1.1328-1.8906 1.9648-2.6992 0.87109-0.82812 1.8438-1.4688 2.8945-1.8906 2.6289-1.0547 5.6836-0.79688 8.1914 1.7773l8.6172 8.8516c3.4258-7.1836 11.625-17.387 21.289-26.438 9.1992-8.6133 19.785-16.246 28.914-19.312 0.60938-0.19922 1.3047 0.007812 1.6914 0.55469 0.47266 0.67188 0.31641 1.6055-0.35547 2.0781-9.7188 6.8789-19.09 18.77-26.75 30.391-7.6758 11.645-13.652 23.055-16.551 28.859-0.48828 0.98438-1.1484 1.8281-1.9219 2.5273-1.3633 1.2344-3.0625 1.9766-4.8242 2.2031-1.7617 0.23047-3.5938-0.046875-5.2148-0.85547-0.92578-0.46094-1.793-1.1055-2.543-1.9336zm28.391-53.293c1.6758 0.95703 2.2578 3.0977 1.3008 4.7695-0.95703 1.6758-3.0977 2.2578-4.7695 1.3008-2.7266-1.5586-5.6641-2.7812-8.7461-3.5977-2.9844-0.79297-6.1406-1.2148-9.4141-1.2148-10.105 0-19.262 4.0977-25.883 10.723-6.625 6.625-10.723 15.777-10.723 25.883 0 10.105 4.0977 19.262 10.723 25.883 6.6211 6.625 15.777 10.723 25.883 10.723s19.262-4.0977 25.883-10.723c6.625-6.6211 10.723-15.777 10.723-25.883 0-3.4883-0.48438-6.8555-1.3828-10.027-0.93359-3.293-2.3164-6.3945-4.0664-9.2266-1.0117-1.6367-0.50391-3.7891 1.1328-4.8008 1.6367-1.0117 3.7891-0.50391 4.8008 1.1328 2.1016 3.3945 3.75 7.0898 4.8594 11 1.0781 3.8008 1.6562 7.8008 1.6562 11.914 0 12.043-4.8828 22.945-12.77 30.836-7.8906 7.8906-18.793 12.77-30.836 12.77s-22.945-4.8828-30.836-12.77c-7.8906-7.8906-12.77-18.793-12.77-30.836 0-12.039 4.8828-22.945 12.77-30.836 7.8906-7.8906 18.793-12.77 30.836-12.77 3.8477 0 7.6016 0.51172 11.191 1.4609 3.7031 0.98047 7.2109 2.4336 10.441 4.2812z">
                                    </path>
                                </svg>
                                <p style="font-size: 18px;">

                                    &nbsp;100% Customer Satisfaction Guaranteed
                                </p>
                            </li>

                        </ul>

                    </div>

                    <div class="w-full px-4 lg:w-5/12 xl:w-5/12" style="padding-bottom: 15px">
                        <div class="w-full  justify-center mb-4 text-white">

                            <p style="font-size: 14px">With over 40 years of experience, Tri State Signs & Awnings stands
                                out for its unwavering
                                commitment to quality and customer satisfaction. We offer a comprehensive range of services
                                from design to installation, ensuring your signage journey is smooth and efficient.
                            </p>
                            <br>
                            <p style="font-size: 14px">
                                Our team goes above and beyond, managing all permitting processes and guaranteeing that
                                every project is UL-listed for safety and durability. Choose us for our expertise,
                                dedication to exceeding expectations, and the peace of mind that comes with knowing your
                                signage is crafted to the highest standards.</p>
                        </div>


                    </div>
                    <br>

                </div>
                <div class="w-full text-center" style="padding-bottom: 2rem">

                    <button
                        class="px-6 py-2 text-base font-small text-white duration-300 ease-in-out rounded-md bg-white/20 signUpBtn hover:bg-white/100 hover:text-white"
                        style="background-color: grey; padding: 1rem;border: 1px solid #fff;">Contact Us</button>

                </div>

            </div>
        </div>

    </div>
    <div class="relative overflow-hidden bg-white " style="padding-top: 50px; padding-bottom:50px">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap items-center ">
                <div class="w-full px-4" style="display: flex;">
                    <div class="w-full px-4 lg:w-2/12 xl:w-2/12 text-center" data-wow-delay=".2s">
                        <svg fill="grey" width="80%" height="80%" version="1.1" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg" id="1827187220" class="svg u_1827187220"
                            data-icon-custom="true">
                            <title id="1246187856">A black and white icon of a hospital building with a cross on it.
                            </title>
                            <g>
                                <path
                                    d="m90.844 89.062h-81.688c-0.91406-0.085938-1.6133-0.85547-1.6133-1.7734 0-0.91797 0.69922-1.6875 1.6133-1.7734h81.688c0.91406 0.085937 1.6133 0.85547 1.6133 1.7734 0 0.91797-0.69922 1.6875-1.6133 1.7734z">
                                </path>
                                <path
                                    d="m89.062 89.062h-78.125c-0.98438 0-1.7812-0.79688-1.7812-1.7812v-49.703c0-0.47266 0.1875-0.92578 0.52344-1.2578 0.33203-0.33594 0.78516-0.52344 1.2578-0.52344h17.75c0.98438 0 1.7812 0.79688 1.7812 1.7812v40.828h39.062v-40.828c0-0.98438 0.79688-1.7812 1.7812-1.7812h17.75c0.98438 0 1.7812 0.79688 1.7812 1.7812v49.703c0 0.47266-0.1875 0.92578-0.52344 1.2578-0.33203 0.33594-0.78516 0.52344-1.2578 0.52344zm-76.344-3.5469h74.562v-46.172h-14.203v40.844c0 0.97656-0.78906 1.7656-1.7656 1.7656h-42.625c-0.97656 0-1.7656-0.78906-1.7656-1.7656v-40.844h-14.203z">
                                </path>
                                <path
                                    d="m71.312 81.953h-42.625c-0.97656 0-1.7656-0.78906-1.7656-1.7656v-67.469c0-0.97656 0.78906-1.7734 1.7656-1.7812h42.625c0.97656 0.007812 1.7656 0.80469 1.7656 1.7812v67.469c0 0.46875-0.1875 0.91797-0.51562 1.25-0.33203 0.32812-0.78125 0.51562-1.25 0.51562zm-40.844-3.5469h39.062v-63.922h-39.062z">
                                </path>
                                <path
                                    d="m60.656 81.953h-21.312c-0.46875 0.003906-0.92188-0.17969-1.2539-0.51172-0.33203-0.33203-0.51562-0.78516-0.51172-1.2539v-15.984c0.035156-0.94922 0.8125-1.7031 1.7656-1.7031h21.312c0.47266-0.019531 0.92969 0.14844 1.2773 0.46875 0.34766 0.31641 0.55078 0.76172 0.56641 1.2344v15.984c0.003906 0.48438-0.19141 0.94922-0.53906 1.2812-0.35156 0.33594-0.82031 0.51172-1.3047 0.48438zm-19.531-3.5469h17.75v-12.5h-17.75z">
                                </path>
                                <path
                                    d="m53.547 34.016h-7.0938c-0.97656 0-1.7734-0.78906-1.7812-1.7656v-1.7812h-1.7812c-0.97656-0.007812-1.7656-0.80469-1.7656-1.7812v-7.0938c0-0.97656 0.78906-1.7734 1.7656-1.7812h1.7812v-1.7656c0-0.98438 0.79688-1.7812 1.7812-1.7812h7.0938c0.98438 0 1.7812 0.79688 1.7812 1.7812v1.7656h1.7812c0.97656 0.007812 1.7656 0.80469 1.7656 1.7812v7.0938c0 0.97656-0.78906 1.7734-1.7656 1.7812h-1.7812v1.7812c-0.007813 0.97656-0.80469 1.7656-1.7812 1.7656zm-5.3281-3.5469h3.5625v-1.7812c0-0.97656 0.78906-1.7656 1.7656-1.7656h1.7812v-3.4844h-1.7812c-0.46875 0.003906-0.92188-0.17969-1.2539-0.51172s-0.51562-0.78516-0.51172-1.2539v-1.8594h-3.5625v1.7812c0.027344 0.48438-0.14844 0.95312-0.48438 1.3047-0.33203 0.34766-0.79688 0.54297-1.2812 0.53906h-1.7812v3.5625h1.7812c0.97656 0 1.7656 0.78906 1.7656 1.7656z">
                                </path>
                                <path
                                    d="m89.062 89.062h-78.125c-0.98438 0-1.7812-0.79688-1.7812-1.7812v-7.0938c0-0.47266 0.1875-0.92578 0.52344-1.2578 0.33203-0.33594 0.78516-0.52344 1.2578-0.52344h78.125c0.98438 0 1.7812 0.79688 1.7812 1.7812v7.0938c0 0.47266-0.1875 0.92578-0.52344 1.2578-0.33203 0.33594-0.78516 0.52344-1.2578 0.52344zm-76.344-3.5469h74.562v-3.5625h-74.562z">
                                </path>
                                <path
                                    d="m28.688 57.109h-10.641c-0.98438 0-1.7812-0.79688-1.7812-1.7812v-10.656c0-0.98438 0.79688-1.7812 1.7812-1.7812h10.641c0.98438 0 1.7812 0.79688 1.7812 1.7812v10.656c0 0.47266-0.1875 0.92578-0.52344 1.2578-0.33203 0.33594-0.78516 0.52344-1.2578 0.52344zm-8.875-3.5625h7.1094v-7.0938h-7.1094z">
                                </path>
                                <path
                                    d="m46.453 57.109h-10.656c-0.98438 0-1.7812-0.79688-1.7812-1.7812v-10.656c0-0.98438 0.79688-1.7812 1.7812-1.7812h10.656c0.47266 0 0.92188 0.1875 1.2539 0.52344 0.33203 0.33203 0.51562 0.78516 0.51172 1.2578v10.656c0.003906 0.47266-0.17969 0.92578-0.51172 1.2578-0.33203 0.33594-0.78125 0.52344-1.2539 0.52344zm-8.875-3.5625h7.0938v-7.0938h-7.0938z">
                                </path>
                                <path
                                    d="m64.203 57.109h-10.656c-0.47266 0-0.92188-0.1875-1.2539-0.52344-0.33203-0.33203-0.51562-0.78516-0.51172-1.2578v-10.656c-0.003906-0.47266 0.17969-0.92578 0.51172-1.2578 0.33203-0.33594 0.78125-0.52344 1.2539-0.52344h10.656c0.98438 0 1.7812 0.79688 1.7812 1.7812v10.656c0 0.47266-0.1875 0.92578-0.52344 1.2578-0.33203 0.33594-0.78516 0.52344-1.2578 0.52344zm-8.875-3.5625h7.1719v-7.0938h-7.1719z">
                                </path>
                                <path
                                    d="m81.953 57.109h-10.641c-0.98438 0-1.7812-0.79688-1.7812-1.7812v-10.656c0-0.98438 0.79688-1.7812 1.7812-1.7812h10.641c0.98438 0 1.7812 0.79688 1.7812 1.7812v10.656c0 0.47266-0.1875 0.92578-0.52344 1.2578-0.33203 0.33594-0.78516 0.52344-1.2578 0.52344zm-8.875-3.5625h7.1094v-7.0938h-7.1094z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="w-full px-4 lg:w-4/12 xl:w-4/12 text-left" data-wow-delay=".2s">
                        <p style="font-size: 18px; color:grey"><b>Exterior Signs</b></p>
                        <p style="color:grey">
                            Exterior signs are the first impression customers have of your business. At Tri State Signs &
                            Awnings, we create eye-catching and durable exterior signs that enhance your brand's visibility.
                            Our designs are tailored to your specific needs, ensuring they resonate with your target
                            audience and comply with local regulations. From illuminated signs to monument signs, we do it
                            all.
                        </p>
                        <br>
                        <button
                            class="px-6 py-2 text-base font-small text-white duration-300 ease-in-out rounded-md bg-white/20 signUpBtn hover:bg-white/100 hover:text-white"
                            style=" padding: 1rem; background-color: var(--color-primary);">Learn More</button>
                    </div>

                    <div class="w-full px-4 lg:w-2/12 xl:w-2/12 text-center" data-wow-delay=".2s">
                        <svg fill="grey" width="80%" height="80%" version="1.1" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg" id="1021036837" class="svg u_1021036837"
                            data-icon-custom="true">
                            <title id="1279533755">A black and white drawing of a square with dots on it.</title>
                            <path
                                d="m43.316 59.668h-0.019531c-0.38672 0-0.75781 0.15625-1.0312 0.42969-0.27344 0.27344-0.42578 0.64844-0.42188 1.0352-0.003906 0.59375 0.35547 1.1328 0.90234 1.3594 0.54688 0.23047 1.1797 0.10547 1.6016-0.3125 0.42188-0.41797 0.55078-1.0508 0.32422-1.6016-0.22656-0.54688-0.76172-0.91016-1.3555-0.91016zm-16.754-26.367h0.019531c0.39062 0 0.76172-0.15625 1.0352-0.42969 0.27344-0.27344 0.42578-0.64844 0.42187-1.0352 0.003907-0.59375-0.35547-1.1328-0.90234-1.3594-0.54688-0.23047-1.1797-0.10547-1.6016 0.3125-0.42188 0.41797-0.55078 1.0508-0.32422 1.6016 0.22656 0.54688 0.76172 0.91016 1.3555 0.91016zm5.5781 0h0.019531c0.39062 0 0.76172-0.15625 1.0352-0.42969 0.27344-0.27344 0.42578-0.64844 0.42188-1.0352 0-0.59375-0.35547-1.1328-0.90234-1.3594-0.55078-0.23047-1.1797-0.10547-1.6016 0.3125-0.42188 0.41797-0.55078 1.0508-0.32422 1.6016 0.22656 0.54688 0.75781 0.91016 1.3555 0.91016zm0.019531 26.367h-0.019531 0.003906c-0.39062 0-0.76172 0.15625-1.0352 0.42969-0.27344 0.27344-0.42578 0.64844-0.42188 1.0352-0.003906 0.59375 0.35547 1.1328 0.90234 1.3594 0.54688 0.23047 1.1797 0.10547 1.6016-0.3125 0.42188-0.41797 0.55078-1.0508 0.32422-1.6016-0.22656-0.54688-0.75781-0.91016-1.3555-0.91016zm11.137-26.367h0.019531c0.38672 0 0.76172-0.15625 1.0312-0.42969 0.27344-0.27344 0.42578-0.64844 0.42578-1.0352 0-0.59375-0.35547-1.1328-0.90234-1.3594-0.55078-0.23047-1.1836-0.10547-1.6055 0.3125-0.41797 0.41797-0.54688 1.0508-0.32031 1.6016 0.22266 0.54688 0.75781 0.91016 1.3516 0.91016zm-5.5781 0h0.019531c0.38672 0 0.76172-0.15625 1.0352-0.42969 0.26953-0.27344 0.42187-0.64844 0.42187-1.0352 0-0.59375-0.35547-1.1328-0.90234-1.3594-0.55078-0.23047-1.1836-0.10547-1.6016 0.3125-0.42188 0.41797-0.55078 1.0508-0.32422 1.6016 0.22656 0.54688 0.75781 0.91016 1.3555 0.91016zm0.019531 26.367h-0.019531 0.003906c-0.39062 0-0.76172 0.15625-1.0352 0.42969-0.27344 0.27344-0.42578 0.64844-0.42188 1.0352-0.003906 0.59375 0.35547 1.1328 0.90234 1.3594 0.54688 0.23047 1.1797 0.10547 1.6016-0.3125 0.42188-0.41797 0.55078-1.0508 0.32422-1.6016-0.22656-0.54688-0.76172-0.91016-1.3555-0.91016zm33.449-26.367h0.019531c0.38672 0 0.75781-0.15625 1.0312-0.42969 0.27344-0.27344 0.42578-0.64844 0.42578-1.0352 0-0.59375-0.35547-1.1328-0.90625-1.3594-0.54687-0.23047-1.1797-0.10547-1.6016 0.3125-0.42188 0.41797-0.54688 1.0508-0.32422 1.6016 0.22656 0.54688 0.76172 0.91016 1.3555 0.91016zm0.019531 26.367h-0.019531c-0.38672 0-0.75781 0.15625-1.0312 0.42969-0.27344 0.27344-0.42578 0.64844-0.42188 1.0352-0.003906 0.59375 0.35156 1.1328 0.90234 1.3594 0.54688 0.23047 1.1797 0.10547 1.6016-0.3125 0.42188-0.41797 0.55078-1.0508 0.32422-1.6016-0.22656-0.54688-0.76172-0.91016-1.3555-0.91016zm-5.5977-26.367h0.019531c0.38672 0 0.75781-0.15625 1.0312-0.42969 0.27344-0.27344 0.42578-0.64844 0.42578-1.0352 0-0.59375-0.35547-1.1328-0.90234-1.3594-0.55078-0.23047-1.1836-0.10547-1.6055 0.3125-0.42188 0.41797-0.54688 1.0508-0.32422 1.6016 0.22656 0.54688 0.76172 0.91016 1.3555 0.91016zm0.019531 26.367h-0.019531c-0.38672 0-0.75781 0.15625-1.0312 0.42969-0.27344 0.27344-0.42578 0.64844-0.42188 1.0352-0.003906 0.59375 0.35156 1.1328 0.90234 1.3594 0.54688 0.23047 1.1797 0.10547 1.6016-0.3125 0.42188-0.41797 0.55078-1.0508 0.32422-1.6016-0.22656-0.54688-0.76172-0.91016-1.3555-0.91016zm-39.047 0h-0.019531 0.003906c-0.39062 0-0.76172 0.15625-1.0352 0.42969-0.26953 0.27344-0.42188 0.64844-0.42188 1.0352 0 0.59375 0.35547 1.1328 0.90234 1.3594 0.55078 0.23047 1.1797 0.10547 1.6016-0.3125 0.42188-0.41797 0.55078-1.0508 0.32422-1.6016-0.22656-0.54688-0.75781-0.91016-1.3555-0.91016zm22.312 0h-0.019531c-0.38672 0-0.75781 0.15625-1.0312 0.42969-0.27344 0.27344-0.42578 0.64844-0.42188 1.0352-0.003906 0.59375 0.35547 1.1328 0.90234 1.3594 0.54688 0.23047 1.1797 0.10547 1.6016-0.3125 0.42188-0.41797 0.55078-1.0508 0.32422-1.6016-0.22656-0.54688-0.76172-0.91016-1.3555-0.91016zm-0.019531-26.367h0.019531c0.38672 0 0.75781-0.15625 1.0312-0.42969 0.27344-0.27344 0.42578-0.64844 0.42578-1.0352 0-0.59375-0.35547-1.1328-0.90234-1.3594-0.55078-0.23047-1.1836-0.10547-1.6055 0.3125-0.42188 0.41797-0.54688 1.0508-0.32031 1.6016 0.22266 0.54688 0.75781 0.91016 1.3516 0.91016zm5.5781 0h0.019531c0.38672 0 0.75781-0.15625 1.0312-0.42969 0.27344-0.27344 0.42578-0.64844 0.42578-1.0352 0-0.59375-0.35547-1.1328-0.90234-1.3594-0.55078-0.23047-1.1836-0.10547-1.6055 0.3125-0.42188 0.41797-0.54688 1.0508-0.32031 1.6016 0.22266 0.54688 0.75781 0.91016 1.3516 0.91016zm5.5781 0h0.019531c0.38672 0 0.75781-0.15625 1.0312-0.42969 0.27344-0.27344 0.42578-0.64844 0.42578-1.0352 0-0.59375-0.35547-1.1328-0.90234-1.3594-0.55078-0.23047-1.1836-0.10547-1.6055 0.3125-0.42188 0.41797-0.54688 1.0508-0.32422 1.6016 0.22656 0.54688 0.76172 0.91016 1.3555 0.91016zm0.019531 26.367h-0.019531c-0.38672 0-0.75781 0.15625-1.0312 0.42969-0.27344 0.27344-0.42578 0.64844-0.42188 1.0352-0.003906 0.59375 0.35156 1.1328 0.90234 1.3594 0.54688 0.23047 1.1797 0.10547 1.6016-0.3125 0.42188-0.41797 0.55078-1.0508 0.32422-1.6016-0.22656-0.54688-0.76172-0.91016-1.3555-0.91016zm-5.5781 0h-0.019531c-0.38672 0-0.75781 0.15625-1.0312 0.42969-0.27344 0.27344-0.42578 0.64844-0.42188 1.0352-0.003906 0.59375 0.35156 1.1328 0.90234 1.3594 0.54688 0.23047 1.1797 0.10547 1.6016-0.3125 0.42188-0.41797 0.55078-1.0508 0.32422-1.6016-0.22656-0.54688-0.76172-0.91016-1.3555-0.91016zm-33.477-26.363c0.8125 0 1.4688-0.65625 1.4688-1.4688 0-0.59375-0.35938-1.1289-0.90625-1.3555-0.54688-0.22656-1.1797-0.097657-1.5977 0.32031-0.41797 0.41797-0.54688 1.0508-0.32031 1.5977 0.22656 0.54687 0.76172 0.90625 1.3555 0.90625zm55.781 14.633c-0.39062 0-0.76172 0.15625-1.0391 0.42969-0.27344 0.27734-0.42578 0.64844-0.42578 1.0352v0.019531c0 0.39062 0.15234 0.76172 0.42969 1.0352 0.27344 0.27344 0.64453 0.42578 1.0352 0.42188 0.80859-0.003906 1.4648-0.66016 1.4648-1.4688 0-0.8125-0.65625-1.4688-1.4648-1.4727zm0-11.719c-0.39062 0-0.76172 0.15625-1.0391 0.42969-0.27344 0.27734-0.42578 0.64844-0.42578 1.0352v0.019531c0 0.39062 0.15234 0.76172 0.42969 1.0352 0.27344 0.27344 0.64453 0.42578 1.0352 0.42188 0.80859-0.003906 1.4648-0.66016 1.4648-1.4688 0-0.8125-0.65625-1.4688-1.4648-1.4727zm0 23.441v0.003906c-0.8125 0-1.4688 0.65625-1.4727 1.4688 0.003906 0.59375 0.35937 1.1289 0.91016 1.3555 0.54688 0.22656 1.1758 0.097657 1.5977-0.32031 0.41797-0.41797 0.54297-1.0508 0.31641-1.5977-0.22656-0.54687-0.76172-0.90625-1.3516-0.90625zm0-5.8633c-0.39062 0-0.76172 0.15625-1.0391 0.42969-0.27344 0.27734-0.42578 0.64844-0.42578 1.0352v0.019531c0 0.39062 0.15234 0.76172 0.42969 1.0352 0.27344 0.27344 0.64453 0.42578 1.0352 0.42188 0.80859-0.003906 1.4648-0.66016 1.4648-1.4688 0-0.8125-0.65625-1.4688-1.4648-1.4727zm15.898-36.902h-85.352c-4.043 0.003907-7.3203 3.2812-7.3242 7.3242v51.562c0.0039062 4.043 3.2812 7.3203 7.3242 7.3242h85.352c4.043-0.003907 7.3203-3.2812 7.3242-7.3242v-51.562c-0.003906-4.043-3.2812-7.3203-7.3242-7.3242zm4.3945 58.887c-0.003906 2.4258-1.9688 4.3906-4.3945 4.3945h-85.352c-2.4258-0.003906-4.3906-1.9688-4.3945-4.3945v-51.562c0.003906-2.4258 1.9688-4.3906 4.3945-4.3945h85.352c2.4258 0.003906 4.3906 1.9688 4.3945 4.3945zm-7.3242-53.027c-1.7773 0-3.3789 1.0703-4.0586 2.7109-0.67969 1.6445-0.30469 3.5352 0.95312 4.793 1.2539 1.2539 3.1445 1.6328 4.7891 0.94922 1.6406-0.67969 2.7109-2.2812 2.7109-4.0586-0.003906-2.4258-1.9688-4.3906-4.3945-4.3945zm0 5.8594c-0.59375 0-1.125-0.35547-1.3516-0.90234-0.22656-0.55078-0.10156-1.1797 0.31641-1.5977 0.41797-0.41797 1.0469-0.54297 1.5977-0.31641 0.54688 0.22656 0.90234 0.75781 0.90234 1.3516 0 0.80859-0.65625 1.4648-1.4648 1.4648zm-12.98 1.7578c-0.59375 0.003906-1.125 0.36328-1.3516 0.91016-0.22266 0.55078-0.09375 1.1797 0.32422 1.5977 0.42188 0.41797 1.0547 0.54297 1.6016 0.3125 0.54688-0.22656 0.90234-0.76172 0.90234-1.3555 0-0.39063-0.15625-0.76563-0.43359-1.0391-0.27734-0.27734-0.65234-0.42969-1.043-0.42578zm12.98 38.086c-1.7773 0-3.3789 1.0703-4.0586 2.7109-0.67969 1.6445-0.30469 3.5352 0.95312 4.793 1.2539 1.2539 3.1445 1.6328 4.7891 0.94922 1.6406-0.67969 2.7109-2.2812 2.7109-4.0586-0.003906-2.4258-1.9688-4.3906-4.3945-4.3945zm0 5.8594c-0.59375 0-1.125-0.35547-1.3516-0.90234-0.22656-0.55078-0.10156-1.1797 0.31641-1.5977 0.41797-0.41797 1.0469-0.54297 1.5977-0.31641 0.54688 0.22656 0.90234 0.75781 0.90234 1.3516 0 0.80859-0.65625 1.4648-1.4648 1.4648zm-12.969-32.238c-0.39062 0-0.76172 0.15625-1.0391 0.42969-0.27344 0.27734-0.42578 0.64844-0.42578 1.0352v0.019531c0 0.39062 0.15234 0.76172 0.42969 1.0352 0.27344 0.27344 0.64453 0.42578 1.0352 0.42188 0.80859-0.003906 1.4648-0.66016 1.4648-1.4688 0-0.8125-0.65625-1.4688-1.4648-1.4727zm-55.781 14.668c0.38672 0 0.76172-0.15234 1.0352-0.42578 0.27344-0.27734 0.42969-0.64844 0.42969-1.0391v-0.019531c0-0.38672-0.15625-0.75781-0.42969-1.0312-0.27344-0.27344-0.64844-0.42578-1.0352-0.42188-0.80859 0.003906-1.4648 0.66016-1.4648 1.4688 0 0.8125 0.65625 1.4688 1.4648 1.4688zm0-5.8594c0.38672 0 0.76172-0.15234 1.0352-0.42578 0.27344-0.27734 0.42969-0.64844 0.42969-1.0391v-0.019531c0-0.38672-0.15625-0.75781-0.42969-1.0312-0.27344-0.27344-0.64844-0.42578-1.0352-0.42188-0.80859 0.003906-1.4648 0.66016-1.4648 1.4688 0 0.8125 0.65625 1.4688 1.4648 1.4688zm55.781 17.57h-55.781c-0.80859 0-1.4648 0.65625-1.4648 1.4648s0.65625 1.4648 1.4648 1.4648h55.781c0.80859 0 1.4648-0.65625 1.4648-1.4648s-0.65625-1.4648-1.4648-1.4648zm-55.781-29.289c0.38672 0 0.76172-0.15234 1.0352-0.42578 0.27344-0.27734 0.42969-0.64844 0.42969-1.0391v-0.019531c0-0.38672-0.15625-0.75781-0.42969-1.0312-0.27344-0.27344-0.64844-0.42578-1.0352-0.42188-0.80859 0.003906-1.4648 0.66016-1.4648 1.4688 0 0.8125 0.65625 1.4688 1.4648 1.4688zm0 5.8594c0.38672 0 0.76172-0.15234 1.0352-0.42578 0.27344-0.27734 0.42969-0.64844 0.42969-1.0391v-0.019531c0-0.38672-0.15625-0.75781-0.42969-1.0312-0.27344-0.27344-0.64844-0.42578-1.0352-0.42188-0.80859 0.003906-1.4648 0.66016-1.4648 1.4688 0 0.8125 0.65625 1.4688 1.4648 1.4688zm-10.742-22.273c-1.7773 0-3.3789 1.0703-4.0586 2.7109-0.67969 1.6445-0.30469 3.5352 0.95313 4.793 1.2539 1.2539 3.1445 1.6328 4.7891 0.94922 1.6406-0.67969 2.7109-2.2812 2.7109-4.0586-0.003907-2.4258-1.9688-4.3906-4.3945-4.3945zm0 5.8594c-0.59375 0-1.125-0.35547-1.3516-0.90234-0.22656-0.55078-0.10156-1.1797 0.31641-1.5977s1.0469-0.54297 1.5977-0.31641c0.54688 0.22656 0.90234 0.75781 0.90234 1.3516 0 0.80859-0.65625 1.4648-1.4648 1.4648zm0 39.844c-1.7773 0-3.3789 1.0703-4.0586 2.7109-0.67969 1.6445-0.30469 3.5352 0.95313 4.793 1.2539 1.2539 3.1445 1.6328 4.7891 0.94922 1.6406-0.67969 2.7109-2.2812 2.7109-4.0586-0.003907-2.4258-1.9688-4.3906-4.3945-4.3945zm0 5.8594c-0.59375 0-1.125-0.35547-1.3516-0.90234-0.22656-0.55078-0.10156-1.1797 0.31641-1.5977 0.41797-0.41797 1.0469-0.54297 1.5977-0.31641 0.54688 0.22656 0.90234 0.75781 0.90234 1.3516 0 0.80859-0.65625 1.4648-1.4648 1.4648zm10.75-11.719c0.59375-0.003906 1.1289-0.36328 1.3516-0.91016 0.22656-0.55078 0.097656-1.1797-0.32422-1.5977-0.41797-0.41797-1.0508-0.54297-1.5977-0.3125-0.54688 0.22656-0.90234 0.76172-0.90234 1.3555 0 0.39063 0.15234 0.76563 0.42969 1.0391 0.27734 0.27734 0.65625 0.42969 1.043 0.42578z">
                            </path>
                        </svg>
                    </div>

                    <div class="w-full px-4 lg:w-4/12 xl:w-4/12 text-left" data-wow-delay=".2s">
                        <p style="font-size: 18px; color:grey"><b>Interior Signs</b></p>
                        <p style="color:grey">
                            Interior signs play a crucial role in guiding and informing your customers. Our team specializes
                            in creating interior signage that enhances the customer experience. Whether it's directional
                            signs, office plaques, or promotional displays, we ensure they are both functional and
                            aesthetically pleasing. Trust us to design interior signs that align with your brand’s image and
                            improve overall customer interaction.
                        </p>
                        <br>
                        <button
                            class="px-6 py-2 text-base font-small text-white duration-300 ease-in-out rounded-md bg-white/20 signUpBtn hover:bg-white/100 hover:text-white"
                            style=" padding: 1rem; background-color: var(--color-primary);">Learn More</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
