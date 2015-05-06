function toggle(e) {
    var _arguments = arguments;

    (function(count) {
        e.addEventListener('click', function() {
            count >= _arguments.length && (count = 1);
            _arguments[count++ % _arguments.length].call(e);
        }, false)
    })(1);
}

function menu(e) {
    var link = e.getElementsByTagName('a'),
        mh = link.length * 40;
    e.style.height = mh + 'px';
}

window.onload = function() {
    var btn = document.getElementById('toggle'),
        nav = document.getElementById('nav');

    toggle(btn, function() {
        btn.className = 'show-btn';
        menu(nav);
    }, function() {
        btn.className = null;
        nav.style.height = null;
    });
};
