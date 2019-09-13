<template>
  <div id="app" class="bg-gray-200 h-full">
    <nav class="py-4 px-6 bg-gray-100 shadow">
      <div class="container flex mx-auto">
        <router-link to="/">
          <img v-if="$route.path == '/'" class="border-2 border-gray-400 rounded-full w-24 mr-8" alt="Avatar" src="https://avatars1.githubusercontent.com/u/279639">
          <img v-else class="border-2 border-gray-400 rounded-full w-12 mr-8" alt="Avatar" src="https://avatars1.githubusercontent.com/u/279639">
        </router-link>
        <ul class="text-black -mx-4 self-center">
          <li class="inline-block px-4"><router-link class="link font-bold opacity-50 hover:opacity-100" to="work">Work</router-link></li>
          <li class="inline-block px-4"><router-link class="link font-bold opacity-50 hover:opacity-100" to="articles">Articles</router-link></li>
        </ul>
      </div>
    </nav>
    <router-view />
  </div>
</template>

