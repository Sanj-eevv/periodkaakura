/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './index.php',
    './404.php',
    './archive.php',
    './comments.php',
    './footer.php',
    './header.php',
    './page.php',
    './search.php',
    './sidebar.php',
    './single.php',
    './template-parts/**/*.{php,js}',
    './templates/**/*.{php,js}',
    './inc/**/*.{php,js}',
  ],
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '1024px',
      xl: '1272px',
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
      },
    },
    extend: {
      colors: {
        'light-red': 'var(--color-light-red)',
      },
    },
  },
  plugins: [],
}
