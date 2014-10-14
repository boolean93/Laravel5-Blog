var util = require('gulp-util');

var config = {

    // All user requested tasks from the Gulpfile.
    tasks: [],

    // Are we in production mode?
    production: !! util.env.production,

    // The default watchers and paths.
    watchers: {
        default: function() {
            var baseDir = config.preprocessors.baseDir;

            return {
                sass: baseDir + '/**/*.+(sass|scss)',
                less: baseDir + '/**/*.less',
                coffee: baseDir + '/**/*.coffee',
                routeScanning: 'app/**/*Controller.php',
                eventScanning: 'app/**/*.php',
                version: config.versioning.src
            }
        },

        tdd: function() {
            var suites = config.testSuites;

            return {
                routeScanning: 'app/**/*Controller.php',
                phpunit: suites.phpunit.src + suites.phpunit.search,
                phpspec: suites.phpspec.src + suites.phpspec.search
            }
        }
    },

    // The defaults for any preprocessors.
    preprocessors: {
        baseDir: 'resources/assets/',

        less: {
            src: '/less',
            search: '/**/*.less',
            output: 'public/css'
        },

        sass: {
            src: '/sass',
            search: '/**/*.+(sass|scss)',
            output: 'public/css'
        },

        coffee: {
            src: '/coffee',
            search: '/**/*.coffee',
            output: 'public/js'
        }
    },

    // The defaults for any test suites.
    testSuites: {
        phpunit: {
            src: 'tests',
            search: '/**/*Test.php'
        },

        phpspec: {
            src: 'spec',
            search: '/**/*Spec.php'
        }
    },

    // Optional file versioning.
    versioning: {
        buildDir: 'public/build',
        src: []
    },

    // Scripts and styles to combine.
    concatenate: {
        css: {},
        js: {}
    },

    // The default CSS output directory.
    cssOutput: 'public/css',

    // The default JS output directory.
    jsOutput: 'public/js'
};

config.preprocessor = function(name, src, output) {
    var preprocessor = this.preprocessors[name];
    var path = config.preprocessors.baseDir + name;

    if (src) {
        preprocessor.src = prefixDirToFiles(path, src);
    } else {
        preprocessor.src = path + '/' + this.preprocessors[name].search;
    }

    if (output) preprocessor.output = output;

    return queueTask(name);
};

config.sass = function(src, output) {
    return this.preprocessor('sass', src, output);
};

config.less = function(src, output) {
    return this.preprocessor('less', src, output);
};

config.coffee = function(src, output) {
    return this.preprocessor('coffee', src, output);
};

config.testSuite = function(name, src) {
    if (src) this.testSuites[name].src = src;

    return queueTask(name);
};

config.phpUnit = function(src) {
    return this.testSuite('phpunit', src);
};

config.phpSpec = function(src) {
    return this.testSuite('phpspec', src);
};

config.combine = function(type, files, baseDir, output) {
    var concatName = 'all.min.' + type;
    var output = output || this[type + 'Output'];

    if (output.indexOf('.' + type) > -1) {
        var pathFragments = output.split('/');

        concatName = pathFragments.pop();
        output = pathFragments.join('/');
    }

    this.concatenate[type].src = prefixDirToFiles(baseDir || 'public', files);
    this.concatenate[type].to = output;
    this.concatenate[type].concatName = concatName;

    return this;
};

config.scripts = function(scripts, baseDir, output) {
    queueTask('scripts');

    return this.combine('js', scripts, baseDir, output);
};

config.styles = function(styles, baseDir, output) {
    queueTask('styles');

    return this.combine('css', styles, baseDir, output);
};

config.version = function(assets, buildDir) {
    if (buildDir) this.versioning.buildDir = buildDir;

    this.versioning.src = prefixDirToFiles('public', assets);

    return queueTask('version');
};

config.routes = function() {
    return queueTask('routeScanning');
};

config.events = function() {
    return queueTask('eventScanning');
};

var queueTask = function(task) {
    config.tasks.push(task);

    return config;
};

var prefixDirToFiles = function(dir, files) {
    if ( ! Array.isArray(files)) files = [files];

    return files.map(function(file) {
        return dir + '/' + file.replace(dir, '');
    });
};

module.exports = config;
