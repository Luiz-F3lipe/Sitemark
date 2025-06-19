/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        // Background
        "background-primary": "#080807",
        "background-secondary": "#110F0E",
        "background-tertiary": "#1C1917",
        "background-blur": "#0B0A09",

        // Content
        "content-primary": "#FFFFFF",
        "content-secondary": "#A3A3A3",
        "content-tertiary": "#696663",
        "content-inverse": "#0A0908",

        // Accent
        "accent-orange": "#ED712E",
        "accent-red": "#EB4B4B",
        "accent-blue": "#55A1F2",
        "accent-green": "#44CB93",
        "accent-purple": "#9D8AFE",

        // Border
        "border-primary": "#161412",
      },
      fontFamily: {
        'onest': ['Onest', 'sans-serif'],
      }
    },
  },
  plugins: [],
}

