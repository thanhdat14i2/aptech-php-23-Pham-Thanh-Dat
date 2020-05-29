
function batden(){
    var a = document.getElementById('chu');
    console.log(a.src);
    if(a.src == 'http://127.0.0.1:5500/html/10-20220525/javascript/pic_bulboff.gif'){
        a.src = 'pic_bulbon.gif';
    } else {
        a.src = 'pic_bulboff.gif';
    }
}