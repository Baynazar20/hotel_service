$('.togg').click(function(){
		$('#we').toggleClass("hidden_active");
		});

		$('.gor').click(function(){
		$('#sb').toggleClass("hidden_active");
		});



		$('[data-btn_id]').click(function(){
			var btn_id=this.getAttribute("data-btn_id");
			var item_boxxx=$("#item_box");
			var item_div=$('*[data-box_id="'+btn_id+'"]');

			var priceee=item_div.find("p").eq(1).html();

			item_boxxx.append('<div class="box_item" data-box_div_id="'+btn_id+'">'+
								'<div><img src="'+item_div.find("img").attr("src")+'"></div>'+
								'<div>'+item_div.find("p").eq(0).html()+'</div>'+
								'<div>'+priceee+'</div>'+
								'<div><p data-price="add-'+btn_id+'">+</p><p data-price="p-'+btn_id+'">1</p><p data-price="rmv-'+btn_id+'">-</p></div>'+
								'<p data-box_box_x="'+btn_id+'">-</p>'+
							'</div>');

			var prs=priceee.substr(0,priceee.length-6);
			var price=Number($('*[data-jemi="price"]').html())+Number(prs);
			var count=Number($('*[data-jemi="count"]').html())+1;
			$('*[data-jemi="price"]').html(price);
			$('*[data-jemi="count"]').html(count);

		});	

		$(document).on('click','[data-box_box_x]',function(){
			var id=this.getAttribute("data-box_box_x");
			var item_div=$('*[data-box_id="'+id+'"]');
			var count=$('*[data-price="p-'+id+'"]').html();
			var priceee=item_div.find("p").eq(1).html();
			var prs=priceee.substr(0,priceee.length-6);

			var all_count=Number(prs*count);

			$('*[data-box_div_id="'+id+'"]').remove();


			var jemi_pr=$('*[data-jemi="price"]').html();
			var jemi_co=$('*[data-jemi="count"]').html();

			
			$('*[data-jemi="price"]').html(Number(jemi_pr-all_count));
			$('*[data-jemi="count"]').html(Number(jemi_co-count));


		});


		$(document).on('click','[data-price]',function(){
			var id=this.getAttribute("data-price");
							var arr=id.split("-");

			var item_div=$('*[data-box_id="'+arr[1]+'"]');
			var priceee=item_div.find("p").eq(1).html();
			var prs=priceee.substr(0,priceee.length-6);

			if(arr[0]=="add"){
				var price=Number($('*[data-price="p-'+arr[1]+'"]').html())+1;
				$('*[data-price="p-'+arr[1]+'"]').html(price);

				var count=Number($('*[data-jemi="count"]').html())+1;
				var price=Number($('*[data-jemi="price"]').html())+Number(prs);
			}else if(arr[0]=="p"){

			}else if(arr[0]=="rmv"){
				var count1=Number($('*[data-price="p-'+arr[1]+'"]').html())-1;
				if(count1>=1){
					$('*[data-price="p-'+arr[1]+'"]').html(count1);
					var count=Number($('*[data-jemi="count"]').html())-1;
					var price=Number($('*[data-jemi="price"]').html())-Number(prs);
				}
			}

			$('*[data-jemi="price"]').html(price);
			$('*[data-jemi="count"]').html(count);

		});

$(document).ready(function(){
        //Скрыть PopUp при загрузке страницы    
        PopUpHide1();
        PopUpHide2();
		
    });
    //Функция отображения PopUp
    function PopUpShow1(){
        $("#popup1").show();
    }
    //Функция скрытия PopUp
    function PopUpHide1(){
        $("#popup1").hide();
    }
		
		function PopUpShow2(){
        $("#popup2").show();
    }
    //Функция скрытия PopUp
    function PopUpHide2(){
        $("#popup2").hide();
    }
	
	function PopUpShow3(){
        $("#popup3").show();
    }
    //Функция скрытия PopUp
    function PopUpHide3(){
        $("#popup3").hide();
    }

