import TerserPlugin from "terser-webpack-plugin";
import path from "path";
import { fileURLToPath } from "url";
import { dirname } from "path";

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);
export default {
  entry: {
    index: "./src/js/index.js",
    // other: "./src/js/other.js"
  },
  output: {
    path: path.resolve(__dirname, "../js"),
    filename: "[name].min.js",
    chunkFilename: "[name].min.js",
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: "babel-loader",
      },
      {
        test: /\.css$/,
        use: ["style-loader", "css-loader"],
      },
    ],
  },
  optimization: {
    minimizer: [
      new TerserPlugin({
        extractComments: true,
        terserOptions: {
          output: {
            comments: false,
          },
        },
      }),
    ],
  },
  devtool: "source-map",
  mode: "development",
};
