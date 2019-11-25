<template>
  <main class="flex-1 flex bg-gray-200">
    <div class="flex-1 flex flex-col w-0 mx-auto max-w-6xl overflow-hidden">
      <div class="p-3 flex-1 overflow-y-auto">
        <article class="mt-3 px-6 pt-4 pb-6 xl:px-10 xl:pt-6 xl:pb-8 bg-white rounded-lg shadow">
          <div class="flex items-center">
            <div>
              <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3.5&amp;w=144&amp;h=144&amp;q=80" alt="" class="h-8 w-8 rounded-full object-cover">
            </div>
            <div class="ml-3 md:items-center md:justify-between">
              <p class="text-base font-semibold leading-tight xl:text-lg">
                <span class="text-gray-900">{{ thread.title }}</span>
                <span class="text-gray-600">wrote</span>
              </p>
              <div class="flex items-center">
                <span class="text-sm text-gray-600">
                  {{ thread.updated_at }}
                </span>
              </div>
            </div>
          </div> 
          <div class="mt-4 xl:mt-6 text-gray-800 text-sm">
            <p>Thanks so much!! Can’t wait to try it out :)</p>
          </div>
        </article>
        <article v-for="reply in thread.replies" :key="reply.id" class="mt-3 px-6 pt-4 pb-6 xl:px-10 xl:pt-6 xl:pb-8 bg-white rounded-lg shadow">
          <div class="flex items-center">
            <div>
              <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3.5&amp;w=144&amp;h=144&amp;q=80" alt="" class="h-8 w-8 rounded-full object-cover">
            </div>
            <div class="ml-3 md:items-center md:justify-between">
              <p class="text-base font-semibold leading-tight">
                <a href="#">
                  <span class="text-gray-900 xl:text-lg">{{ reply.owner.name }}</span>
                </a>
                <span class="text-gray-600 text-sm">{{ reply.created_at | moment("from", "now") }}</span>
              </p>
              <!-- <div class="flex items-center">
                <span class="text-sm text-gray-600">
                  {{ reply.updated_at }}
                </span>
              </div> -->
            </div>
          </div> 
          <div class="mt-4 xl:mt-6 text-gray-800 text-sm">
            <p>{{ reply.body }}</p>
          </div>
        </article>
      </div>
    </div>
  </main>
</template>
<script>
import Layout from '@/Shared/Layout'
export default {
  layout: Layout,
  props: {
    thread: Object,
    // replies: Array
  }
}
</script>