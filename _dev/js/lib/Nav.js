export default class Nav {
    constructor(opts = {}) {
        let self = this;
        $.each(opts, (key) => {
            self[key] = opts[key];
        })
    }
};
