const path = require("path");

const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
const CopyPlugin = require("copy-webpack-plugin");

module.exports = {
  entry: {
    main: ["./src/js/app.js", "./src/scss/app.scss"],
    //Will be imported only if about section is displayed --- to TEST
    // aboutSection: "./src/js/about.js",
  },
  output: {
    filename: "./js/[name].js",
    path: path.resolve(__dirname, "./build"),
    publicPath: '/wp-content/themes/culm/build/'
  },
  module: {
    rules: [
      {
        test: /\.(sass|scss)$/,
        use: [
          MiniCssExtractPlugin.loader,
          "css-loader",
          "postcss-loader",
          "sass-loader"
        ]
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/i,
        type: 'asset/resource',
      },
      {
        test: /\.svg/,
        use: {
          loader: 'svg-url-loader'
        }
      }
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "./css/main.css"
    }),
    new CleanWebpackPlugin(),
    new BrowserSyncPlugin({
      host: 'localhost',
      port: 3000,
      files: ["./build/js/*.js", "./build/css/*.css", "./views/*.twig","./views/modules/*.twig"],
      proxy: "culm.test"
    }),

  ]
};
