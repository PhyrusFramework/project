import Vue from 'vue';
import { translate, Config, AppButton, Loader, CircleImage, ImageLoad, SvgIcon, CloseX, ajax } from "phyrus-nuxt";
import locales from "../translations/locales";
import config from "./project.config";

// Initialize config
Config.init(config);

// Set URL for API calls
ajax.baseURL = config.api_url;

// Translations
translate.initialize(locales, config.defaultLanguage);

// Import global components
const components = { SvgIcon, AppButton, Loader, CircleImage, ImageLoad, CloseX }
Object.entries(components).forEach(([name, component]) => {
    Vue.component(name, (component as any))
});