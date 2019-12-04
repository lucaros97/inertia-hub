<template>
  <main class="flex-1 flex">
    <div class="flex-1 flex flex-col w-0 mx-auto max-w-6xl overflow-hidden">
      <div class="p-3 flex-1 overflow-y-auto">
        <article class="mt-3 px-6 pt-4 pb-6 xl:px-10 xl:pt-6 xl:pb-8 bg-white rounded-lg">
          <p class="text-base font-semibold leading-tight xl:text-3xl mb-10">
            <span class="text-gray-900"> {{ thread.title }}</span>
          </p>
          <div class="flex items-center">
            <div>
              <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3.5&amp;w=144&amp;h=144&amp;q=80" alt="" class="h-12 w-12 rounded-full object-cover">
            </div>
            <div class="ml-3 md:items-center md:justify-between">
              <p class="text-base font-medium leading-tight xl:text-lg">
                <span class="text-gray-900"> {{ thread.creator.name }}</span>
              </p>
              <div class="flex items-center">
                <span class="text-sm text-gray-600">
                  created {{ thread.created_at | moment("from", "now") }}
                </span>
              </div>
            </div>
          </div>
          <div class="mt-4 xl:mt-6 text-gray-800 text-sm">
            <p>{{ thread.body }}</p>
          </div>
          <div class="mt-4 xl:mt-6 py-4 text-gray-800 font-semibold text-md border-b border-gray-200">
            <span>{{ thread.replies_count }} Answers</span>
          </div>
        </article>
        <article v-for="reply in thread.replies" :key="reply.id" class="mt-3 px-6 xl:px-10 bg-white rounded-lg">
          <div class="border-b border-gray-200 pt-4 pb-6 xl:pt-6 xl:pb-8">
            <div class="flex items-center">
              <div>
                <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3.5&amp;w=144&amp;h=144&amp;q=80" alt="" class="h-12 w-12 rounded-full object-cover">
              </div>
              <div class="ml-3 md:items-center md:justify-between">
                <p class="text-base font-medium leading-tight">
                  <a href="#">
                    <span class="text-gray-900 xl:text-lg">{{ reply.owner.name }}</span>
                  </a>
                  <span class="text-gray-600 text-sm"></span>
                </p>
                <div class="flex items-center">
                  <span class="text-sm text-gray-600">
                    {{ reply.created_at | moment("from", "now") }}
                  </span>
                </div>
              </div>
            </div>
            <div class="mt-4 xl:mt-6 text-gray-800 text-sm">
              <p>{{ reply.body }}</p>
            </div>
            <div class="mt-4">
              <form @submit.prevent="addFavorite(reply)">
                <div class="mt-4 xl:mt-6 text-gray-800 text-sm font-medium">
                  <button type="submit" class="bg-gray-400 font-bold py-2 px-3 rounded-full" :class="reply.isFavorited ? 'btn-inertia-active' : 'btn-inertia'">
                      <font-awesome-icon icon="heart"></font-awesome-icon>
                  </button>
                  <span>{{ reply.favorites_count }} Likes</span>
                </div>
              </form>
            </div>
          </div>
        </article>
        <div v-if="$page.auth.user" class="mt-3">
          <form @submit.prevent="submit">
            <div class="form-group">
              <textarea name="name" id="body" rows="5" v-model="formReply.body" class="resize-none form-textarea mt-1 block w-full" placeholder="Have something to say?"></textarea>
            </div>
            <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 my-3 rounded">Post</button>
          </form>
        </div>
        <div v-else class="text-center mt-8">
          <span class="font-semibold">Please <inertia-link class="text-blue-600" :href="route('login')">sign in </inertia-link> or <inertia-link class="text-blue-600" :href="route('login')">create an account</inertia-link> if you want to partecipate</span>
        </div>
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
      formReply: {
        body: null
      },
    }
  },
  props: {
    thread: Object,
  },
  beforeMount() {
    console.log(this.thread);
  },
  methods: {
    submit() {
      this.$inertia.post('/threads/' + this.thread.channel.slug + '/' + this.thread.id + '/replies', this.formReply)
        .then(() => this.formReply = {
          body: null
        });
    },
    addFavorite(reply) {
      this.$inertia.post('/replies/'+ reply.id + '/favorites')
        .then(() => {
          this.$inertia.reload();
        });
    }
  }
}
</script>
