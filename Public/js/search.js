$(function(){

	$(document).on('click','#searchnumber',function(){

			var expressnumber = document.getElementById("expressnumber").value;

			
			var param = {
				expressnumber: expressnumber
			};
			$.ajax({
				url: '/express/index.php/Admin/Search/search',
				type: 'POST',
				dataType: 'json',
				data: param,
				success: function(data){
					console.log(data);
					if(data.code == 0){
						layer.msg('成功',{icon: 1});
						window.location = '/express/index.php/Admin/Search/index?'+'search='+data.obj;
						
					}
				},
				error: function(xhr){
					console.log(xhr);
				}
			});
	});

	$(document).on('click','#addgoods',function(){

		    var goodsId = document.getElementById("goods_id").value;
			var money = document.getElementById("money").value;
			var count = document.getElementById("count").value;
			var orderNumber = document.getElementById("order_number").value;
			var price = money*count;
			var param = {
				goodsId: goodsId,
                price: price,
				count: count,
				money: money,
				orderNumber: orderNumber
			};
			$.ajax({
				url: '/goods/index.php/Home/Inorder/goodsAdd',
				type: 'POST',
				dataType: 'json',
				data: param,
				success: function(data){
					console.log(data);
					if(data.code == 0){
						layer.msg('添加成功',{icon: 1});
						var html = template('item-template',data);
						$('#goodsdetail').append(html);				        
					}					
				},
				error: function(xhr){
					console.log(xhr);
				}
			});
    });

    	$(document).on('click','.inner_btn',function(){
		    var $tr = $(this).parents('tr');
		    var id = $tr.attr('data-id');
		    layer.confirm('确认删除？', {
		  	btn: ['是的','取消'] //按钮
		    }, function(){
			var param = {
				id: id
			};
			$.ajax({
				url: '/goods/index.php/Home/Inorder/goodsDelete',
				type: 'POST',
				dataType: 'json',
				data: param,
				success: function(data){
					console.log(data);
					if(data.code == 0){
						layer.msg('删除成功', {icon: 1});
						$tr.remove();
					}
				},
				error: function(xhr){
					console.log(xhr);
				}
			});
		  	
		}, function(){
		  	//layer.msg('取消');
		});
    });
});
