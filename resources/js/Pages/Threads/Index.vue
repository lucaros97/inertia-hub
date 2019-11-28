<template>
  <main class="flex-1 flex-col overflow-auto">
    <div class="max-w-6xl mx-auto">
      <div class="relative p-3 overflow-hidden">
        <span class="text-3xl font-bold">All Questions</span>
        <div class="flex align-items-center justify-between mt-5">
          <div>
            <select @change.prevent="selectChannel" v-model="selectedChannel" class="block rounded- appearance-none bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
              <option value="">All</option>
              <option v-for="channel in channels" :key="channel.id" :value="channel.slug">
                  {{ channel.name }}
              </option>
            </select>
          </div>
          <div>
            <inertia-link :href="route('create_thread')" class="bg-indigo-500 hover:bg-indigo-700 rounded-full text-white font-bold py-2 px-4">
              Create thread
            </inertia-link>
          </div>
        </div>
      </div>
      <div class="p-3 overflow-y-auto">
        <article v-for="thread in threads" :key="thread.id" class="mt-3 px-6 pt-4 pb-6 xl:px-10 xl:pt-6 xl:pb-8 bg-white hover:bg-gray-200 rounded-lg">
          <inertia-link :href="route('showthread', { thread: thread.id, channel: thread.channel.slug })">
            <div class="flex items-center">
              <div>
                <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3.5&amp;w=144&amp;h=144&amp;q=80" alt="" class="h-12 w-12 rounded-full object-cover">
              </div>
              <div class="ml-3 md:items-center md:justify-between">
                <p class="text-base font-semibold leading-tight xl:text-lg">
                  <span class="text-gray-900 hover:underline">{{ thread.title }}</span>
                  <!-- <span class="text-gray-600">wrote</span> -->
                </p>
                <div class="flex items-center">
                  <span class="text-sm text-gray-600">
                    {{ thread.creator.name }} created {{ thread.updated_at | moment("from", "now") }}
                  </span>
                </div>
              </div>
            </div> 
          </inertia-link>
        </article>
      </div>
    </div>
  </main>
</template>
<script>
import Layout from '@/Shared/Layout'
export default {
  layout: Layout,
  data() {
    return {
      selectedChannel: ''
    }
  },
  props: {
    threads: Array,
    channels: Array
  },
  methods: {
    selectChannel() {
      this.$inertia.visit('/threads/'+this.selectedChannel, {});
    }
  }
}
</script>