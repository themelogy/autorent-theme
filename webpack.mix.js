let mix = require('laravel-mix');
let execSync = require('child_process').execSync;

const themeInfo = require('./theme.json');
let dist = 'public/themes/autorent';
let node_modules = `${__dirname}/node_modules`;
let vendor = `${dist}/vendor`;
let resources = `${__dirname}/resources`;
let resourceAssets = `${resources}/assets`;

if(!isProduction) {
    mix
        .sourceMaps(true, 'source-map')
        .webpackConfig({devtool: 'source-map'});
}

mix.copy(`${__dirname}/node_modules/select2/dist`, `${__dirname}/resources/assets/vendor/select2`)
    .copy(`${__dirname}/node_modules/vue/dist`, `${__dirname}/resources/assets/vendor/vue`)
    .copy(`${__dirname}/node_modules/owl.carousel/dist`, `${__dirname}/resources/assets/vendor/owl.carousel`)
    .copy(`${__dirname}/node_modules/gasparesganga-jquery-loading-overlay/dist`, `${__dirname}/resources/assets/vendor/jquery-loading-overlay`)
    .copy(`${__dirname}/node_modules/jssocials/dist`, `${__dirname}/resources/assets/vendor/jssocials`)
    .copy(`${__dirname}/node_modules/axios/dist`, `${__dirname}/resources/assets/vendor/axios`)
    .copy(`${__dirname}/node_modules/unveil2/dist`, `${__dirname}/resources/assets/vendor/unveil2`);

mix.copy(`${__dirname}/resources/assets`, `${__dirname}/assets`);

mix.minify(`${dist}/js/jquery.js`);

mix.combine([
    `${resourceAssets}/js/bootstrap.js`,
    `${resourceAssets}/js/slimmenu.js`,
    `${resourceAssets}/js/dropit.js`,
    `${resourceAssets}/js/icheck.js`,
    `${resourceAssets}/js/typeahead.js`,
    `${resourceAssets}/js/magnific.js`,
    `${resourceAssets}/js/owl-carousel.js`,
    `${resourceAssets}/js/fitvids.js`,
    `${resourceAssets}/js/gridrotator.js`,
    `${resourceAssets}/vendor/unveil2/jquery.unveil2.min.js`,
], `${dist}/js/vendor.min.js`)

mix.combine([
    `${resourceAssets}/js/bootstrap-datepicker.js`,
    `${resourceAssets}/js/datepicker-locales/bootstrap-datepicker.tr.min.js`,
    `${resourceAssets}/js/bootstrap-timepicker.js`
], `${dist}/js/datetime.min.js`);

mix.combine([
    `${resourceAssets}/vendor/vue/vue.min.js`,
    `${resourceAssets}/vendor/axios/axios.min.js`,
    `${resourceAssets}/vendor/jquery-loading-overlay/loadingoverlay.min.js`,
], `${dist}/js/contact.min.js`)

mix.sass(`${__dirname}/node_modules/bootstrap-sass/vendor/assets/stylesheets/bootstrap.scss`, `${dist}/css`)
    .sass(`${resourceAssets}/sass/styles.scss`, `${dist}/css`);

mix.combine([`${resourceAssets}/js/custom.js`], `${dist}/js/custom.min.js`);

if(!isProduction) {
    mix
        .browserSync({
        proxy: 'otoyeni.local',
        files: [__dirname + '/**/*.*']
    });
} else {
    mix.version();
}