<template>
  <main class="flex-1 flex bg-gray-200">
    <div class="flex-1 flex flex-col w-0 mx-auto max-w-6xl overflow-hidden">
      <div class="p-3 flex-1 overflow-y-auto">
      <span class="text-3xl font-bold">All Questions</span>
        <article class="mt-3 px-6 pt-4 pb-6 xl:px-10 xl:pt-6 xl:pb-8 bg-white rounded-lg shadow">
          <div class="flex items-center">
            <div>
              <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3.5&amp;w=144&amp;h=144&amp;q=80" alt="" class="h-8 w-8 rounded-full object-cover">
            </div>
            <div class="ml-3 md:items-center md:justify-between">
              <p class="text-base font-semibold leading-tight xl:text-lg">
                <span class="text-gray-900">Joe Armstrong</span>
                <span class="text-gray-600">wrote</span>
              </p>
              <div class="flex items-center">
                <span class="text-sm text-gray-600">
                  Yesterday at 7:24 AM
                </span>
              </div>
            </div>
          </div> 
          <div class="mt-4 xl:mt-6 text-gray-800 text-sm">
            <p>Thanks so much!! Can’t wait to try it out :)</p>
          </div>
        </article>
        <article class="mt-3 px-6 pt-4 pb-6 xl:px-10 xl:pt-6 xl:pb-8 bg-white rounded-lg shadow">
          <div class="flex items-center">
            <div>
              <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3.5&amp;w=144&amp;h=144&amp;q=80" alt="" class="h-8 w-8 rounded-full object-cover">
            </div>
            <div class="ml-3 md:items-center md:justify-between">
              <p class="text-base font-semibold leading-tight xl:text-lg">
                <span class="text-gray-900">Joe Armstrong</span>
                <span class="text-gray-600">wrote</span>
              </p>
              <div class="flex items-center">
                <span class="text-sm text-gray-600">
                  Yesterday at 7:24 AM
                </span>
              </div>
            </div>
          </div> 
          <div class="mt-4 xl:mt-6 text-gray-800 text-sm">
            <p>Thanks so much!! Can’t wait to try it out :)</p>
          </div>
        </article>
      </div>
    </div>
  </main>
</template>

<script>
import Layout from '@/Shared/Layout'
export default {
  layout: Layout
}
</script>