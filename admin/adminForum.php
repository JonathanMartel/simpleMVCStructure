
<?php include ("./includes/header.php"); ?>       

    <div class="row">
    	
       <!---------- *********** admin Forum ************** ---------->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://templateplanet.info/tooltip.js"></script>
        <script src="http://templateplanet.info/modal.js"></script>
        <div class="container">
	       <div class="row">
		      <div class="col-md-12">
              <h4>Administration Forum</h4>
              <div class="table-responsive">
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>                  
                       <th><input type="checkbox" id="checkall" /></th>
                       <th>id_Forum</th>
                       <th>Titre Article</th>
                       <th>Catégorie</th>
                       <th>Description</th>
                       <th>auteur</th>
                       <th>username</th>
                       <th>email</th>
                       <th>Ajouter</th>
                       <th>modifier</th>
                       <th>Effacer</th>
                   </thead>
    <tbody>    
    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td>1</td>
        <td>les Inventeurs de nos jours</td>
        <td>Inventions tiers</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td>Jacques Junior Bretoux</td>
        <td>bjacquesjunior</td>
        <td>jacoumie@yahoo.fr</td>
        <td><p><button class="btn btn-primary btn-xs" data-title="Ajouter" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p><button class="btn btn-primary btn-xs" data-title="Modifier" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p><button class="btn btn-danger btn-xs" data-title="Effacer" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>    
    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td>2</td>
        <td>Irshad</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td><p><button class="btn btn-primary btn-xs" data-title="Ajouter" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p><button class="btn btn-primary btn-xs" data-title="Modifier" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p><button class="btn btn-danger btn-xs" data-title="Effacer" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>    
    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td>3</td>
        <td>Irshad</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td><p><button class="btn btn-primary btn-xs" data-title="Ajouter" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p><button class="btn btn-primary btn-xs" data-title="Modifier" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p><button class="btn btn-danger btn-xs" data-title="Effacer" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>    
    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td>4</td>
        <td>Irshad</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td><p><button class="btn btn-primary btn-xs" data-title="Ajouter" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p><button class="btn btn-primary btn-xs" data-title="Modifier" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p><button class="btn btn-danger btn-xs" data-title="Effacer" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>    
    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td>5</td>
        <td>Irshad</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
        <td><p><button class="btn btn-primary btn-xs" data-title="Ajouter" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p><button class="btn btn-primary btn-xs" data-title="Modifier" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p><button class="btn btn-danger btn-xs" data-title="Effacer" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>     
    </tbody>        
</table>

                <div class="clearfix"></div>
                    <ul class="pagination pull-right">
                      <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                    </ul>                
                </div>
            
            </div>
        </div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="modifier" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Modifier les détails</h4>
      </div>
     <div class="modal-body">
        <div class="form-group">
            <input class="form-control " type="text" placeholder="id">
        </div>
        <div class="form-group">        
            <input class="form-control " type="text" placeholder="categorie">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Modifier</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>   
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="effacer" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Effacer les détails</h4>
      </div>
        <div class="modal-body">       
       <div class="alert alert-warning"><span class="glyphicon glyphicon-warning-sign"></span> Etes vous sure que vous voulez effacer les entrées?</div>       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-warning" ><span class="glyphicon glyphicon-ok-sign"></span> Oui</button>
        <button type="button" class="btn btn-warning" ><span class="glyphicon glyphicon-remove"></span> Non</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
         <!---------- *********** admin Forum ************** ---------->
      </div>
   
   
      <script src="js/adminForum.js"></script>
 <?php include ("./includes/footer.php"); ?>