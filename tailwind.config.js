/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php'],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Manrope', 'sans-serif'],
        'serif': ['Manrope', 'serif'],
        'mono': ['Manrope', 'monospace'],
        'display': ['Manrope', 'cursive'],
        'body': ['Manrope', 'sans-serif'],
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/typography'),
    // ...
  ],
}