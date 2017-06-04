var rqkjCalendar;
var nowtrigger,nowDay;
$(document).ready(function(){
	if($.fn.calendar=="undefind"){
		alert("未找到calendar.js或者calendar.js在riqi.js下方，无法使用日期控件");
	}else{
//		setTimeout(function(){
//			rqkjCalendar.hide();
//		},5000);
	}
	
	$(document).on("click","#ca .qx",function(){
		if(typeof(qxrqkjCallback)=="function"){
			qxrqkjCallback(nowtrigger);
		}else{
			gbrqkj();
			$(".black_overlay").hide();

		}
	});
	
	$(document).on("click","#ca li",function(){
		if(typeof(rqkjCallback)=="function"){
			rqkjCallback(nowtrigger,nowDay);
		}else{
			if(nowDay){
				$(nowtrigger).val(nowDay.format("yyyy-mm-dd"));
				gbrqkj();
			$(".black_overlay").hide();
				
			}
		}
	});
	
	$(".tcrqkj").bind("click",function(){
		nowtrigger = this;
		nowDay = null;
		tcrqkj();
		$('#demo').slideDown(100);
		$(".black_overlay").css({"z-index":"2"}).show();
		$('.tcrqkj').blur();
		//$('#demo').slideUp();	
	});
	
	$(".black_overlay").bind("click",function(){
		gbrqkj();
		$(".black_overlay").hide();

	});
	
	$(".tcrqkj").attr("readonly","readonly");
});

//弹出日期控件
function tcrqkj(){
	var jd = "<div id='demo' class='hidden'><div id='ca'></div></div>"
	$(document.body).append(jd);
	var today = new Date();
	var threeDay = new Date(today.getTime()+3*24*60*60*1000);
	rqkjCalendar = $('#ca').calendar({
        width: '14rem',
        height: '15rem',
        data: [
			{
			  date: '2016/12/24',
			  value: 'Christmas Eve'
			},
			{
			  date: '2016/12/25',
			  value: 'Merry Christmas'
			},
			{
			  date: '2017/01/01',
			  value: 'Happy New Year'
			}
		],
		selectedRang: [threeDay,null],
        onSelected: function (view, date, data) {
//            console.log('view:' + view)
//            console.log('data:' + (data || 'None'));
        	nowDay = date;
        },
        trigger:null
    });
}

//关闭日期控件
function gbrqkj(){
	$("#demo").slideUp("normal",function(){
		$("#demo").remove();
		$(".black_overlay10").removeClass('five').hide();
	});
}