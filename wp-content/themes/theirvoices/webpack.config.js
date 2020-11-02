const path = require("path");

const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");

module.exports = {
  entry: [
    "./src/js/app.js",
    "./src/scss/app.scss"
  ],
  output: {
    filename: "./js/main.[hash].js",
    path: path.resolve(__dirname, "./build")
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader"
        }
      },
      {
        test: /\.(sass|scss)$/,
        use: [
          MiniCssExtractPlugin.loader,
          "css-loader",
          "postcss-loader",
          'resolve-url-loader',
          "sass-loader"
        ]
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
      filename: "./css/main.[hash].css"
    }),
    new CleanWebpackPlugin(),
	]
};
