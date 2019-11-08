const VueLoaderPlugin = require('vue-loader/lib/plugin');
const path = require('path');
const srcdir = __dirname + '/src';

module.exports = { // webpack에서 중요한 4가지 설정 : entry, module, plugins, output
    mode: 'development', //개발자용
    devtool: 'eval', 
    resolve: {
        extensions: ['.js', '.vue'], // 확장자 처리 -> import시 뒤 확장자 생략 가능
    },
    entry: { //<script>에서 가장 대표가 되는 파일
        app: path.join(srcdir, 'main.js'),
    },
    module: { //webpack의 핵심(rules로 합침)) 
        // 자바스크립트만 처리하는 webpack을 위한 rules
        rules: [{
            test: /\.vue$/, // 정규표현식
            use: 'vue-loader',
        }, {
            test: /\.css$/,
            use:[
                'vue-style-loader',
                'css-loader',
            ]
        }]
    },
    plugins: [ // 부가적인 역할
        new VueLoaderPlugin(),
    ],
    output: {
        filename: '[name].js', // == app.js
        path: path.join(__dirname, 'dist'),
        publicPath: '/dist', // webpack-dev-server hot 속성
    },
};