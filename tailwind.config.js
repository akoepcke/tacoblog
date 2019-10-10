module.exports = {
  theme: {
    extend: {}
  },
  variants: {},
  plugins: [
    require("tailwind-heropatterns")({
        variants: [],
        patterns: [],
        colors: {
          default: "blue-darkest"
        },
        opacities: {
          default: "0.4"
        }
      })
  ]
}
