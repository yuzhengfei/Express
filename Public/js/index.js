$(function(){
	$('.submit_btn').click(function(e){
		e.preventDefault();
		var name = $('.name').val();
		var password = $('.password').val();
		if(name == '' || password == ''){
			layer.msg('用户名密码不能为空');
			return;
		}
		$.ajax({
			url: '/express/index.php/Admin/Index/login',
			type: 'POST',
			dataType: 'json',
			data: {
				name: name,
				password: password
			},
			success: function(data){
				console.log(data);
				if(data.code == 0){
					window.location = '/express/index.php/Admin/Listexpress/index';
				}else{
					layer.msg('用户名或密码错误');
				}
			},
			error: function(xhr){				
				console.log(xhr);
			}
		});
	});

	$(document).on('click','.delete_btn',function(){
		var $tr = $(this).parents('tr');
		var id = $tr.attr('data-id');
		layer.confirm('确认删除？', {
		  	btn: ['是的','取消'] //按钮
		}, function(){
			var param = {
				id: id
			};
			$.ajax({
				url: '/goods/index.php/Home/Index/goodsDelete',
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

