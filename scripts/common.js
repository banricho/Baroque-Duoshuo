function toggle(e) {
    var _arguments = arguments;

    (function(count) {
        e.addEventListener("click", function() {
            count >= _arguments.length && (count = 1);
            _arguments[count++ % _arguments.length].call(e);
        }, false)
    })(1);
}

window.onload = function() {
    var btn = document.getElementById("toggle"),
        nav = document.getElementById("nav");

    toggle(btn, function() {
        btn.className += "show-btn";
        nav.className += "show-menu";
    }, function() {
        btn.className = "";
        nav.className = "";
    });
};
