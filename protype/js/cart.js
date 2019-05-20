
		$(document).ready(function(){
			$('#plus1').click(function(){
				var txt = $('#search1').val();
					$.ajax({
						url:"add.php",
						method:"post",
						data: {add:txt},
						dataType:"text",
						success:function(value){
							var data = value.split(",");
							$('#qt1').html(data[0]);

							$('#price1').html(data[1]);
							$('#basket1').html(data[1]);

							$('#display_service1').html(data[2]);

							$('#tp1').html(data[3]);
						}
					});
				
			});
		});
		$(document).ready(function(){
			$('#minus1').click(function(){
				var txt = $('#search1').val();
					$.ajax({
						url:"add.php",
						method:"post",
						data: {sub:txt},
						dataType:"text",
						success:function(value){
							var data = value.split(",");
							$('#qt1').html(data[0]);

							$('#price1').html(data[1]);
							$('#basket1').html(data[1]);

							$('#display_service1').html(data[2]);
							$('#service1').val(data[2]);

							$('#tp1').html(data[3]);
						}
					});
				
			});
		});



		$(document).ready(function(){
			$('#plus2').click(function(){
				var txt = $('#search2').val();
					$.ajax({
						url:"add.php",
						method:"post",
						data: {add:txt},
						dataType:"text",
						success:function(value){
							var data = value.split(",");
							$('#qt2').html(data[0]);

							$('#price2').html(data[1]);
							$('#basket2').html(data[1]);

							$('#display_service2').html(data[2]);

							$('#tp2').html(data[3]);
						}
					});
				
			});
		});
		$(document).ready(function(){
			$('#minus2').click(function(){
				var txt = $('#search2').val();
					$.ajax({
						url:"add.php",
						method:"post",
						data: {sub:txt},
						dataType:"text",
						success:function(value){
							var data = value.split(",");
							$('#qt2').html(data[0]);

							$('#price2').html(data[1]);
							$('#basket2').html(data[1]);

							$('#display_service2').html(data[2]);
							$('#service2').val(data[2]);

							$('#tp2').html(data[3]);
						}
					});
				
			});
		});





		$(document).ready(function(){
			$('#plus3').click(function(){
				var txt = $('#search3').val();
					$.ajax({
						url:"add.php",
						method:"post",
						data: {add:txt},
						dataType:"text",
						success:function(value){
							var data = value.split(",");
							$('#qt3').html(data[0]);

							$('#price3').html(data[1]);
							$('#basket3').html(data[1]);

							$('#display_service3').html(data[2]);

							$('#tp3').html(data[3]);
						}
					});
				
			});
		});
		$(document).ready(function(){
			$('#minus3').click(function(){
				var txt = $('#search3').val();
					$.ajax({
						url:"add.php",
						method:"post",
						data: {sub:txt},
						dataType:"text",
						success:function(value){
							var data = value.split(",");
							$('#qt3').html(data[0]);

							$('#price3').html(data[1]);
							$('#basket3').html(data[1]);

							$('#display_service3').html(data[2]);
							$('#service3').val(data[2]);

							$('#tp3').html(data[3]);
						}
					});
				
			});
		});



		$(document).ready(function(){
			$('#plus4').click(function(){
				var txt = $('#search4').val();
					$.ajax({
						url:"add.php",
						method:"post",
						data: {add:txt},
						dataType:"text",
						success:function(value){
							var data = value.split(",");
							$('#qt4').html(data[0]);

							$('#price4').html(data[1]);
							$('#basket4').html(data[1]);

							$('#display_service4').html(data[2]);

							$('#tp4').html(data[3]);
						}
					});
				
			});
		});
		$(document).ready(function(){
			$('#minus4').click(function(){
				var txt = $('#search4').val();
					$.ajax({
						url:"add.php",
						method:"post",
						data: {sub:txt},
						dataType:"text",
						success:function(value){
							var data = value.split(",");
							$('#qt4').html(data[0]);

							$('#price4').html(data[1]);
							$('#basket4').html(data[1]);

							$('#display_service4').html(data[2]);
							$('#service4').val(data[2]);

							$('#tp4').html(data[3]);
						}
					});
				
			});
		});



		$(document).ready(function(){
			$('#plus5').click(function(){
				var txt = $('#search5').val();
					$.ajax({
						url:"add.php",
						method:"post",
						data: {add:txt},
						dataType:"text",
						success:function(value){
							var data = value.split(",");
							$('#qt5').html(data[0]);

							$('#price5').html(data[1]);
							$('#basket5').html(data[1]);

							$('#display_service5').html(data[2]);

							$('#tp5').html(data[3]);
						}
					});
				
			});
		});
		$(document).ready(function(){
			$('#minus5').click(function(){
				var txt = $('#search5').val();
					$.ajax({
						url:"add.php",
						method:"post",
						data: {sub:txt},
						dataType:"text",
						success:function(value){
							var data = value.split(",");
							$('#qt5').html(data[0]);

							$('#price5').html(data[1]);
							$('#basket5').html(data[1]);

							$('#display_service5').html(data[2]);
							$('#service5').val(data[2]);

							$('#tp5').html(data[3]);
						}
					});
				
			});
		});

