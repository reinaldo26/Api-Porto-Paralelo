$(function(){
	var id = $('.container').attr('data-id');
	$.ajax({	
		url:'https://pportoparalelo.herokuapp.com/api/stores/'+id,
		success: function(r){ 
			$('#loading').hide();
			$('.return').show();
			$('title').html(r.name);
			$('.title-store').html(r.name);
			$('.image-store').append('<img src="'+r.photo.large.url+'" class="img-store"/>');
			$('.slogan').html(r.slogan);
			$('.description').html(r.description);
			$('.area').html('Área: '+r.area.name);
			$('.category').html('Categoria: '+r.category.name);
			$('.week_days').html('Abre às: '+r.week_days[0].open);
			$('.week_days').append('<br>Fecha às: '+r.week_days[0].close);
			$('iframe').attr('src', 'https://www.google.com.br/maps?q='+r.address+',%20Porto,%20Portugal&output=embed');
	
			for(var i in r.gallery_stores){
				$('.gallery-itens').append('<img src="'+r.gallery_stores[i].photo.url+'"/>');
			}
			
			$('.gallery-itens img').on('click', function(){
				var src = $(this).attr('src');
				$('.img-store').attr('src', src);
			});

			for(var i in r.week_days){
				var open = r.week_days[i].open;
				var close = r.week_days[i].close;
				$('.week td').eq(i).html(open+'<br/>'+close);
			}
		}
	});
});