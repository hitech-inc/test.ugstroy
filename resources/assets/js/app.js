include("a.js");
var a = 5;
console.log('It is from assets/js');
function include(url) {
    var script = document.createElement('script');
    script.src = url;
    document.getElementsByTagName('head')[0].appendChild(script);
}