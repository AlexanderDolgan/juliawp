'use strict';



var gulp = require('gulp'),
    watch = require('gulp-watch'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    rigger = require('gulp-rigger'),
    cssmin = require('gulp-minify-css'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    rimraf = require('rimraf'),
    plumber = require('gulp-plumber'),
    browserSync = require("browser-sync"),
    reload = browserSync.reload;

var path = {
    juliatheme: { //to
        php: 'juliatheme/',
        js: 'juliatheme/js/',
        css: 'juliatheme/css/',
        img: 'juliatheme/img/',
        fonts: 'juliatheme/fonts/'
    },
    src: { //from
        php: 'src/*.php',
        js: 'src/js/main.js',
        style: 'src/style/main.scss',
        img: 'src/img/**/*.*',
        fonts: 'src/fonts/**/*.*'
    },
    watch: {
        php: 'src/**/*.php',
        js: 'src/js/**/*.js',
        style: 'src/style/**/*.scss',
        img: 'src/img/**/*.*',
        fonts: 'src/fonts/**/*.*'
    },
    clean: './juliatheme'
};

var config = {
    //server: {
    //    baseDir: "./juliatheme"
    //},
    tunnel: true,
    //host: 'localhost',

    //port: 9000,

    //MAMP config
    proxy: "localhost:8888",
    logPrefix: "cats"
};

//таск для сборки php
gulp.task('php:build', function () {
    gulp.src(path.src.php) //Выберем файлы по нужному пути
        .pipe(plumber()) //ошибки
        //.pipe(rigger()) //Прогоним через rigger
        .pipe(gulp.dest(path.juliatheme.php)) //Выплюнем их в папку build
        .pipe(reload({stream: true})); //И перезагрузим наш сервер для обновлений
});

//таск для сборки js
gulp.task('js:build', function () {
    gulp.src(path.src.js)
        .pipe(plumber()) //ошибки
        .pipe(rigger()) 
        .pipe(sourcemaps.init())
        .pipe(uglify()) 
        .pipe(sourcemaps.write('../maps'))
        .pipe(gulp.dest(path.juliatheme.js))
        .pipe(reload({stream: true}));
});

//таск для сборки css
gulp.task('style:build', function () {
    gulp.src(path.src.style) //Выберем наш main.scss
        .pipe(sourcemaps.init()) //То же самое что и с js
        .pipe(plumber()) //ошибки
        .pipe(sass()) //Скомпилируем
        .pipe(prefixer()) //Добавим вендорные префиксы
        .pipe(cssmin()) //Сожмем
        .pipe(sourcemaps.write('../maps'))
        .pipe(gulp.dest(path.juliatheme.css)) //И в build
        .pipe(reload({stream: true}));
});

gulp.task('image:build', function () {
    gulp.src(path.src.img) //Выберем наши картинки
        .pipe(imagemin({ //Сожмем их
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(gulp.dest(path.juliatheme.img)) //И бросим в build
        .pipe(reload({stream: true}));
});


gulp.task('fonts:build', function() {
    gulp.src(path.src.fonts)
        .pipe(gulp.dest(path.juliatheme.fonts))
});


gulp.task('build', [
    'php:build',
    'js:build',
    'style:build',
    'fonts:build',
    'image:build'
    ]);

gulp.task('watch', function(){
    watch([path.watch.php], function(event, cb) {
        gulp.start('php:build');
    });
    watch([path.watch.style], function(event, cb) {
        gulp.start('style:build');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js:build');
    });
    watch([path.watch.img], function(event, cb) {
        gulp.start('image:build');
    });
    watch([path.watch.fonts], function(event, cb) {
        gulp.start('fonts:build');
    });
});

gulp.task('webserver', function () {
    browserSync(config);
});

gulp.task('clean', function (cb) {
    rimraf(path.clean, cb);
});



gulp.task('default', ['build', 'webserver', 'watch']);







