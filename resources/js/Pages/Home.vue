<template>
  <App>

    <Head>
      <title>Dante Schrauwen</title>
    </Head>

      <!-- Start Home -->
      <section class="bg-[url('../images/home-bg.jpg')] bg-top pt-36 md:pt-[240px]">
          <div class="container">
              <div class="grid grid-cols-1">
                  <div class="text-center">
                      <h1 class="font-semibold text-4xl leading-snug md:text-6xl md:leading-snug lg:text-[70px] lg:leading-[90px] max-w-[800px] mx-auto">We make remarkable digital products</h1>
                      <p class="md:mt-8 mt-5 text-dark-light text-base md:text-lg leading-[30px]">We design and build beautiful websites, apps and branding</p>
                      <div class="md:mt-12 mt-7">
                          <a href="#work" class="btn-green">View our work</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="mt-14 max-w-[1600px] mx-auto">
              <img src="assets/images/hero-img.png" alt="" />
          </div>
      </section>
      <!-- End Home -->

      <!-- Start Logo -->
      <section class="md:py-[120px] py-20 bg-blue">
          <div class="container relative">
              <div class="grid grid-cols-1">
                  <div class="text-center">
                      <h3 class="text-[#C6DCEB] text-xl">Trusted by 35+ biggest brands</h3>
                  </div>
              </div>
              <div class="mt-12 relative">
                  <div class="swiper client-logo select-none relative">
                      <div class="swiper-wrapper">
                          <div class="swiper-slide">
                              <img src="assets/images/client-logo/1.png" class="mx-auto" alt="" />
                          </div>
                          <div class="swiper-slide">
                              <img src="assets/images/client-logo/2.png" class="mx-auto" alt="" />
                          </div>
                          <div class="swiper-slide">
                              <img src="assets/images/client-logo/3.png" class="mx-auto" alt="" />
                          </div>
                          <div class="swiper-slide">
                              <img src="assets/images/client-logo/4.png" class="mx-auto" alt="" />
                          </div>
                          <div class="swiper-slide">
                              <img src="assets/images/client-logo/5.png" class="mx-auto" alt="" />
                          </div>
                      </div>
                  </div>
                  <div class="flex justify-between absolute top-1/2 -translate-y-1/2 z-10 w-full">
                      <button type="button" class="client-logo-button-prev relative min-[1210px]:-left-8 flex h-8 w-8 items-center justify-center rounded-full bg-[#448EC0]">
                          <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M5.70679 0.293031C5.89426 0.480558 5.99957 0.734866 5.99957 1.00003C5.99957 1.26519 5.89426 1.5195 5.70679 1.70703L2.41379 5.00003L5.70679 8.29303C5.88894 8.48163 5.98974 8.73423 5.98746 8.99643C5.98518 9.25863 5.88001 9.50944 5.6946 9.69485C5.5092 9.88026 5.25838 9.98543 4.99619 9.9877C4.73399 9.98998 4.48139 9.88919 4.29279 9.70703L0.292787 5.70703C0.105316 5.5195 0 5.26519 0 5.00003C0 4.73487 0.105316 4.48056 0.292787 4.29303L4.29279 0.293031C4.48031 0.10556 4.73462 0.000244141 4.99979 0.000244141C5.26495 0.000244141 5.51926 0.10556 5.70679 0.293031V0.293031Z"
                                  fill="#FAFAFA"
                              />
                          </svg>
                      </button>
                      <button type="button" class="client-logo-button-next relative min-[1210px]:-right-8 flex h-8 w-8 items-center justify-center rounded-full bg-[#448EC0]">
                          <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M0.293214 9.70697C0.105743 9.51944 0.00042731 9.26513 0.000427333 8.99997C0.000427357 8.7348 0.105743 8.4805 0.293214 8.29297L3.58621 4.99997L0.293215 1.70697C0.111057 1.51837 0.0102623 1.26576 0.0125407 1.00357C0.014819 0.741372 0.119988 0.490558 0.305396 0.30515C0.490804 0.119743 0.741617 0.0145736 1.00381 0.0122953C1.26601 0.010017 1.51861 0.110811 1.70721 0.292969L5.70721 4.29297C5.89468 4.4805 6 4.73481 6 4.99997C6 5.26513 5.89468 5.51944 5.70721 5.70697L1.70721 9.70697C1.51969 9.89444 1.26538 9.99976 1.00021 9.99976C0.735049 9.99976 0.480742 9.89444 0.293214 9.70697Z"
                                  fill="#FAFAFA"
                              />
                          </svg>
                      </button>
                  </div>
              </div>
          </div>
      </section>
      <!-- End Logo -->

      <!-- Start Service -->
      <section class="md:py-[120px] py-20">
          <div class="container">
              <div class="grid grid-cols-1 md:grid-cols-2 items-end gap-6">
                  <div class="max-w-[461px]">
                      <p class="uppercase font-medium text-sm tracking-[0.84px] after:bg-green-semilight after:absolute after:w-full after:h-2 relative after:left-0 inline-block after:bottom-0 after:-z-10">What we do</p>
                      <h2 class="font-semibold mt-4 text-4xl leading-snug lg:text-5xl lg:leading-[62px]">Delivering quality products</h2>
                  </div>
                  <div class="flex md:flex-row flex-col md:items-center gap-2 md:gap-16 justify-end max-w-sm md:ml-auto">
                      <div class="flex items-center text-left gap-4">
                          <h2 class="text-[56px] leading-[72px] font-semibold text-green" data-vanilla-counter data-start-at="0" data-end-at="13" data-time="3000" data-delay="0" data-format="{}"></h2>
                          <p class="md:text-[15px] md:leading-[22px] text-lg">Years in business</p>
                      </div>
                      <div class="flex items-center text-left gap-4">
                          <h2 class="text-[56px] leading-[72px] font-semibold text-green" data-vanilla-counter data-start-at="0" data-end-at="28" data-time="3000" data-delay="0" data-format="{}"></h2>
                          <p class="md:text-[15px] md:leading-[22px] text-lg">Designers & developers</p>
                      </div>
                  </div>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">
                  <div class="p-8 pt-16 bg-white hover:shadow-custom duration-300 rounded-2xl">
                      <img src="assets/images/instagram.png" alt="" />
                      <h4 class="text-[22px] leading-8 font-semibold mt-16">Branding</h4>
                      <p class="mt-4 text-[15px] leading-7 text-dark-light">Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis laboris nisi</p>
                      <a href="services.html" class="w-8 h-8 mt-8 bg-green flex items-center justify-center rounded-full">
                          <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M0.293214 9.70697C0.105743 9.51944 0.00042731 9.26513 0.000427333 8.99997C0.000427357 8.7348 0.105743 8.4805 0.293214 8.29297L3.58621 4.99997L0.293215 1.70697C0.111057 1.51837 0.0102623 1.26576 0.0125407 1.00357C0.014819 0.741372 0.119988 0.490558 0.305396 0.30515C0.490804 0.119743 0.741617 0.0145736 1.00381 0.0122953C1.26601 0.010017 1.51861 0.110811 1.70721 0.292969L5.70721 4.29297C5.89468 4.4805 6 4.73481 6 4.99997C6 5.26513 5.89468 5.51944 5.70721 5.70697L1.70721 9.70697C1.51969 9.89444 1.26538 9.99976 1.00021 9.99976C0.735049 9.99976 0.480742 9.89444 0.293214 9.70697Z"
                                  fill="#FAFAFA"
                              />
                          </svg>
                      </a>
                  </div>
                  <div class="p-8 pt-16 bg-white hover:shadow-custom duration-300 rounded-2xl">
                      <img src="assets/images/web-development.png" alt="" />
                      <h4 class="text-[22px] leading-8 font-semibold mt-16">Development</h4>
                      <p class="mt-4 text-[15px] leading-7 text-dark-light">Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis laboris nisi</p>
                      <a href="services.html" class="w-8 h-8 mt-8 bg-green flex items-center justify-center rounded-full">
                          <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M0.293214 9.70697C0.105743 9.51944 0.00042731 9.26513 0.000427333 8.99997C0.000427357 8.7348 0.105743 8.4805 0.293214 8.29297L3.58621 4.99997L0.293215 1.70697C0.111057 1.51837 0.0102623 1.26576 0.0125407 1.00357C0.014819 0.741372 0.119988 0.490558 0.305396 0.30515C0.490804 0.119743 0.741617 0.0145736 1.00381 0.0122953C1.26601 0.010017 1.51861 0.110811 1.70721 0.292969L5.70721 4.29297C5.89468 4.4805 6 4.73481 6 4.99997C6 5.26513 5.89468 5.51944 5.70721 5.70697L1.70721 9.70697C1.51969 9.89444 1.26538 9.99976 1.00021 9.99976C0.735049 9.99976 0.480742 9.89444 0.293214 9.70697Z"
                                  fill="#FAFAFA"
                              />
                          </svg>
                      </a>
                  </div>
                  <div class="p-8 pt-16 bg-white hover:shadow-custom duration-300 rounded-2xl">
                      <img src="assets/images/graphic-designer.png" alt="" />
                      <h4 class="text-[22px] leading-8 font-semibold mt-16">Design</h4>
                      <p class="mt-4 text-[15px] leading-7 text-dark-light">Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis laboris nisi</p>
                      <a href="services.html" class="w-8 h-8 mt-8 bg-green flex items-center justify-center rounded-full">
                          <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M0.293214 9.70697C0.105743 9.51944 0.00042731 9.26513 0.000427333 8.99997C0.000427357 8.7348 0.105743 8.4805 0.293214 8.29297L3.58621 4.99997L0.293215 1.70697C0.111057 1.51837 0.0102623 1.26576 0.0125407 1.00357C0.014819 0.741372 0.119988 0.490558 0.305396 0.30515C0.490804 0.119743 0.741617 0.0145736 1.00381 0.0122953C1.26601 0.010017 1.51861 0.110811 1.70721 0.292969L5.70721 4.29297C5.89468 4.4805 6 4.73481 6 4.99997C6 5.26513 5.89468 5.51944 5.70721 5.70697L1.70721 9.70697C1.51969 9.89444 1.26538 9.99976 1.00021 9.99976C0.735049 9.99976 0.480742 9.89444 0.293214 9.70697Z"
                                  fill="#FAFAFA"
                              />
                          </svg>
                      </a>
                  </div>
              </div>
          </div>
      </section>
      <!-- End Service -->

      <!-- Start Divider -->
      <div class="container">
          <div class="bg-light h-px w-full block"></div>
      </div>
      <!-- End Divider -->

      <!-- Start About Us -->
      <section class="md:py-[120px] py-20">
          <div class="container">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                  <div>
                      <img src="assets/images/about.png" class="rounded-full" alt="" />
                  </div>
                  <div>
                      <div class="lg:max-w-[461px] lg:ml-auto">
                          <p class="uppercase font-medium text-sm tracking-[0.84px] after:bg-green-semilight after:absolute after:w-full after:h-2 relative after:left-0 inline-block after:bottom-0 after:-z-10">About us</p>
                          <h2 class="font-semibold mt-4 text-4xl leading-snug lg:text-5xl lg:leading-[62px]">Best agency for your project</h2>
                          <p class="mt-12 text-[15px] leading-7 text-dark-light">
                              Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work
                          </p>
                          <div class="mt-14">
                              <a href="#" class="btn-green">Learn more</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End About Us -->

      <!-- Start Divider -->
      <div class="container">
          <div class="bg-light h-px w-full block"></div>
      </div>
      <!-- End Divider -->

      <!-- Start Work -->
      <section class="md:py-[120px] py-20" id="work">
          <div class="container">
              <div class="grid md:grid-cols-2 md:gap-[72px] items-center">
                  <div>
                      <div class="max-w-[461px]">
                          <p class="uppercase font-medium text-sm tracking-[0.84px] after:bg-green-semilight after:absolute after:w-full after:h-2 relative after:left-0 inline-block after:bottom-0 after:-z-10">Projects</p>
                          <h2 class="font-semibold mt-4 text-4xl leading-snug lg:text-5xl lg:leading-[62px]">Our marvelous works</h2>
                      </div>
                      <div class="md:mt-12 mt-6">
                          <a href="work.html" class="btn-green">View all project</a>
                      </div>
                      <div class="mt-12 space-y-6 md:mt-14 md:space-y-[72px]">
                          <div class="bg-white rounded-2xl overflow-hidden">
                              <a href="work-detail.html">
                                  <img src="assets/images/work/1.png" class="object-cover w-full h-full" alt="" />
                              </a>
                              <div class="p-8 md:max-w-[420px]">
                                  <a href="work-detail.html" class="hover:text-green font-semibold text-[22px] leading-8 duration-300">Powering Social Proof for Modern Business</a>
                                  <p class="text-dark-semilight mt-4 font-medium text-xs leading-5 uppercase tracking-[0.86px]">branding</p>
                              </div>
                          </div>
                          <div class="bg-white rounded-2xl overflow-hidden">
                              <a href="work-detail.html">
                                  <img src="assets/images/work/2.png" class="object-cover w-full h-full" alt="" />
                              </a>
                              <div class="p-8 md:max-w-[420px]">
                                  <a href="work-detail.html" class="hover:text-green font-semibold text-[22px] leading-8 duration-300">Bringing a modern mobile experience learning</a>
                                  <p class="text-dark-semilight mt-4 font-medium text-xs leading-5 uppercase tracking-[0.86px]">Development</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="mt-6 space-y-6 md:mt-[72px] md:space-y-[72px]">
                      <div class="bg-white rounded-2xl overflow-hidden">
                          <a href="work-detail.html">
                              <img src="assets/images/work/3.png" class="object-cover w-full h-full" alt="" />
                          </a>
                          <div class="p-8 md:max-w-[420px]">
                              <a href="work-detail.html" class="hover:text-green font-semibold text-[22px] leading-8 duration-300">Art direction for leading publishing company</a>
                              <p class="text-dark-semilight mt-4 font-medium text-xs leading-5 uppercase tracking-[0.86px]">Development</p>
                          </div>
                      </div>
                      <div class="bg-white rounded-2xl overflow-hidden">
                          <a href="work-detail.html">
                              <img src="assets/images/work/4.png" class="object-cover w-full h-full" alt="" />
                          </a>
                          <div class="p-8 md:max-w-[420px]">
                              <a href="work-detail.html" class="hover:text-green font-semibold text-[22px] leading-8 duration-300">Helping Australias oldest banking company</a>
                              <p class="text-dark-semilight mt-4 font-medium text-xs leading-5 uppercase tracking-[0.86px]">Design</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End Work -->

      <!-- Start Divider -->
      <div class="container">
          <div class="bg-light h-px w-full block"></div>
      </div>
      <!-- End Divider -->

      <!-- Start Client -->
      <section class="md:py-[120px] py-20">
          <div class="container">
              <div class="grid grid-cols-1">
                  <div class="max-w-[461px] text-center mx-auto">
                      <p class="uppercase font-medium text-sm tracking-[0.84px] after:bg-green-semilight after:absolute after:w-full after:h-2 relative after:left-0 inline-block after:bottom-0 after:-z-10">Testimonial</p>
                      <h2 class="font-semibold mt-4 text-4xl leading-snug lg:text-5xl lg:leading-[62px]">What our clients are saying</h2>
                  </div>
              </div>
              <div class="relative">
                  <div class="swiper client-slider mt-12 relative">
                      <div class="swiper-wrapper">
                          <div class="swiper-slide">
                              <div class="p-8 bg-white rounded-2xl">
                                  <p class="text-[15px] leading-7 text-dark-light">
                                      Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                      pariatur occaecat
                                  </p>
                                  <div class="flex items-center justify-between gap-3 mt-16">
                                      <div>
                                          <h5 class="text-lg font-semibold leading-7">Philis O’Dwyer</h5>
                                          <p class="uppercase mt-2 text-dark-semilight tracking-[0.86px] font-medium text-sm leading-5">New york, NY</p>
                                      </div>
                                      <img src="assets/images/quote.svg" alt="" />
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="p-8 bg-white rounded-2xl">
                                  <p class="text-[15px] leading-7 text-dark-light">
                                      Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                      pariatur occaecat
                                  </p>
                                  <div class="flex items-center justify-between gap-3 mt-16">
                                      <div>
                                          <h5 class="text-lg font-semibold leading-7">Susana Medy</h5>
                                          <p class="uppercase mt-2 text-dark-semilight tracking-[0.86px] font-medium text-sm leading-5">Orlando, FL</p>
                                      </div>
                                      <img src="assets/images/quote.svg" alt="" />
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="p-8 bg-white rounded-2xl">
                                  <p class="text-[15px] leading-7 text-dark-light">
                                      Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                      pariatur occaecat
                                  </p>
                                  <div class="flex items-center justify-between gap-3 mt-16">
                                      <div>
                                          <h5 class="text-lg font-semibold leading-7">Henry Dege</h5>
                                          <p class="uppercase mt-2 text-dark-semilight tracking-[0.86px] font-medium text-sm leading-5">Irvine, CA</p>
                                      </div>
                                      <img src="assets/images/quote.svg" alt="" />
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="client-slider-pagination space-x-4 mt-14 flex items-center justify-center"></div>
              </div>
          </div>
      </section>
      <!-- End Client -->

      <!-- Start Divider -->
      <div class="container">
          <div class="bg-light h-px w-full block"></div>
      </div>
      <!-- End Divider -->

      <!-- Start Get In Touch -->
      <section class="md:py-[120px] py-20">
          <div class="container">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                  <div>
                      <img src="assets/images/getin.png" class="rounded-full" alt="" />
                  </div>
                  <div>
                      <div class="lg:max-w-[461px] lg:ml-auto">
                          <p class="uppercase font-medium text-sm tracking-[0.84px] after:bg-green-semilight after:absolute after:w-full after:h-2 relative after:left-0 inline-block after:bottom-0 after:-z-10">Get in touch</p>
                          <h2 class="font-semibold mt-4 text-4xl leading-snug lg:text-5xl lg:leading-[62px]">Subscribe to our newsletter</h2>
                          <form class="mt-12">
                              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                  <div>
                                      <input type="text" class="form-input" placeholder="Enter your name" />
                                  </div>
                                  <div>
                                      <input type="email" class="form-input" placeholder="Enter your email" />
                                  </div>
                                  <div class="sm:col-span-2">
                                      <input type="button" class="btn-green w-full" value="subscribe now" />
                                  </div>
                              </div>
                              <div class="sm:col-span-2 mt-6">
                                  <input type="checkbox" id="term" class="form-checkbox" />
                                  <label for="term" class="ml-1 relative top-[1px] text-[15px] leading-7 text-dark-light">I agree with <span class="text-[15px] leading-7 font-medium text-dark">Terms & Condition</span></label>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End Get In Touch -->

      <!-- Start Divider -->
      <div class="container">
          <div class="bg-light h-px w-full block"></div>
      </div>
      <!-- End Divider -->

      <!-- Start Team -->
      <section class="md:py-[120px] py-20">
          <div class="container">
              <div class="grid grid-cols-1">
                  <div class="max-w-[461px] text-center mx-auto">
                      <p class="uppercase font-medium text-sm tracking-[0.84px] after:bg-green-semilight after:absolute after:w-full after:h-2 relative after:left-0 inline-block after:bottom-0 after:-z-10">Team</p>
                      <h2 class="font-semibold mt-4 text-4xl leading-snug lg:text-5xl lg:leading-[62px]">We work hard for your success</h2>
                  </div>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-12">
                  <div class="bg-white duration-300 group pt-14 p-8 text-center hover:shadow-custom rounded-2xl">
                      <div class="border-4 border-white duration-300 group-hover:border-green inline-block rounded-full p-1">
                          <img src="assets/images/team/1.png" class="mx-auto rounded-full" alt="" />
                      </div>
                      <h5 class="mt-14 font-semibold text-lg leading-7 hover:text-green duration-300">
                          <a href="team-details.html">Shaw Johnson</a>
                      </h5>
                      <p class="mt-2 text-dark-semilight font-medium text-sm leading-5 uppercase tracking-[0.86px]">Founder</p>
                  </div>
                  <div class="bg-white duration-300 group pt-14 p-8 text-center hover:shadow-custom rounded-2xl">
                      <div class="border-4 border-white duration-300 group-hover:border-green inline-block rounded-full p-1">
                          <img src="assets/images/team/2.png" class="mx-auto rounded-full" alt="" />
                      </div>
                      <h5 class="mt-14 font-semibold text-lg leading-7 hover:text-green duration-300">
                          <a href="team-details.html">John Doe</a>
                      </h5>
                      <p class="mt-2 text-dark-semilight font-medium text-sm leading-5 uppercase tracking-[0.86px]">CEO</p>
                  </div>
                  <div class="bg-white duration-300 group pt-14 p-8 text-center hover:shadow-custom rounded-2xl">
                      <div class="border-4 border-white duration-300 group-hover:border-green inline-block rounded-full p-1">
                          <img src="assets/images/team/3.png" class="mx-auto rounded-full" alt="" />
                      </div>
                      <h5 class="mt-14 font-semibold text-lg leading-7 hover:text-green duration-300">
                          <a href="team-details.html">Atena Stak</a>
                      </h5>
                      <p class="mt-2 text-dark-semilight font-medium text-sm leading-5 uppercase tracking-[0.86px]">Manager</p>
                  </div>
                  <div class="bg-white duration-300 group pt-14 p-8 text-center hover:shadow-custom rounded-2xl">
                      <div class="border-4 border-white duration-300 group-hover:border-green inline-block rounded-full p-1">
                          <img src="assets/images/team/4.png" class="mx-auto rounded-full" alt="" />
                      </div>
                      <h5 class="mt-14 font-semibold text-lg leading-7 hover:text-green duration-300">
                          <a href="team-details.html">Mike Wong</a>
                      </h5>
                      <p class="mt-2 text-dark-semilight font-medium text-sm leading-5 uppercase tracking-[0.86px]">UI/UX</p>
                  </div>
                  <div class="bg-white duration-300 group pt-14 p-8 text-center hover:shadow-custom rounded-2xl">
                      <div class="border-4 border-white duration-300 group-hover:border-green inline-block rounded-full p-1">
                          <img src="assets/images/team/5.png" class="mx-auto rounded-full" alt="" />
                      </div>
                      <h5 class="mt-14 font-semibold text-lg leading-7 hover:text-green duration-300">
                          <a href="team-details.html">Victoria Gomez</a>
                      </h5>
                      <p class="mt-2 text-dark-semilight font-medium text-sm leading-5 uppercase tracking-[0.86px]">Developer</p>
                  </div>
                  <div class="bg-white duration-300 group pt-14 p-8 text-center hover:shadow-custom rounded-2xl">
                      <div class="border-4 border-white duration-300 group-hover:border-green inline-block rounded-full p-1">
                          <img src="assets/images/team/6.png" class="mx-auto rounded-full" alt="" />
                      </div>
                      <h5 class="mt-14 font-semibold text-lg leading-7 hover:text-green duration-300">
                          <a href="team-details.html">Thomas Zavala</a>
                      </h5>
                      <p class="mt-2 text-dark-semilight font-medium text-sm leading-5 uppercase tracking-[0.86px]">Marketing</p>
                  </div>
                  <div class="bg-white duration-300 group pt-14 p-8 text-center hover:shadow-custom rounded-2xl">
                      <div class="border-4 border-white duration-300 group-hover:border-green inline-block rounded-full p-1">
                          <img src="assets/images/team/7.png" class="mx-auto rounded-full" alt="" />
                      </div>
                      <h5 class="mt-14 font-semibold text-lg leading-7 hover:text-green duration-300">
                          <a href="team-details.html">Maria Zurich</a>
                      </h5>
                      <p class="mt-2 text-dark-semilight font-medium text-sm leading-5 uppercase tracking-[0.86px]">Animator</p>
                  </div>
                  <div class="bg-white duration-300 group pt-14 p-8 text-center hover:shadow-custom rounded-2xl">
                      <div class="border-4 border-white duration-300 group-hover:border-green inline-block rounded-full p-1">
                          <img src="assets/images/team/8.png" class="mx-auto rounded-full" alt="" />
                      </div>
                      <h5 class="mt-14 font-semibold text-lg leading-7 hover:text-green duration-300">
                          <a href="team-details.html">Joshua Kary</a>
                      </h5>
                      <p class="mt-2 text-dark-semilight font-medium text-sm leading-5 uppercase tracking-[0.86px]">Designer</p>
                  </div>
              </div>
          </div>
      </section>
      <!-- End Team -->

      <!-- Start Divider -->
      <div class="container">
          <div class="bg-light h-px w-full block"></div>
      </div>
      <!-- End Divider -->

      <!-- Start Blog -->
      <section class="md:py-[120px] py-20">
          <div class="container">
              <div class="grid grid-cols-1 md:grid-cols-2 items-end gap-6">
                  <div class="max-w-[461px]">
                      <p class="uppercase font-medium text-sm tracking-[0.84px] after:bg-green-semilight after:absolute after:w-full after:h-2 relative after:left-0 inline-block after:bottom-0 after:-z-10">Blog</p>
                      <h2 class="font-semibold mt-4 text-4xl leading-snug lg:text-5xl lg:leading-[62px]">latest news from our blog</h2>
                  </div>
                  <div class="md:text-end">
                      <a href="blog.html" class="btn-green">View all posts</a>
                  </div>
              </div>
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-12">
                  <div class="bg-white md:flex items-center rounded-2xl overflow-hidden">
                      <img src="assets/images/blog/1.jpg" class="max-h-[350px] md:max-w-[220px] md:h-full md:object-cover" alt="" />
                      <div class="p-8 flex-1">
                          <p class="font-medium text-sm text-dark-semilight tracking-[0.86px] uppercase">April 17, 2021</p>
                          <h4 class="mt-4 text-[22px] leading-[34px] font-semibold hover:text-green duration-300"><a href="blog-details.html">How to bring Cosa to your company</a></h4>
                          <p class="mt-4 text-dark-light leading-7 text-[15px]">Enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                          <a href="blog-details.html" class="text-green mt-16 inline-block uppercase font-medium tracking-[0.86px]">Read more</a>
                      </div>
                  </div>
                  <div class="bg-white md:flex items-center rounded-2xl overflow-hidden">
                      <img src="assets/images/blog/2.jpg" class="max-h-[350px] md:max-w-[220px] md:h-full md:object-cover" alt="" />
                      <div class="p-8 flex-1">
                          <p class="font-medium text-sm text-dark-semilight tracking-[0.86px] uppercase">April 17, 2021</p>
                          <h4 class="mt-4 text-[22px] leading-[34px] font-semibold hover:text-green duration-300"><a href="blog-details.html">How to bring Cosa to your company</a></h4>
                          <p class="mt-4 text-dark-light leading-7 text-[15px]">Enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                          <a href="blog-details.html" class="text-green mt-16 inline-block uppercase font-medium tracking-[0.86px]">Read more</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End Blog -->

      <!-- Start Divider -->
      <div class="container">
          <div class="bg-light h-px w-full block"></div>
      </div>
      <!-- End Divider -->

      <!-- Start Cta -->
      <section class="md:py-[120px] py-20">
          <div class="container">
              <div class="grid grid-cols-1">
                  <div class="max-w-[780px] text-center mx-auto">
                      <h2 class="text-4xl leading-snug md:text-6xl md:leading-snug lg:text-[70px] lg:leading-[90px] font-semibold">Build your project with Digity</h2>
                      <p class="mt-8 text-lg leading-[30px] text-dark-light">We design and build beautiful websites, apps and branding</p>
                      <div class="mt-12">
                          <a href="contact.html" class="btn-green">Start a project</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End Cta -->

  </App>
</template>

<script>
import App from "../Components/Layouts/App.vue";

export default {
  name: "Home",

  components: {
    App
  },
}
</script>

<style scoped>

</style>
