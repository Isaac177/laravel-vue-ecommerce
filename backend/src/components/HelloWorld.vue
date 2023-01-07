<script setup>
defineProps({
  msg: {
    type: String,
    required: true
  }
})
</script>

<template>
<!--Design something with tailwind css-->
    <div class="bg-gray-200 p-4 rounded-lg">
        <h1 class="text-2xl font-bold">{{ msg }}</h1>
    </div>
    <div class="bg-white text-2xl">
        Salut !
    </div>
</template>
