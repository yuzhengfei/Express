$(function(){
		$(document).on('click','#add_btn',function(){
			var name = document.getElementById("name").value;
			var info = document.getElementById("info").value;
			
			var param = {
                name: name,
				info: info
			};
			$.ajax({
				url: '/express/index.php/Admin/Position/positionAdd',
				type: 'POST',
				dataType: 'json',
				data: param,
				success: function(data){
					console.log(data);
					if(data.code == 0){
						layer.msg('添加成功',{icon: 1});	
						window.location = '/express/index.php/Admin/Listposition/index';				
					}
				},
				error: function(xhr){
					layer.msg('添加失败',{icon: 2});
					console.log(xhr);
				}
			});
	});


	$(document).on('click','.delete_btn',function(){
			var $tr = $(this).parents('tr');
			var id = $tr.attr('data-id');
			layer.confirm('是否确认撤销？', {
			  	btn: ['确定','取消'] //按钮
			}, function(){
				var param = {
					id: id
				};
				$.ajax({
					url: '/express/index.php/Admin/Listposition/positionDetele',
					type: 'POST',
					dataType: 'json',
					data: param,
					success: function(data){
						console.log(data);
						if(data.code == 0){
							layer.msg('已成功撤销该职位', {icon: 1});
							$tr.remove();
						}
					},
					error: function(xhr){
						layer.msg('撤销失败', {icon: 2});
						console.log(xhr);
					}
				});		  	
			}, function(){
			  	//layer.msg('取消');
			});
	});



});