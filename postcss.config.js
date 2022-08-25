let tailwindcss = require("tailwindcss")

module.exports = {
  plugins: [
      tailwindcss('./tailwind.config.js'),
      require('postcss-import'),
      require('autoprefixer')
  ]
}
<<<<<<< HEAD

=======
>>>>>>> 959fd2a4a3a9679595c802c7772674a48a37b82e
