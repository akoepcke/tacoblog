module.exports = {
    theme: {
        extend: {}
    },
    variants: {
        textColor: ['responsive', 'hover', 'focus', 'group-hover'],
  },
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
