export default {

    title: 'My Phyrus project',

    // Languages
    defaultLanguage: 'en',
    supportedLanguages: [
        'en', 'es'
    ],
  
    mainPage: '/',
    defaultLayout: 'default',
    defaultMiddleware: 'default',
  
    theme: {
      fonts: [
        {
          family: 'Open Sans',
          weights: [
            100,
            400,
            700,
          ],
          applyTo: '*',
        },
      ],
      variables: {
        'primary-color': 'rgb(255, 153, 0)',
        'secondary-color': '#18294F',
        'gray': 'gray',
        'shadow': '0 0 6px rgba(0,0,0,.1)',
        'rounded': '3px'
      }
    },
  
}