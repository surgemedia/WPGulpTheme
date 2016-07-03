// webpack.config.js
var ExtractTextPlugin = require("extract-text-webpack-plugin");
module.exports = {
    entry: "./assets/js/main.js",
    output: {
        path: __dirname+'/dist/',
        filename: "bundle.js"
    },
     module: {
    loaders: [
     {
                test: /\.scss$/,
                loader: ExtractTextPlugin.extract("style-loader", "css-loader!sass-loader")
      },
      {
                test: /\.(eot|svg|ttf|woff|woff2)$/,
                loader: 'file?name=/fonts/[name].[ext]'
        },
        {
                test: /\.(png|jpg|jpeg|bmp)$/,
                loader: 'file?name=/imgs/[name].[ext]'
        }
        
    ]
  },
  sassLoader: { },
  plugins: [
        new ExtractTextPlugin("bundle.css")
    ]
};
