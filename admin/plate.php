<?php include('header.php');
include('plate-crud.php');
include('../dbcon.php');
include('plat-ajouter.php');
?>
<title>Plats</title>
<body>
<div class="main-content">
  <div class="row">
<style type="text/css">
.profile-pic {
    max-width: 400px;
    max-height:650px;
    min-width: 50px;
    min-height: 90px;
    display: block;
}

.file-upload {
    display: none;
}
.circle {
    border-radius: 1000px !important;
    overflow: hidden;
    width: 300px;
    height: 250px;
    border: 6px solid #666666;
    position: relative;
    top: 2%;
    left: 35%;
}
@media(max-width:400px)
{
    .circle {
    border-radius: 1000px !important;
    overflow: hidden;
    width: 200px;
    height: 150px;
    border: 3px solid #666666;
    position: relative;
    top: 2%;
    left:15%;
    }
    .upload-button {
  font-size: 2em;
  padding-top: 20px;

}

}
img {
    max-width: 300%;
}
.p-image {
  position: relative;
  top: 1px;
  left: 53%;
  color: #666666;
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.p-image:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.upload-button {
  font-size: 2em;
  padding-bottom: 50px;
}

.upload-button:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
  color: #999;
}
form input {
  margin: 0 .25rem;
  min-width: 125px;
  border: 1px solid #eee;
  border-left: 3px solid;
  border-radius: 5px;
  transition: border-color .5s ease-out;
}
input:optional {
  border-color: #999 !important;
  border-width: 1px;
}
input:required {
  border-color: palegreen !important;
   border-width: 1px;
}
input:invalid {
  border-color: salmon !important;
   border-width: 1px;
}

</style>
                            <div class="col-md-10 offset-md-1 ">
                                <!-- DATA TABLE -->
                                
                                    
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" style="margin-left: 45%;" data-toggle="modal" data-target="#scrollmodal">
                                            <i class="zmdi zmdi-plus"></i>add plate</button>
                                       
                                       
                                    </div>
                                

<script type="text/javascript">      
     function confirmDelet(id)
    {
          swal({
        title: "Êtes-vous sûr?",
        text: "Une fois supprimé, vous ne pourrez plus le récupérer.!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
      .then((willDelete) => {
        if (willDelete) {
           setTimeout(function() {window.location.href="plate.php?delete="+id},2000); 
          swal("Your file has been deleted!", {
            icon: "success",
            buttons:false,
           
          });
        }
        });
    }
</script>


                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>name</th>
                                                <th>price</th>
                                                <th>type</th>
                                                <th style="min-width: 190px">image</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                            	 <?php
                                              while($row= $result->fetch_assoc()) 
                                              {
                                               ?>                                       
                                               
                                                <td><?=$row['nom'];?></td>
                                                <td class="desc"><?=$row['prix'];?> MAD</td>
                                                <td>
                                                    <span class="status--process"><?=$row['typeplat'];?></span>
                                                </td>
                                                <td><img style="max-width:160px; height:80px ;" src="<?=$row['img'];?>" ></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="plat_view.php?id=<?=$row['platid'];?>">
                                                            <button style="margin-right: 8px;" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                        </a>
                                                    <a href="#" onclick="<?='confirmDelet('.$row['platid'].')"';?> > 
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
        <?php }?>
                                        </tbody>
                                        </table>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                    
                    <!-- modal scroll -->
            <div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="scrollmodalLabel">Add plate</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" enctype="multipart/form-data">
                                <div class=" col-md-12">
                                       <div class="small-12 medium-2 large-2 columns">
                                         <div class="circle">

                                           <img class="profile-pic" src="default.jpg">
                                         </div>
                                         <div class="p-image">
                                           <i class="fa fa-camera upload-button"></i>
                                            <input class="file-upload" type="file"  name="file" />
                                         </div>
                                      </div>
                                </div>
                                   
                                <div class="form-group">
                                    <label for="nom">Nom : </label>
                                    <input type="text" class="au-input au-input--full" id="nom" name="nom" placeholder="nom" required="*">
                                </div>
                                <div class="form-group">
                                    <label for="nom">prix :</label>
                                    <input type="number" class="au-input au-input--full" id="nom" name="prix"  placeholder="prix" required="*">
                                </div>
                                <div class="form-group">
                                    <label for="cal">calories :</label>
                                    <input type="number" class="au-input au-input--full" id="cal" name="cal"  placeholder="Calories" required="*">
                                </div>
                                <div class="form-group">
                                    <label for="nom">description :</label>
                                <textarea class="au-input au-input--full"  id="nom" name="description" style="min-height: 140px;" placeholder="description" required="*"></textarea>
                                </div>  
                                    <div class="col col-sm-6 offset-md-3">
                                        
                                <div class="form-group">
                                    <label for="select">type :</label><br>
                                     <div class="rs-select2--dark rs-select2--md rs-select2--white" style="width: 100% !important;">
                                            <select id="select" class="js-select2" name="type" >
                                                <option value="Dessert">Dessert</option>
                                                <option value="Plat Principal">Plat Principal</option>
                                                <option value="Plat Secondaire">Plat Secondaire</option>
                                                <option value="Drink">Drink</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        </div>
                                    
                                        <div class="form-group" >

                                    <label for="menu">Menu :</label><br>
                                     <div class="rs-select2--dark rs-select2--md rs-select2--white" style="width: 100% !important;">
                                            <select id="menu" class="js-select2" name="menu">
                                                <?php $queryd = " SELECT DISTINCT menu.id,noms FROM menu inner join plat on menu.id=plat.menu where restaurant=".$_SESSION['resto'];
                                                $stmt = $conn->prepare($queryd);
                                                $resultd = $conn->query($queryd);
                                                 while($rowss= $resultd->fetch_assoc()){ ?>
                                                <option value="<?=$rowss['id'] ?>"><?=$rowss['noms'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        </div>

                                         <div class="form-group" >

                                    <label for="menu">rate :</label><br>
                                     <div class="rs-select2--dark rs-select2--md rs-select2--white"style="width: 100% !important;">
                                            <select id="menu" class="js-select2" name="star">
                                                <option value="1">star</option>
                                                <option value="2">2 stars</option>
                                                <option value="3">3 stars</option>
                                                <option value="4">4 stars</option>
                                                <option value="5">5 stars</option>

                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        </div>
                                        
                                    </div>
                              
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <input type="submit" class="btn btn-primary" value ="confirme" name='Confirm'>
                        </form>
                        </div> 
                        </div>
                         
                    </div>
                </div>
            </div>
            <!-- end modal scroll -->

<?php  include('footer.php');?>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.semanticui.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.semanticui.min.css">

}</style>
<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
});
    var table = $('#myTable').DataTable({ 
        stateSave: true,
        info: false  ,
        sDom: 'topi'// This shows just the table
    });
    $('.mytable').DataTable().column( 7 ).search('SearchText').draw();

    $("#listingData_filter").addClass("hidden"); // hidden search input
    oTable = $('#myTable').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
$('#myInputTextField').keyup(function(){
      oTable.search($(this).val()).draw() ;
});
</script>
<script type="text/javascript">
    $(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});
</script>
</body>