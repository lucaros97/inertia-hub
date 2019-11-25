<template>
  <article class="mt-3 px-6 pt-4 pb-6 xl:px-10 xl:pt-6 xl:pb-8 bg-white rounded-lg shadow">
    <div class="flex items-center">
      <div>
        <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3.5&amp;w=144&amp;h=144&amp;q=80" alt="" class="h-8 w-8 rounded-full object-cover">
      </div>
      <div class="ml-3 md:items-center md:justify-between">
        <p class="text-base font-semibold leading-tight">
          <a href="#">
            <span class="text-gray-900 xl:text-lg">{{ reply.owner.name }}</span>
          </a>
          <span class="text-gray-600 text-sm">{{ reply.created_at }}</span>
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
</template>
<script>
export default {
    props: {
        reply: Object
    }
}
</script>