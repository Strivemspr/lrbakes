// const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  mode: 'jit',
  purge: [
    // './resources/**/*.{js,vue,blade.php}',
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/views/*.blade.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    // Rules
    fontFamily: {
      'display': ['Helvetica', 'sans-serif'],
      'sans': ['Poppins', 'sans-serif'],
      'courgette': ['Courgette', 'cursive']
    },
    container: {
      'center': true,
    },
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
    },
    // Extend
    extend: {
      backgroundImage: theme => ({
        //pages background image
        'newsletter-pattern': "url('/images/newsletter.jpg')",
        'gallery-pattern': "url('/images/gallery.jpg')",
        'about-pattern': "url('/images/about.jpg')",
        'contact-pattern': "url('/images/contact.jpg')",
        'contact-details-pattern': "url('/images/contactDetails.jpg')",
        // services
        'cakes-pattern': "url('/images/service1.jpg')",
        'cheesecakes-pattern': "url('/images/service2.jpg')",
        'cupcakes-pattern': "url('/images/service3.jpg')",
        'puligi-pattern': "url('/images/service4.jpg')",
        
      }),
      spacing: {
        '102': '28rem',
        '200': '62rem',
        '95%': '95%',
        '98%': '98%',
      },
      maxWidth: {
        '95%': '95%',
      },
      zIndex: {
        '-10': '-10',
      }
    },
    
    // colors: theme => ({
    //   ...theme('colors'),
    //   'primary': '#8F6ADD',
    //   'secondary': '#ffed4a',
    //   'danger': '#e3342f',
    //  }),

    // Colors
    colors: {
      transparent: 'transparent',
      white: '#FFFFFF',
      primary: {
        DEFAULT: '#8F6ADD', // purple
        light: '#9D77EE',
      }, 
      secondary: {
        DEFAULT: '#FF6060',   // red
      },
      grey: {
        dark: '#EAEAEA',
        DEFAULT: '#EFEFEF',
        light: '#F4F4F4',
      },
      black: {
        DEFAULT: '#3c3c3c',
        light: '#ACACAC'
      }
    },
  },
  variants: {},
  plugins: [
    // require('@tailwindcss/ui'),
  ],
}

