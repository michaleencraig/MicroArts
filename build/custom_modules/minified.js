exports.task = {
    minified : {
        files: {
            src: [
                '../../ux/js/*.js'
                ],
            dest: '/js/min/'
        },
        options : {
            sourcemap: true,
            allinone: false
        }
    }
};
