<?php /* Template Name: Demo Page Todo */ get_header(); ?>

<div class="container">
      <h1>Todo List</h1>

      <div class="row">
          <div class="col-sm"/>
          <div class="col-sm">
            <ul id="mesToDos" class="list-group maTodo">
              <li class="list-group-item"><input type="checkbox" /><span> Task 1 </span>  ,  <a class='btnModif'><button type="button" class="btn btn-warning">Modifier la tâche</button></a> <a class='btnBar'><button type="button" class="btn btn-success">Marquer la tâche complétée</button></a> <a class='btnSup'><button type="button" class="btn btn-dark">Supprimer la tâche</button></a></li>
              <li class="list-group-item"><input type="checkbox" /><span> Task 2 </span>  ,  <a class='btnModif'><button type="button" class="btn btn-warning">Modifier la tâche</button></a> <a class='btnBar'><button type="button" class="btn btn-success">Marquer la tâche complétée</button></a> <a class='btnSup'><button type="button" class="btn btn-dark">Supprimer la tâche</button></a></li>
              <li class="list-group-item"><input type="checkbox" /><span> Task 3 </span>  ,  <a class='btnModif'><button type="button" class="btn btn-warning">Modifier la tâche</button></a> <a class='btnBar'><button type="button" class="btn btn-success">Marquer la tâche complétée</button></a> <a class='btnSup'><button type="button" class="btn btn-dark">Supprimer la tâche</button></a></li>
            </ul>
          </div>
          <div class="col-sm"/>
      </div>


      <div class="row">
        <div class="col-sm"/>
        <div class="col-sm">
          <div class="input-group mb-3">
            <input id="monText" class="form-control" type="textext"/>
            <div class="btn btn-primary" id="monButton" >Ajouter</div>
          </div>
        </div>
        <div class="col-sm"/>
      </div>
    </div>



    <?php get_footer(); ?>




    

    