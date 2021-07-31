module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  prefix: 'tw-',
  theme: {
    screens: {
      'sm': '200px',
      'md': '768px',
      'lg': '992px',
      'xl': '1200px',
    },
    extend: {
        animation: {
        'pulse-slow' : 'pulse 5s linear infinite',
      },
    }
  }
}