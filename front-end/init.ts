import Vue from 'vue';
import { translate, Config, AppButton, Loader, CircleImage, ImageLoad, SvgIcon, CloseX } from "phyrus-nuxt";
import locales from "../translations/locales";
import config from "./project.config";

// Initialize config
Config.init(config);

// Translations
translate.initialize(locales, config.defaultLanguage);

// Import global components
const components = { SvgIcon, AppButton, Loader, CircleImage, ImageLoad, CloseX }
Object.entries(components).forEach(([name, component]) => {
    Vue.component(name, (component as any))
});