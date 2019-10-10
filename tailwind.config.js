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
          default: "blue-900"
        },
        opacities: {
          default: "0.4"
        }
      })
  ]
}
