function toggle(btn) {
    var _arguments = arguments;
    (function(count) {
        btn.onclick = function() {
            count >= _arguments.length && (count = 1);
            _arguments[count++ % _arguments.length].call(btn);
        }
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
