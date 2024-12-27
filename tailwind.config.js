/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./pages/**/*.{js,ts,jsx,tsx,mdx}",
    "./components/**/*.{js,ts,jsx,tsx,mdx}",
    "./app/**/*.{js,ts,jsx,tsx,mdx}",
  ],
  theme: {
    extend: {
      colors: {
        background: "var(--background)",
        foreground: "var(--foreground)",
        "black": "#000000"
      },
      backgroundImage: {
        hero: "url('public/hero.jpg')",
        'fout': "url('/public/4.png')",
        'vdi': "linear-gradient(to bottom, rgba(0, 0, 0, 0.445),rgba(0, 0, 0, 0.473)), url('/vdi.avif')", // Updated to include gradient
        'orange-black-gradient': 'linear-gradient(to bottom, rgb(249, 115, 22), #000000)',
      }
    },
  },
  plugins: [],
};
