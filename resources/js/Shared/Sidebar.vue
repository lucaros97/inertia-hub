<template>
  <div id="sidebar" class="fixed inset-0 pt-16 h-full bg-white z-90 w-full border-b border-r -mb-16 lg:-mb-0 lg:static lg:h-auto lg:overflow-y-visible lg:border-b-0 lg:pt-0 lg:w-1/4 lg:block xl:w-1/5 hidden">
      <div id="navWrapper" class="h-full overflow-y-auto scrolling-touch lg:h-auto lg:block lg:relative lg:sticky lg:top-16 bg-white lg:bg-transparent">
        <div id="navGradient" class="hidden"></div>
        <nav id="nav" class="px-6 pt-6 overflow-y-auto text-base lg:text-sm lg:py-24 lg:pl-6 lg:pr-8 sticky?lg:h-(screen-16)">
          <div class="mb-10">
            <inertia-link :href="$route('browse')" class="flex items-center px-3 -mx-2 py-3 rounded-full font-medium text-gray-600 hover:bg-blue-100 hover:text-blue-600">
              <font-awesome-icon icon="compass" size="lg" />
              <span class="ml-3">Browse</span>
            </inertia-link>
            <a href="/components" class="mt-3 lg:mt-1 flex items-center px-3 -mx-2 py-3 rounded-full font-medium text-gray-600 hover:bg-blue-100 hover:text-blue-600">
              <font-awesome-icon icon="question" size="lg" />
              <span class="ml-3">Questions</span>
            </a>
            <a href="/screencasts" data-external="" class="mt-3 lg:mt-1 flex items-center px-3 -mx-2 py-3 rounded-full font-medium text-gray-600 hover:bg-blue-100 hover:text-blue-600">
              <font-awesome-icon icon="check-circle" size="lg" />
              <span class="ml-3">Answers</span>
            </a>
            <a href="/resources" class="mt-3 lg:mt-1 flex items-center px-3 -mx-2 py-3 rounded-full font-medium text-gray-600 hover:bg-blue-100 hover:text-blue-600">
              <font-awesome-icon icon="chart-line" size="lg" />
              <span class="ml-3">Reputation</span>
            </a>
            <a href="/resources" class="mt-3 lg:mt-1 flex items-center px-3 -mx-2 py-3 rounded-full font-medium text-gray-600 hover:bg-blue-100 hover:text-blue-600">
              <font-awesome-icon icon="tags" size="lg" />
              <span class="ml-3">Tags</span>
            </a>
            <a href="/resources" class="mt-3 lg:mt-1 flex items-center px-3 -mx-2 py-3 rounded-full font-medium text-gray-600 hover:bg-blue-100 hover:text-blue-600">
              <font-awesome-icon icon="user-check" size="lg" />
              <span class="ml-3">Following</span>
            </a>
          </div>
        </nav>
      </div>
    </div>
</template>
<script>
export default {
  
}
</script>