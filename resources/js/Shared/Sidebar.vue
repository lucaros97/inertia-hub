<template>
  <div class="z-30 fixed inset-y-0 left-0 w-64 bg-gray-100 border-r overflow-y-auto sm:static sm:block sm:translate-x-0 sm:transition-none -translate-x-full ease-in transition-medium">
    <div class="absolute top-0 left-0 pl-4 pt-3 sm:hidden">
      <button class="block text-gray-600 hover:text-gray-800">
        <svg viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
          <path d="M17.293 18.707a1 1 0 001.414-1.414L13.414 12l5.293-5.293a1 1 0 00-1.414-1.414L12 10.586 6.707 5.293a1 1 0 00-1.414 1.414L10.586 12l-5.293 5.293a1 1 0 101.414 1.414L12 13.414l5.293 5.293z"></path>
        </svg>
      </button>
    </div> 
    <nav class="mt-16 sm:mt-0">
      <div class="mt-8 px-6">
        <h2 class="text-xs font-semibold text-gray-600 uppercase tracking-wide">
          Mailboxes
        </h2> 
        <div class="mt-3">
          <inertia-link :href="route('threads')" class="-mx-3 px-3 py-2 flex items-center justify-between text-sm font-medium bg-gray-200 rounded-lg">
            <span class="inline-flex">
                <font-awesome-icon icon="compass" class="h-6 w-6 fill-current text-gray-500" size="lg" />
                <span class="ml-2 text-gray-900">Browse Threads</span>
            </span> 
            <span class="inline-block w-8 text-center py-1 leading-none text-xs font-semibold text-gray-700 bg-gray-300 rounded-full">
              6
            </span>
          </inertia-link>
          <a href="#" class="mt-2 -mx-3 px-3 py-2 flex items-center justify-between text-sm font-medium hover:bg-gray-200 rounded-lg">
            <span class="inline-flex">
              <font-awesome-icon icon="question-circle" class="h-6 w-6 fill-current text-gray-500" size="lg" />
            <span class="ml-2 text-gray-700">Questions</span>
            </span>
          </a>
          <a href="#" class="mt-2 -mx-3 px-3 py-2 flex items-center justify-between text-sm font-medium hover:bg-gray-200 rounded-lg">
            <span class="inline-flex">
              <font-awesome-icon icon="check-circle" class="h-6 w-6 fill-current text-gray-500" size="lg" />
              <span class="ml-2 text-gray-700">Answers</span>
            </span>
            <span class="inline-block w-8 text-center py-1 leading-none text-xs font-semibold text-gray-700 bg-gray-300 rounded-full">
              2
            </span>
          </a> 
          <a href="#" class="mt-2 -mx-3 px-3 py-2 flex items-center justify-between text-sm font-medium hover:bg-gray-200 rounded-lg">
            <span class="inline-flex">
              <font-awesome-icon icon="chart-line" class="h-6 w-6 fill-current text-gray-500" size="lg" />
              <span class="ml-2 text-gray-700">Reputation</span>
            </span>
            <span class="inline-block w-8 text-center py-1 leading-none text-xs font-semibold text-gray-700 bg-gray-300 rounded-full">
              1
            </span>
            </a> 
            <a href="#" class="mt-2 -mx-3 px-3 py-2 flex items-center justify-between text-sm font-medium hover:bg-gray-200 rounded-lg">
              <span class="inline-flex">
                <font-awesome-icon icon="tags" class="h-6 w-6 fill-current text-gray-500" size="lg" />
                <span class="ml-2 text-gray-700">Tags</span>
              </span>
            </a>
            <a href="#" class="mt-2 -mx-3 px-3 py-2 flex items-center justify-between text-sm font-medium hover:bg-gray-200 rounded-lg">
              <span class="inline-flex">
                <font-awesome-icon icon="user-check" class="h-6 w-6 fill-current text-gray-500" size="lg" />
                <span class="ml-2 text-gray-700">Following</span>
              </span>
            </a>
          </div>
        </div>
        <div class="mt-8 p-6 border-t sm:hidden">
          <div class="flex items-center">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=144&amp;h=144&amp;q=80" alt="" class="h-8 w-8 rounded-full object-cover">
              <span class="ml-4 mr-2 text-sm font-medium text-gray-800">
                Monica White
              </span>
            </div>
            <div class="mt-4">
              <a href="#" class="block text-sm font-medium text-gray-700">
                Settings
              </a>
              <a href="#" class="mt-4 block text-sm font-medium text-gray-700">
                Log out
              </a>
            </div>
        </div>
    </nav>
  </div>
</template>
<script>
export default {
  
}
</script>