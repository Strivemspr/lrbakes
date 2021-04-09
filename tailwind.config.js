module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
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

    // Extend
    extend: {
      backgroundImage: theme => ({
        'newsletter-pattern': "url('/images/newsletter.jpg')",
        'cakes-pattern': "url('/images/service1.jpg')",
        'cheesecakes-pattern': "url('/images/service2.jpg')",
        'cupcakes-pattern': "url('/images/service3.jpg')",
        'puligi-pattern': "url('/images/service4.jpg')",
        'gallery-pattern': "url('/images/service4.jpg')",
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
        DEFAULT: '#3C3C3C',
        light: '#ACACAC'
      }
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ],
}
