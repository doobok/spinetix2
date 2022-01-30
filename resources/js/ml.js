import Vue from 'vue'
import { MLInstaller, MLCreate, MLanguage } from 'vue-multilanguage'

Vue.use(MLInstaller)

export default new MLCreate({
  initial: 'ru',
  languages: [
    new MLanguage('ru').create({
        dark_mode_toggle: 'Переключить тему',


    }),

    new MLanguage('uk').create({
        dark_mode_toggle: 'Переключити тему',

    }),

  ]
})
