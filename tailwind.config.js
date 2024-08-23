/** @type {import('tailwindcss').Config} */
export default {
 content: [
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*' // exclude temporary files
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
