import config from './project.config';

let families = {}
for(let family of config.theme.fonts) {
  families[family.family] = family.weights;
}

export default {
  ssr: false,
  target: 'static',

  // Global page headers
  head: {
    title: config.title,
    htmlAttrs: {
      lang: config.defaultLanguage
    },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
      { name: 'format-detection', content: 'telephone=no' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },

  googleFonts: {
    preconnect: true, 
    preload: true, 
    families: families
  },

  css: ['phyrus-nuxt/src/css/index.css', 'global.scss'],

  plugins: ['init.ts'],

  components: false,

  buildModules: [
    '@nuxt/typescript-build',
    '@nuxtjs/google-fonts'
  ],

  generate: {
    dir: '../www'
  },

  modules: [
  ],

  build: {
    postcss: null,

    extend(config, { isDev, isClient }) {
      config.performance.hints = false;
      config.performance.maxEntrypointSize = 2048000;
    }
  }
}
