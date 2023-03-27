<?php
include('header.php');
 require_once('../session.php');
 include('profile-crud.php');
?>
<style type="text/css">
    body {
  background-color: #efefef;
}


.profile-pic {
    max-width: 200px;
    max-height: 300px;
    display: block;
}

.file-upload {
    display: none;
}
.circle {
    border-radius: 1000px !important;
    overflow: hidden;
    width: 200px;
    height: 200px;
    border: 8px solid #666666;
    position: relative;
    top: 2%;
    left: 5%;
}
img {
    max-width: 100%;

}
.p-image {
  position: relative;
  top: 1px;
  left: 32%;
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
.simple-form {
  display: flex;
  overflow-y: scroll;
  padding-bottom: 1.25rem;
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
  border-color: yellow !important;
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
<title>Profile Detail</title>
<div class="page-container">
    <div class="main-content">
  		<form method="POST" enctype="multipart/form-data">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        	   <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Profile</strong>
                                        <?php   $query4 = "SELECT * from compte inner join admin on compte.id=admin.compte where compte.id='$id'";
                                                $result3 = mysqli_query($conn,$query4);
                                                $row2 = $result3->fetch_assoc();?>
                                    </div>
                                    <?php if (isset($error)) { ?>
                                    <div class="alert alert-<?php echo $typeerror; ?>"role="alert">
                                    <center><i class="<?php echo $icon; ?>"></i> <i class="pl-3"><?php echo $error; ?></i></center>  
                                    </div>
                                    <?php } ?>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                             <div class="col col-md-4 offset-md-4">
                                             <div class="row form-group">
                                                 <div class=" col-md-12">
                                                    <div class="small-12 medium-2 large-2 columns">
                                                        <div class="circle">          
                                                            <img src="<?php echo $_SESSION['img'] ;?>" class="profile-pic" >
                                                        </div>
                                                    <div class="p-image">
                                                        <i class="fa fa-camera upload-button"></i>
                                                        <input class="file-upload" type="file" accept="image/*" name="file"  />
                                                    </div>
                                              </div>
                                            </div>
                                             </div>
                                          </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Name : </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="email-input"  name="name" value="<?php echo $row2['nom']; ?>"  placeholder="Enter name" class="form-control" required="*">
                                                    
                                                </div>
                                            </div>
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label"> Username : </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="email-input" value="<?php echo $row2['login']; ?>" required name="username" placeholder="Enter Username" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">New Password : </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password-input"  name="password" required="enter le mot de passe" placeholder="Password" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Confirme Password : </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password-input"  name="password2" required="" placeholder="Confirme Password" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Adresse : </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="textarea" id="textarea-input" rows="9" placeholder="i'm <?php echo $_SESSION['name']; ?>" class="form-control"><?php echo $row2['address']; ?></textarea>
                                                </div>
                                            </div>
                                           
                                            <div class="row form-group"> <div class="col col-md-3">
                                                    <label for="ville" class=" form-control-label">change ville : </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="ville" id="ville"  name="ville" required="" placeholder="ville" class="form-control">
                                                </div>
                                              </div>
                                        </form>
                                    

                                    <div class="card-footer">
                                        <div class="col col-md-3"></div>
                                    	<center><button name="Update" type="submit" class="btn btn-primary btn-sm">
                                            Update
                                        </button>
                                        </center>
                                       
                                    </div>
                                </div>

                            </div><br><br><br><br><br>
                       
                    	</div>
                	</div>
            	</div>
        	</div>
    	</form>
    </div>
</div>
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
 
<?php
include('footer.php');
?>