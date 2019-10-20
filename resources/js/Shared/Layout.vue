<template>
  <main>
    <div class="bg-gray-200" style="min-height: 640px;">
      <Toolbar></Toolbar>
      <article>
        <slot />
      </article>
    </div>
  </main>
</template>
<script>
import { InertiaLink } from '@inertiajs/inertia-vue'
import Toolbar from '@/Shared/Toolbar.vue'
export default {
    components: {
        InertiaLink,
        Toolbar
    }
}
</script>