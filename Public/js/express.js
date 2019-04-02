$(function(){

	$(document).on('click','.addexpress',function(){

			var number = document.getElementById("number").value;
			var jperson = document.getElementById("jperson").value;
			var jphone = document.getElementById("jphone").value;
			var jaddress= document.getElementById("jaddress").value;
			var sperson= document.getElementById("sperson").value;
			var saddress= document.getElementById("saddress").value;
			var sphone= document.getElementById("sphone").value;
			var price= document.getElementById("price").value;
			var state= document.getElementById("state").value;
			var weight= document.getElementById("weight").value;
			
			var param = {
				number: number,
				jperson: jperson,
                jphone: jphone,
                jaddress: jaddress,
                sperson: sperson,
                saddress: saddress,
                sphone: sphone,
                price: price,
                state: state,
				weight: weight
			};
			$.ajax({
				url: '/express/index.php/Admin/Express/expressAdd',
				type: 'POST',
				dataType: 'json',
				data: param,
				success: function(data){
					console.log(data);
					if(data.code == 0){
						layer.msg('录入成功',{icon: 1});
						window.location = '/express/index.php/Admin/Listexpress/index';						
					}
				},
				error: function(xhr){
					layer.msg('录入失败',{icon: 2});
					console.log(xhr);
				}
			});
	});

	$(document).on('click','#editexpress',function(){

            var id = document.getElementById("id").value;
            var username = document.getElementById("username").value;

            var param = {
                id: id,
                username: username
               
            };
            $.ajax({
                url: '/express/index.php/Admin/Editexpress/expressEdit',
                type: 'POST',
                dataType: 'json',
                data: param,
                success: function(data){
                    console.log(data);
                    if(data.code == 0){
                        layer.msg('分发成功',{icon: 1});  
                        window.location = '/express/index.php/Admin/Listexpress/index';                      
                    }
                },
                error: function(xhr){
                    console.log(xhr);
                    layer.msg('分发失败,请核对信息',{icon: 2}); 
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
				url: '/express/index.php/Admin/Listexpress/expressDelete',
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
					layer.msg('删除失败', {icon: 2});
					console.log(xhr);
				}
			});
		  	
		}, function(){
		  	//layer.msg('取消');
		});
    });
});
