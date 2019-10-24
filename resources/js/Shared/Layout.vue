<template>
  <main>
    <Toolbar></Toolbar>
    <div class="w-full max-w-screen-xl px-6">
      <div class="lg:flex -mx-6">
          <Sidebar></Sidebar>
          <div id="content-wrapper" class="min-h-screen w-full lg:static lg:max-h-full lg:overflow-visible lg:w-3/4 xl:w-4/5">
            <div class="pt-24 pb-16 lg:pt-28 w-full">
              <div class="px-6 xl:px-12 w-full mx-auto lg:ml-0 lg:mr-auto xl:mx-0 xl:w-full">
                <slot />
              </div>
            </div>
          </div>
      </div>
    </div>
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