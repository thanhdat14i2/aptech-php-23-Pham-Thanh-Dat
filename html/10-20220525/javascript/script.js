
// function batden(){
//     var a = $('#chu');
//     console.log(a.src);
//     if(a.src == 'http://127.0.0.1:5500/html/10-20220525/javascript/pic_bulboff.gif'){
//         a.src = 'pic_bulbon.gif';
//     } else {
//         a.src = 'pic_bulboff.gif';
//     }
// }



// $imgsrc = $('#first').attr('src');

$(document).ready(function(){
    $("#chu").click(function(){
        $a = $('#chu').attr('src');
        console.log($a)
        if($('#chu').attr('src') == 'pic_bulbon.gif'){
            $(this).attr('src', 'pic_bulboff.gif');
        }else{
            $(this).attr('src', 'pic_bulbon.gif');
        }
    });
  });
// function batden(){
//     var a = document.getElementById('chu');
//     console.log(a.src);
//     if(a.src == 'http://127.0.0.1:5500/html/10-20220525/javascript/pic_bulbon.gif'){
//         a.src = 'pic_bulboff.gif';
//     }else{
//         a.src = 'pic_bulbon.gif';
//     }
// }