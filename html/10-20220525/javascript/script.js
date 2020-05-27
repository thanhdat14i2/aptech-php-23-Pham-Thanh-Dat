var a = 1;
function batden(){
    if(a == 1){
        document.getElementById('chu').src="pic_bulbon.gif";
        a = 2;
    }
    else if( a == 2){
        document.getElementById('chu').src="pic_bulboff.gif";
        a = 1;
    }
}