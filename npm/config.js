var config = {
  paths: {
    plugins: {
      scripts: {
        out: 'public/asset/js'
      },
      img: {
        in: 'resources/assets/img',
        out: 'public/assets/img'
      },
      bower: {
        in: 'resources/assets/bower',
        out: 'public/vendor'
      },
      vue: {
        in: 'resources/assets/js/vue',
        out: 'public/assets/vue'
      },
      angular: {
        in: '../js/angular',
        out: 'public/assets/angular'
      }
    }
  }
}
module.exports = config;
