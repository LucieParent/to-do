			<!-- footer -->
			<footer class="footer" role="contentinfo">

				

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<script type="text/javascript">

		function obtenirToDos(data,status) {

			let todos = $('#mesToDos');

			$(data).each(function(position, todo) {
				let li = $('<li><input type="checkbox" /><span>'+ todo.post_title  + '<span/></li>');
				li.addClass('list-group-item');
				let btnModif = $('<a class="btnModif"><a class="btnModif"><button type="button" class="btn btn-warning">Modifier la tâche</button></a>')
      			btnModif.click(btnModif);
      			li.append(btnModif);
				let btnBar = $('<a class="btnBar"><button type="button" class="btn btn-success">Marquer la tâche complétée</button></a>')
	  			btnBar.click(doneTodo);
      			li.append(btnBar);
				let btnDelete = $('<a class="btnSup"><button type="button" class="btn btn-dark">Supprimer la tâche</button></a>')
      			btnDelete.click(deleteTodo);
      			li.append(btnDelete);
				todos.append(li);

			})

		}

		function nouveauTodo(data,status) {

			let todos = $('#mesToDos');
			if (status == "success") {
				let li = $('<li><input type="checkbox" /><span>'+ data  + '<span/></li>');
				li.addClass('list-group-item');
				let btnModif = $('<a class="btnModif"><a class="btnModif"><button type="button" class="btn btn-warning">Modifier la tâche</button></a>')
      			btnModif.click(btnModif);
      			li.append(btnModif);
				let btnBar = $('<a class="btnBar"><button type="button" class="btn btn-success">Marquer la tâche complétée</button></a>')
	  			btnBar.click(doneTodo);
      			li.append(btnBar);
				let btnDelete = $('<a class="btnSup"><button type="button" class="btn btn-dark">Supprimer la tâche</button></a>')
      			btnDelete.click(deleteTodo);
      			li.append(btnDelete);
				todos.append(li);


			}

		}

		$(document).ready(function(){

			
			$.ajax({
				'url' : '/?rest_route=/dswt/todo',
				'method' : 'GET',
				'success' : obtenirToDos
			})

			$('#monButton').click(function() {
				let todoText = $('#nouveauTodo').val();
				$('#nouveauTodo').val('');
				$.ajax({
					'url' : '/?rest_route=/dswt/todo',
					'method' : 'POST',
					'data' : { 'titre' : todoText},
					'success' : nouveauTodo
				})
			});



			// [] array
			// {} object


			$('#monButton').click(function(){
				let monText = $('#monText').val();
				let li = $('<li><input type="checkbox" /><span>'+ monText  + '<span/></li>');
				li.addClass('animate__animated animate__bounceInLeft list-group-item');
				let btnModif = $('<a class="btnModif"><a class="btnModif"><button type="button" class="btn btn-warning">Modifier la tâche</button></a>')
      			btnModif.click(btnModif);
      			li.append(btnModif);
				let btnBar = $('<a class="btnBar"><button type="button" class="btn btn-success">Marquer la tâche complétée</button></a>')
	  			btnBar.click(doneTodo);
      			li.append(btnBar);
				let btnDelete = $('<a class="btnSup"><button type="button" class="btn btn-dark">Supprimer la tâche</button></a>')
      			btnDelete.click(deleteTodo);
      			li.append(btnDelete);
				$('.maTodo').append(li);
				$('#monText').val('');
			});
		});

		function deleteTodo() {
			
			let li = $(this).parent();
			li.addClass('animate__animated animate__bounceOutLeft');
		  	li.on('animationend', function() {
			  li.remove();
		  	})}

			  
		
		$('.btnSup').click(deleteTodo);



		function doneTodo() {
			$(this).parent().css('text-decoration', 'line-through');
		}
			
		$('.btnBar').click(doneTodo);

		function editTodo() {
      		let li = $(this).parent();
      		let span = li.children('span');
      		let valeur = span.text();
     		$('#monText').val(valeur);
      		li.remove();
        }

		$('.btnModif').click(editTodo);

	




		</script>
	
	</body>
</html>
		  