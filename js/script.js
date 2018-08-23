$(function(){
	$.ajax({
		url:'https://pportoparalelo.herokuapp.com/api/stores',
		success: function(r){ 
			$('#loading').hide();
			$('.form-group').show();	

			for(var i in r){
				var str = r[i].description; 
				str = str.substring(0,100);
				var html = '<div class="row"><div class="col-lg-1 col-xl-2"><img src="'+r[i].photo.medium.url+'" class="img-store" width="175" height="150"/></div><div class="col-lg-11 col-xl-10"><h3 class="title-store">'+r[i].name+' - '+r[i].slogan+'</h3><span class="slogan"></span><br/><p class="description1">'+str+'<a href="store?id='+r[i].id+'"> Ver+</a></p><span class="area">Área: '+r[i].area.name+'</span><br/><span class="category">Categoria: '+r[i].category.name+'</span></div></div>';
				$('.container').append(html);
			}

			$('#search-sub').on('click', function(){
				var text = $('#search').val();
				if(text != ''){
					$.ajax({
						url:'https://pportoparalelo.herokuapp.com/api/stores?search='+text,
						success:function(r){
							$('#search').val('');
							$('.alert').hide();
							if(r != ''){
								console.log(r);
								$('.container').html('');
								$('.return').show();
								for(var i in r){
									var html = '<div class="row"><div class="col-2"><img src="'+r[i].photo.url+'" class="img-store" width="175" height="150"/></div><div class="col-10"><h3 class="title-store">'+r[i].name+' - '+r[i].slogan+'</h3><span class="slogan"></span><br/><p class="description1">'+str+'<a href="store?id='+r[i].id+'"> Ver+</a></p><span class="area">Área: '+r[i].area.name+'</span><br/><span class="category">Categoria: '+r[i].category.name+'</span></div></div>';
									$('.container').append(html);
								}
							} else {
								$('.alert').html('Nenhuma loja encontrada.');
								$('.alert').show();
							}		
						}
					});
				}
			});

			$(document).keypress(function(e){
    			if(e.which == 13) $('#search-sub').click();
			});
		}
	});
});