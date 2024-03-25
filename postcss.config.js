module.exports = {
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Manrope', 'sans-serif'],
      },
    },
  },
  plugins: [
    require('tailwindcss'),
    require('autoprefixer'),
    process.env.NODE_ENV === 'production' ? require('cssnano')({ preset: 'default' }) : false,
  ],
}