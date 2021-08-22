import { mount } from '@vue/test-utils'

import index from './index.vue'

describe('index page', () =>{ 
  const wrapper = mount(index)
  describe('app title', () => {
    const element = wrapper.find('.title')
    it('displays app title', () => {
      expect(element.text()).toEqual('my-heroku-nuxt-app')
    })
  })
  describe('links', () => {
    const links = wrapper.find('.links')
    describe('nuxtjs', () => {
      it('contains link with correct text', () => {
        const link = links.find('[href="https://nuxtjs.org/"]')
        expect(link.text()).toEqual('Documentation')
      })
    })
    describe('github', () => {
      it('contains link with correct text', () => {
        const link = links.find('[href="https://github.com/nuxt/nuxt.js"]')
        expect(link.text()).toEqual('GitHub')
      })
    })
  })
})
