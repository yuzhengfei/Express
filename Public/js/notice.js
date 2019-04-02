$(function(){
		$(document).on('click','#add_btn',function(){
			var title = document.getElementById("title").value;
			var notice = document.getElementById("notice").value;


			var param = {
                title: title,
				notice: notice
			};
			$.ajax({
				url: '/express/index.php/Admin/Notice/noticeAdd',
				type: 'POST',
				dataType: 'json',
				data: param,
				success: function(data){
					console.log(data);
					if(data.code == 0){
						layer.msg('发布成功',{icon: 1});	
						window.location = '/express/index.php/Admin/Listnotice/index';					
					}
				},
				error: function(xhr){
					layer.msg('发布失败',{icon: 2});
					console.log(xhr);
				}
			});
	});

	$(document).on('click','#editnotice',function(){

		    var id = document.getElementById("id").value;
			var title = document.getElementById("title").value;
			var notice = document.getElementById("notice").value;
			
			var param = {
				id: id,
                title: title,
				notice: notice
			};
			$.ajax({
				url: '/express/index.php/Admin/Editnotice/noticeEdit',
				type: 'POST',
				dataType: 'json',
				data: param,
				success: function(data){
					console.log(data);
					if(data.code == 0){
						layer.msg('修改成功',{icon: 1});						
					}
				},
				error: function(xhr){
					layer.msg('修改失败',{icon: 2});
					console.log(xhr);
				}
			});
	});

});