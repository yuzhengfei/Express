$(function(){
		$(document).on('click','#add_btn',function(){
			var name = document.getElementById("name").value;
			var sex = document.getElementById("sex").value;
			var phone = document.getElementById("phone").value;
			var position = document.getElementById("position").value;
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;


			var param = {
                name: name,
				sex: sex,
				phone, phone,
				position, position,
				username, username,
				password,password
			};
			$.ajax({
				url: '/express/index.php/Admin/Person/personAdd',
				type: 'POST',
				dataType: 'json',
				data: param,
				success: function(data){
					console.log(data);
					if(data.code == 0){
						layer.msg('添加成功',{icon: 1});			
						window.location = '/express/index.php/Admin/Listperson/index';			
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
			layer.confirm('确认离职？', {
			  	btn: ['是的','取消'] //按钮
			}, function(){
				var param = {
					id: id
				};
				$.ajax({
					url: '/express/index.php/Admin/Listperson/personDetele',
					type: 'POST',
					dataType: 'json',
					data: param,
					success: function(data){
						console.log(data);
						if(data.code == 0){
							layer.msg('成功离职', {icon: 1});
							$tr.remove();
						}
					},
					error: function(xhr){
						layer.msg('离职失败', {icon: 2});
						console.log(xhr);
					}
				});		  	
			}, function(){
			  	//layer.msg('取消');
			});
	});



});