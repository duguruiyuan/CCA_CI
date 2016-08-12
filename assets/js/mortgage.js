var money_ct = 0;
var days_ct = 0;

$(function(){
	var winheight = $(window).height();
	var li_height = 0.2*winheight*0.33;
	$('li').css('height',li_height+'px');
	$('li').css('line-height',li_height+'px');
	$('.content_main').css('height',winheight);
	$('.money,.days').bind('input propertychange',function(){
		lxjs();
	});
	$('.dqtab').on('click',function(){
		
		$('.dqtab').each(function(){
			$('.dqtab').attr('class','dqtab');
		});
		$(this).attr('class','dqtab active');

		var click_id = $(this).attr('id');

		if(click_id == 'hq'){
			$('.hqcc').css('display','block');
			$('.dqcc').css('display','none');
			$('.tab_flag').val('hq');
		}else{
			$('.hqcc').css('display','none');
			$('.dqcc').css('display','block');
			$('.tab_flag').val('dq');
		}
		lxjs();
	});
	$('.dqxz').change(function(){
		var a = $(this).val();
		$('.ll').html(a);

		var money = $('.money').val();
		if(money !== null || money !== undefined || money !== ''){
			var ll = parseFloat($('.ll').html());
			var m = parseFloat(money);
			
			var tt = dq_time(ll);
			if(tt == 60){
				ll = 2.75; 
			}
			var dlx = parseFloat(money*ll*tt/12/100);
			var dlx = dlx.toFixed(2);
			var dze = (parseFloat(dlx)+m).toFixed(2);
			$('.dq_lx').html(dlx);
			$('.dq_bxhj').html(dze);
		}
	});
});
function str_len(str){
	var temp = str.split("");
	var i = '';
	for(x in temp){
		if(!isNaN(temp[x])) i+=temp[x];
	}
	return i;
}

function dq_time(ll){

	var tt = 0;
	if(ll == 1.10){
		tt = 3;
	}else if(ll == 1.30){
		tt = 6;
	}else if(ll == 1.50){
		tt = 12;
	}else if(ll == 2.10){
		tt = 24;
	}else if(ll == 2.75){ 
		tt = 36;
	}else{
		tt = 60;
	}
	return tt;
}

function lxjs(){
	var money = $('.money').val();
	var days = $('.days').val();
	var tab_flag = $('.tab_flag').val();
	m_ct = money.length;
	d_ct = days.length;
	if(days == 0 || isNaN(parseInt(days))){
		$('.days').val('');
	}
	if(money == 0 || isNaN(parseFloat(money))){
		$('.money').val('');
	}
	if(str_len(money).length%3 == 0 && m_ct>money_ct){
		// money += ',';
		// $('.money').val(money);
	}
	money_ct = m_ct;
	days_ct = d_ct;

	if((money !== null || money !== undefined || money !== '') && !isNaN(parseFloat(money)) && (days !== null || days !== undefined || days !== '') && !isNaN(parseInt(days))){
		var money = str_len(money);
		if(!isNaN(money)){
			var a = parseFloat((days/365)*money*0.0035);
			var b = a.toFixed(2);
			$('.hq_lx').html(b);
			$('.hq_bxhj').html(parseFloat(b)+parseFloat(money));
		}
	}
	if(((money !== null || money !== undefined || money !== '') && !isNaN(parseFloat(money))) && (tab_flag == 'dq')){
		alert('定期'+money);
		var ll = parseFloat($('.ll').html());
		var m = parseFloat(money);

		var tt = dq_time(ll);
		if(tt == 60){
			ll = 2.75; 
		}

		var dlx = parseFloat(money*ll*tt/12/100);
		var dlx = dlx.toFixed(2);
		var dze = (parseFloat(dlx)+m).toFixed(2);

		$('.dq_lx').html(dlx);
		$('.dq_bxhj').html(dze);
	}
}