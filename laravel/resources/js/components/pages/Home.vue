<template>
  <div class="overflow-hidden bg-white">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
      <div class="flex flex-col items-center justify-between xl:flex-row">
        <div class="w-full max-w-xl mb-12 xl:pr-16 xl:mb-0 xl:w-7/12">
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
            The quick, brown fox <br class="hidden md:block" />
            jumps over a <span class="text-teal-accent-400">lazy dog</span>
          </h2>
          <p class="max-w-xl mb-4 text-base text-gray-400 md:text-lg">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.
          </p>
          <a href="/" aria-label="" class="inline-flex items-center font-semibold tracking-wider transition-colors duration-200 text-teal-accent-400 hover:text-teal-accent-700">
            Learn more
            <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
              <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
            </svg>
          </a>
        </div>
        <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
          <div class="relative">
            <svg viewBox="0 0 52 24" fill="currentColor" class="absolute bottom-0 right-0 z-0 hidden w-32 -mb-8 -mr-20 text-teal-accent-400 lg:w-32 lg:-mr-16 sm:block">
              <defs>
                <pattern id="766323e1-e594-4ffd-a688-e7275079d540" x="0" y="0" width=".135" height=".30">
                  <circle cx="1" cy="1" r=".7"></circle>
                </pattern>
              </defs>
              <rect fill="url(#766323e1-e594-4ffd-a688-e7275079d540)" width="52" height="24"></rect>
            </svg>
            <div class="relative bg-white rounded shadow-2xl p-7 sm:p-10">
              <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                Sign up
              </h3>
              <form>
                <div class="mb-1 sm:mb-2">
                  <label for="name" class="inline-block mb-1 font-medium">Name</label>
                  <input
                    placeholder="John Doe"
                    required=""
                    type="text"
                    class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                    id="name"
                    name="name"
                  />
                </div>
                <div class="mb-1 sm:mb-2">
                  <label for="email" class="inline-block mb-1 font-medium">E-mail</label>
                  <input
                    placeholder="john.doe@example.org"
                    required=""
                    type="text"
                    class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                    id="email"
                    name="email"
                  />
                </div>
                <div class="mt-4 mb-2 sm:mb-4">
                  <button
                    type="submit"
                    class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                  >
                    Sign up
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid row-gap-8 sm:row-gap-0 sm:grid-cols-2 lg:grid-cols-3">
      <div class="p-8 border-b sm:border-r">
        <div class="max-w-md text-center">
          <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-16 sm:h-16">
            <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-12 sm:h-12" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
          <h6 class="mb-2 font-semibold leading-5">The quick fox</h6>
          <p class="mb-3 text-sm text-gray-900">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium rem aperiam, eaque ipsa quae. Sit error voluptatem.
          </p>
        </div>
      </div>
      <div class="p-8 border-b lg:border-r">
        <div class="max-w-md text-center">
          <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-16 sm:h-16">
            <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-12 sm:h-12" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
          <h6 class="mb-2 font-semibold leading-5">Leverage agile</h6>
          <p class="mb-3 text-sm text-gray-900">
            Storage shed, troughs feed bale manure, is garden wheat oats at augers. Bulls at rose garden cucumbers mice sunflower wheat in pig.
          </p>
        </div>
      </div>
      <div class="p-8 border-b sm:border-r lg:border-r-0">
        <div class="max-w-md text-center">
          <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-16 sm:h-16">
            <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-12 sm:h-12" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
          <h6 class="mb-2 font-semibold leading-5">Organically grow</h6>
          <p class="mb-3 text-sm text-gray-900">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium rem aperiam, eaque ipsa quae. Sit error voluptatem.
          </p>
        </div>
      </div>
      <div class="p-8 border-b lg:border-b-0 lg:border-r">
        <div class="max-w-md text-center">
          <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-16 sm:h-16">
            <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-12 sm:h-12" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
          <h6 class="mb-2 font-semibold leading-5">Have a good one</h6>
          <p class="mb-3 text-sm text-gray-900">
            Storage shed, troughs feed bale manure, is garden wheat oats at augers. Bulls at rose garden cucumbers mice sunflower wheat in pig.
          </p>
        </div>
      </div>
      <div class="p-8 border-b sm:border-b-0 sm:border-r">
        <div class="max-w-md text-center">
          <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-16 sm:h-16">
            <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-12 sm:h-12" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
          <h6 class="mb-2 font-semibold leading-5">Trough pomfret</h6>
          <p class="mb-3 text-sm text-gray-900">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium rem aperiam, eaque ipsa quae. Sit error voluptatem.
          </p>
        </div>
      </div>
      <div class="p-8">
        <div class="max-w-md text-center">
          <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-16 sm:h-16">
            <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-12 sm:h-12" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
          <h6 class="mb-2 font-semibold leading-5">Disrupt inspire</h6>
          <p class="mb-3 text-sm text-gray-900">
            Storage shed, troughs feed bale manure, is garden wheat oats at augers. Bulls at rose garden cucumbers mice sunflower wheat in pig.
          </p>
        </div>
      </div>
    </div>
  </div>
    <Info />
  <div class="relative mt-16 bg-deep-purple-accent-400">
    <svg class="absolute top-0 w-full h-6 -mt-5 sm:-mt-10 sm:h-16 text-deep-purple-accent-400" preserveAspectRatio="none" viewBox="0 0 1440 54">
      <path fill="currentColor" d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z"></path>
    </svg>
    <div class="px-4 pt-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
      <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
        <div class="md:max-w-md lg:col-span-2">
          <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
            <svg class="w-8 text-teal-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
              <rect x="3" y="1" width="7" height="12"></rect>
              <rect x="3" y="17" width="7" height="6"></rect>
              <rect x="14" y="1" width="7" height="6"></rect>
              <rect x="14" y="11" width="7" height="12"></rect>
            </svg>
            <span class="ml-2 text-xl font-bold tracking-wide text-gray-100 uppercase">Company</span>
          </a>
          <div class="mt-4 lg:max-w-sm">
            <p class="text-sm text-deep-purple-50">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
            </p>
            <p class="mt-4 text-sm text-deep-purple-50">
              Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </p>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
          <div>
            <p class="font-semibold tracking-wide text-teal-accent-400">
              Category
            </p>
            <ul class="mt-2 space-y-2">
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">News</a>
              </li>
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">World</a>
              </li>
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Games</a>
              </li>
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">References</a>
              </li>
            </ul>
          </div>
          <div>
            <p class="font-semibold tracking-wide text-teal-accent-400">
              Cherry
            </p>
            <ul class="mt-2 space-y-2">
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Web</a>
              </li>
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">eCommerce</a>
              </li>
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Business</a>
              </li>
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Entertainment</a>
              </li>
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Portfolio</a>
              </li>
            </ul>
          </div>
          <div>
            <p class="font-semibold tracking-wide text-teal-accent-400">
              Apples
            </p>
            <ul class="mt-2 space-y-2">
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Media</a>
              </li>
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Brochure</a>
              </li>
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Nonprofit</a>
              </li>
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Educational</a>
              </li>
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Projects</a>
              </li>
            </ul>
          </div>
          <div>
            <p class="font-semibold tracking-wide text-teal-accent-400">
              Business
            </p>
            <ul class="mt-2 space-y-2">
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Infopreneur</a>
              </li>
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Personal</a>
              </li>
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Wiki</a>
              </li>
              <li>
                <a href="/" class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Forum</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="flex flex-col justify-between pt-5 pb-10 border-t border-deep-purple-accent-200 sm:flex-row">
        <p class="text-sm text-gray-100">
          © Copyright 2020 Lorem Inc. All rights reserved.
        </p>
        <div class="flex items-center mt-4 space-x-4 sm:mt-0">
          <a href="/" class="transition-colors duration-300 text-deep-purple-100 hover:text-teal-accent-400">
            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
              <path
                d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
              ></path>
            </svg>
          </a>
          <a href="/" class="transition-colors duration-300 text-deep-purple-100 hover:text-teal-accent-400">
            <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
              <circle cx="15" cy="15" r="4"></circle>
              <path
                d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
              ></path>
            </svg>
          </a>
          <a href="/" class="transition-colors duration-300 text-deep-purple-100 hover:text-teal-accent-400">
            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
              <path
                d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
              ></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>

  </div>
</template>

<script>

import Info from '../parts/Info.vue'

export default {
  data() {
    return {

    };
  },
  components: {
    Info
  },
  created: function() {

  },
  methods: {

  }
};
</script>
