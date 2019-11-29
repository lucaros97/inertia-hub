<template>
  <main class="flex-1 flex bg-white">
    <div class="flex-1 flex flex-col w-0 mx-auto max-w-6xl overflow-hidden">
      <div class="p-3 flex-1 overflow-y-auto">
      <span class="text-3xl font-bold">Create a new thread</span>
      <form @submit.prevent="submit">
        <div class="w-full my-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
            Title
          </label>
          <input type="text" id="title" placeholder="Title" v-model="createForm.title" required class="appearance-none block w-full text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        </div>
        <div class="w-full my-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="channel_id">
            Choose a channel:
          </label>
          <select name="channel_id" id="channel_id" v-model="createForm.channel_id" required class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <option value="">Select Channel</option>
            <option v-for="channel in channels" :key="channel.id" :value="channel.id">{{ channel.name }}</option>
          </select>
        </div>
        <div class="w-full my-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="body">
            Body
          </label>
          <textarea name="body" id="body" rows="5" v-model="createForm.body" required class="resize-none form-textarea mt-1 block w-full" placeholder="Have something to say?"></textarea>
        </div>
        <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 my-3 rounded">Publish</button>
      </form>
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
      createForm: {
        title: null,
        body: null,
        channel_id: ''
      }
    }
  },
  props: {
    channels: Object
  },
  methods: {
    submit() {
      console.log(this.createForm);
      this.$inertia.post('/threads', this.createForm)
        .then(() => this.createForm = {
          title: null,
          body: null
        });
    }
  }
}
</script>