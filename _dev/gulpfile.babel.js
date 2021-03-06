'use strict';

// import
import gulp from 'gulp';
import source from 'vinyl-source-stream';
import sass from 'gulp-sass';
import sassGlob from 'gulp-sass-glob';
import concat from 'gulp-concat';
import jsonSass from 'gulp-json-sass';
import pleeease from 'gulp-pleeease';
import browserify from 'browserify';
import babelify from 'babelify';
import readConfig from 'read-config';
import watch from 'gulp-watch';
import validate from 'gulp-html-validator';

// const
const SRC = './';
const CONFIG = './config';
const HTDOCS = '..';
const BASE_PATH = '/';
const DEST = `${HTDOCS}${BASE_PATH}`;

// css
gulp.task('sass', () => {
    const config = readConfig(`${CONFIG}/pleeease.json`);
    return gulp.src(`${SRC}/sass/style.scss`)
        .pipe(sassGlob())
        .pipe(sass())
        .pipe(pleeease(config))
        .pipe(gulp.dest(`${DEST}`));
});

gulp.task('css', gulp.series('sass'));

// js
gulp.task('browserify', () => {
    return browserify(`${SRC}/js/script.js`)
        .transform(babelify)
        .bundle()
        .pipe(source('script.js'))
        .pipe(gulp.dest(`${DEST}/js`));
});

gulp.task('js', gulp.parallel('browserify'));


gulp.task('sassjson', () => {
    return gulp
        .src(`${CONFIG}/common.json`)
        .pipe(jsonSass({
            delim: '-',
            sass: false,
            ignoreJsonErrors: true,
            escapeIllegalCharacters: true,
            prefixFirstNumericCharacter: true,
            firstCharacter: '_'
        }))
        .pipe(concat(`_config.scss`))
        .pipe(gulp.dest(`${SRC}/sass/`));
});

// serve
gulp.task('watch', () => {
    watch([`${SRC}/sass/**/*.scss`], gulp.series('sass'));
    watch([`${CONFIG}/common.json`], gulp.series('sassjson'));
    watch([`${SRC}/js/**/*.js`], gulp.series('browserify'));
});

gulp.task('serve', gulp.series('watch'));

// default
gulp.task('build', gulp.parallel('css','js','sassjson'));
gulp.task('default', gulp.series('build', 'serve'));
