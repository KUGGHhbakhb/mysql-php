var aImgs = document.querySelectorAll('.container img');
var aLis = document.querySelectorAll('.container li');
var btnLeft = document.querySelector('.container .left');
var btnRight = document.querySelector('.container .right');
var index = 0;        
var lastIndex = 0;
btnRight.onclick = function(){
    lastIndex = index;
    aImgs[lastIndex].className = '';
    aLis[lastIndex].className = '';
    index++;
    index %= aImgs.length;   
    aImgs[index].className = 'on';
    aLis[index].className = 'active';
}
btnLeft.onclick = function(){        
    lastIndex = index;
    aImgs[lastIndex].className = '';
    aLis[lastIndex].className = '';
    index--;
    if (index < 0) {
        index = aImgs.length - 1;
    }
    aImgs[index].className = 'on';
    aLis[index].className = 'active';
}