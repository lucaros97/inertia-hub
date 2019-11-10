<template>
  <main class="h-screen flex flex-col">
    <Toolbar></Toolbar>
    <!-- <div class="w-full max-w-screen-xl px-6"> -->
      <div class="flex-1 flex overflow-hidden">
          <Sidebar></Sidebar>
          <!-- <main class="flex-1 flex bg-gray-200"> -->
            <slot />
          <!-- </main> -->
      </div>
    <!-- </div> -->
  </main>
</template>
<script>
import { InertiaLink } from '@inertiajs/inertia-vue'
import Toolbar from '@/Shared/Toolbar.vue'
import Sidebar from '@/Shared/Sidebar.vue'
export default {
    components: {
        InertiaLink,
        Toolbar,
        Sidebar
    }
}
</script>