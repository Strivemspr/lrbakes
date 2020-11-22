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
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ],
}
