module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    fontFamily: {
      'display': ['Helvetica', 'sans-serif'],
      'sans': ['Poppins', 'sans-serif'],
    },
    container: {
      'center': true,
    },
    // colors: theme => ({
    //   ...theme('colors'),
    //   'primary': '#8F6ADD',
    //   'secondary': '#ffed4a',
    //   'danger': '#e3342f',
    //  }),
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
