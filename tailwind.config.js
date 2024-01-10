/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/**/*.{html,js,php}"],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        primary: '#0094F4',
        secondary: '#C6B6AF',
        tertiary: "#C0C0C0",
        grey: '#E7E7E7',
        dark: '#292929',
        light: "#ECECEB",
      },
      fontFamily: {
        articulat: ["articulat-cf", "sans-serif"],
        "articulat-heavy": ["articulat-heavy-cf", "sans-serif"],
        britannic: ["Britannic", "sans-serif"],
      },
      fontSize: {
        64: "64px"
      },
    },
  },
  plugins: [],
}

