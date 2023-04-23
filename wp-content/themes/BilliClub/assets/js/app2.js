var min_inner_height = false;
var max_inner_height = false;

var passiveIfSupported = false;
try {
    window.addEventListener("test", null, Object.defineProperty({}, "passive", { 
        get: function () { 
            passiveIfSupported = { 
                passive: true 
            }; 
        } 
    }));
} catch (err) {}

document.addEventListener('scroll', function (e) {
    var win_inner_h = window.innerHeight;
    if (/iPad|iPhone|iPod/.test(navigator.userAgent)) {
        if (min_inner_height === false || win_inner_h < min_inner_height) {
            min_inner_height = win_inner_h;
        }
        if ((max_inner_height === false || win_inner_h > max_inner_height) && win_inner_h > min_inner_height) {
            max_inner_height = win_inner_h;
        }
        if (max_inner_height !== false && max_inner_height == win_inner_h) {
            addElementClass(document.body, 'safari-toolbars-hidden');
        } else {
            removeElementClass(document.body, 'safari-toolbars-hidden');
        }
    }
}, passiveIfSupported);