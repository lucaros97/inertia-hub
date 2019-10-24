<template>
  <div id="nav" class="bg-white border-b border-gray-200 fixed top-0 inset-x-0 z-100 h-16 items-center">
    <div class="md:px-8">
      <nav class="relative flex flex-wrap items-center justify-between md:py-3">
        <div class="relative z-10 flex-shrink-0 pl-4 py-4 md:p-0">
          <!-- <img class="h-8 w-8" src="/img/example-logo.svg" alt=""> -->
            <a class="md:flex md:items-end" href="/">
                <svg class="block text-purple-600 css-1magkk1" fill="#9f7aea" viewBox="0 0 275.3 50.5" height="25px">
                    <path d="M231.2 16.1h-17.8l17.2 17.2-17.2 17.2h17.8l17.2-17.2z"></path>
                    <path d="M258.1 16.1h-17.8l17.2 17.2-17.2 17.2h17.8l17.2-17.2z"></path>
                    <!-- <path d="M6 15.3h10.3l-6 34.2H0l6-34.2zm.6-9.1C7.2 2.9 10.3 0 13.7 0s5.7 2.8 5.2 6.2c-.5 3.4-3.7 6.2-7.2 6.2s-5.6-3-5.1-6.2zM54.3 28.5l-3.7 21H40.4L43.8 30c.8-4.4-1.6-6.2-4.9-6.2-3.4 0-6.5 2-7.5 6.6L28 49.5H17.8l6-34.2h10.3l-.5 3.2c2.3-2.6 6.2-4.2 10.1-4.2 6.9.1 12.2 5.1 10.6 14.2zM94.5 32.4c-.1.8-.5 2.7-1.1 4.1H68.9c.6 3.8 3.8 4.8 7 4.8 2.9 0 5.2-.8 7.2-2.7l7.2 5.9c-4 4-8.7 6-15 6-11.8 0-18-8.5-16.3-18.7a20.7 20.7 0 0 1 20.5-17.4c9.8 0 16.9 7.6 15 18zm-9.7-3.7c-.3-3.8-3-5.3-6.2-5.3a8.9 8.9 0 0 0-8.3 5.3h14.5zM123.9 14.6l-2 11.6c-4-.6-10.5.8-11.7 7.8l.1-.4-2.8 15.9H97.3l6-34.2h10.3l-1.1 6.2c2.1-4.7 6.6-6.9 11.4-6.9zM137.8 37.3c-.5 3.1 2 3.3 6.6 2.9l-1.6 9.3c-12.3 1.4-16.9-2.7-15.2-12.2l2.1-12.1h-5.5l1.8-9.9h5.4l1.2-6.5 10.8-3.1-1.7 9.6h7.1l-1.8 9.9h-7l-2.2 12.1zM155.3 15.3h10.3l-6 34.2h-10.3l6-34.2zm.6-9.1c.5-3.3 3.7-6.2 7.1-6.2s5.7 2.8 5.2 6.2c-.5 3.4-3.7 6.2-7.2 6.2s-5.7-3-5.1-6.2zM208.1 15.3l-6 34.2h-10.3l.4-2.3a15.5 15.5 0 0 1-10.3 3.3c-11.1 0-15.3-9.6-13.5-18.9 1.6-8.8 8.6-17.2 19.2-17.2 4.5 0 7.7 1.8 9.6 4.6l.6-3.6h10.3zm-13.2 17.2c.9-5.2-1.9-8.4-6.6-8.4a9.5 9.5 0 0 0-9.5 8.3c-.9 5.1 1.8 8.3 6.6 8.3 4.6.1 8.6-3.1 9.5-8.2z"></path> -->
                </svg>
            </a>
        </div>
        <div class="flex-shrink-0 pr-4 md:hidden">
          <button ref="openButton" @click="open" type="button" class="block text-gray-600 focus:outline-none focus:text-gray-900" aria-label="Menu">
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M3 6C3 5.44772 3.44772 5 4 5H20C20.5523 5 21 5.44772 21 6C21 6.55228 20.5523 7 20 7H4C3.44772 7 3 6.55228 3 6Z"/>
              <path d="M3 12C3 11.4477 3.44772 11 4 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H4C3.44772 13 3 12.5523 3 12Z"/>
              <path d="M4 17C3.44772 17 3 17.4477 3 18C3 18.5523 3.44772 19 4 19H20C20.5523 19 21 18.5523 21 18C21 17.4477 20.5523 17 20 17H4Z"/>
            </svg>
          </button>
        </div>
        <div class="hidden md:block md:ml-10 md:flex md:items-baseline md:justify-between md:bg-transparent">
          <div class="lg:absolute inset-0 flex items-center justify-center">
            <inertia-link :href="$route('browse')">
              <span class="text-sm font-medium text-gray-900 hover:text-gray-700">Browse</span>
            </inertia-link>
            <a href="#" class="ml-10 text-sm font-medium text-gray-900 hover:text-gray-700">Discussion</a>
            <!-- <a href="#" class="ml-10 text-sm font-medium text-gray-900 hover:text-gray-700">Partners</a> -->
            <a href="#" class="ml-10 text-sm font-medium text-gray-900 hover:text-gray-700">About</a>
          </div>
          <div class="ml-10 relative flex items-baseline" v-if="!$page.auth">
            <a href="#" class="text-sm font-medium text-gray-900 hover:text-gray-700">Log in</a>
            <a href="#" class="ml-8 px-3 py-2 font-medium text-center text-sm rounded-lg bg-gray-300 text-gray-900 hover:bg-gray-400 focus:outline-none focus:bg-gray-400">Create Account</a>
          </div>
          <div class="flex items-center px-6" v-else>
            <img class="h-10 w-10 rounded-full flex-no-shrink" src="https://images.unsplash.com/photo-1541271696563-3be2f555fc4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=1.75&w=200&h=200&q=80" alt="">
            <div class="ml-4">
              <p class="font-semibold text-gray-900 leading-none">{{ $page.auth.user.first_name + ' ' + $page.auth.user.last_name }}</p>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <div class="md:hidden">
      <!-- Off-canvas menu background overlay -->
      <transition
        enter-class="opacity-0"
        enter-active-class="ease-out transition-medium"
        enter-to-class="opacity-100"
        leave-class="opacity-100"
        leave-active-class="ease-out transition-medium"
        leave-to-class="opacity-0"
        appear
      >
        <div v-show="isOpen" class="z-10 fixed inset-0 transition-opacity">
          <div @click="close" class="absolute inset-0 bg-black opacity-50" tabindex="-1"></div>
        </div>
      </transition>
      
      <!-- Off-canvas menu -->
      <transition
        enter-class="translate-x-full"
        enter-active-class="ease-out transition-slow"
        enter-to-class="translate-x-0"
        leave-class="translate-x-0"
        leave-active-class="ease-in transition-medium"
        leave-to-class="translate-x-full"
        appear
      >
        <div v-show="isOpen" class="z-10 fixed inset-y-0 right-0 max-w-xs w-full bg-white transition-transform overflow-y-auto">
          <div class="relative z-10 bg-white">
            <div :class="isOpen ? 'block' : 'hidden'" class="absolute top-0 right-0 p-4">
              <button ref="closeButton" @click="close" type="button" class="text-gray-600 focus:outline-none focus:text-gray-900" aria-label="Close">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M18.2929 19.7071C18.6834 20.0976 19.3166 20.0976 19.7071 19.7071C20.0976 19.3166 20.0976 18.6834 19.7071 18.2929L13.4142 12L19.7071 5.70711C20.0976 5.31658 20.0976 4.68342 19.7071 4.29289C19.3166 3.90237 18.6834 3.90237 18.2929 4.29289L12 10.5858L5.70711 4.29289C5.31658 3.90237 4.68342 3.90237 4.29289 4.29289C3.90237 4.68342 3.90237 5.31658 4.29289 5.70711L10.5858 12L4.29289 18.2929C3.90237 18.6834 3.90237 19.3166 4.29289 19.7071C4.68342 20.0976 5.31658 20.0976 5.70711 19.7071L12 13.4142L18.2929 19.7071Z"/>
                </svg>
              </button>
            </div>
            <div class="px-4 pt-4 pb-6">
              <img class="h-8 w-8" src="/img/example-logo.svg" alt="">
              <a href="#" class="mt-8 block text-xs font-semibold text-gray-600 uppercase tracking-wider">Products</a>
              <a href="#" class="mt-4 block font-medium text-gray-900 hover:text-gray-700">Checkout</a>
              <a href="#" class="mt-4 block font-medium text-gray-900 hover:text-gray-700">Payments</a>
              <a href="#" class="mt-4 block font-medium text-gray-900 hover:text-gray-700">Billing</a>
              <a href="#" class="mt-4 block font-medium text-gray-900 hover:text-gray-700">Insights</a>
            </div>
            <div class="border-t-2 border-gray-200 px-4 pt-6">
              <a href="#" class="block font-medium text-gray-900 hover:text-gray-700">Marketplace</a>
              <a href="#" class="mt-4 block font-medium text-gray-900 hover:text-gray-700">Partners</a>
              <a href="#" class="mt-4 block font-medium text-gray-900 hover:text-gray-700">About</a>
            </div>
          </div>
          <div class="relative bg-white">
            <div class="px-4 pt-4 pb-6">
              <a href="#" class="block font-medium text-gray-900 hover:text-gray-700">Log in</a>
            </div>
            <div class="p-4">
              <a href="#" class="block px-3 py-3 font-medium text-center bg-gray-300 rounded-lg text-gray-900 hover:bg-gray-400 focus:outline-none focus:bg-gray-400">Create Account</a>
            </div>
          </div>
        </div>
      </transition>
    </div>
  </div>
</template>
<script>
export default {
    el: '#nav',
    data: function () {
      return {
        isOpen: true,
      }
    },
    methods: {
      open() {
        this.isOpen = true
        this.$nextTick(() => {
          this.$refs.closeButton.focus()
        })
      },
      close() {
        this.isOpen = false
        this.$nextTick(() => {
          this.$refs.openButton.focus()
        })
      }
    },
    watch: {
      isOpen: {
        immediate: true,
        handler(isOpen) {
          if (isOpen) {
            document.body.style.setProperty('overflow', 'hidden')
          } else {
            document.body.style.removeProperty('overflow')
          }
        }
      }
    }
}
</script>
<style lang="scss">
  .z-100 {
    z-index: 100 !important;
  }
</style>