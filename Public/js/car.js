$(function(){
		$(document).on('click','#add_btn',function(){
			var carnumber = document.getElementById("carnumber").value;
			var caruser = document.getElementById("caruser").value;


			var param = {
                carnumber: carnumber,
				caruser: caruser
			};
			$.ajax({
				url: '/express/index.php/Admin/Car/carAdd',
				type: 'POST',
				dataType: 'json',
				data: param,
				success: function(data){
					console.log(data);
					if(data.code == 0){
						layer.msg('添加成功',{icon: 1});	
						window.location = '/express/index.php/Admin/Listcar/index';					
					}
				},
				error: function(xhr){
					layer.msg('添加失败',{icon: 2});
					console.log(xhr);
				}
			});
	});

	$(document).on('click','#editcar',function(){

		    var id = document.getElementById("id").value;
			var carnumber = document.getElementById("carnumber").value;
			var caruser = document.getElementById("caruser").value;

			
			var param = {
				id: id,
                carnumber: carnumber,
				caruser: caruser
			};
			$.ajax({
				url: '/express/index.php/Admin/Editcar/carEdit',
				type: 'POST',
				dataType: 'json',
				data: param,
				success: function(data){
					console.log(data);
					if(data.code == 0){
						layer.msg('修改成功',{icon: 1});	
						window.location = '/express/index.php/Admin/Listcar/index';						
					}
				},
				error: function(xhr){
					layer.msg('修改失败',{icon: 2});
					console.log(xhr);
				}
			});
	});

});