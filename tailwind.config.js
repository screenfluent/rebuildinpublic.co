/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php'],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Manrope', 'Inter', 'sans-serif'],
      },
      fontSize: {
        '15': '15px',
      },
      colors: {
        'custom-gray': '#444444',
      }
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/typography'),
    // ...
  ],
}