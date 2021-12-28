setInterval(function(){   
var date = new Date();   
var y = date.getFullYear();	
var M = date.getMonth()+1;	
var d = date.getDate();	
var w = date.getDay();	
switch(w){
	case 1:
	w = '一';
	break;
	case 2:
	w = '二';
	break;
	case 3:
	w = '三';
	break;
	case 4:
	w = '四';
	break;
	case 5:
	w = '五';
	break;
	case 6:
	w = '六';
	break;
	default:
	w = '日';
}
var h = date.getHours();	
	if(h>=0 && h<=9)
		h = '0'+h;
var m = date.getMinutes();	
	if(m>=0 && m<=9)
		m = '0'+m;
var s = date.getSeconds();	
	if(s>=0 && s<=9)
		s = '0'+s;
var currentTime = document.getElementById('currentTime');
currentTime.innerHTML = y+'年'+M+'月'+d+'日'+'  '+'星期'+w+'  '+h+':'+m+':'+s;
},1000);
