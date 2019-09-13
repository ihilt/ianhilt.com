import Vue from 'vue'
import Router from 'vue-router'
import Home from './components/Home.vue'
import Work from './components/Work.vue'

Vue.use(Router)

import BlogEntries from './statics/data/blogs.json';

const blogRoutes = Object.keys(BlogEntries).map(section => {
  const children = BlogEntries[section].map(child => ({
    path: child.id,
    name: child.id,
    component: () => import(`./markdowns/${section}/${child.id}.md`)
  }))
  return {
    path: `/${section}`,
    name: section,
    component: () => import('./components/Blog.vue'),
    children
  }
})

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/work',
      component: Work
    },
    ...blogRoutes
  ]
})