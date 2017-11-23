<?php 
  include_once "model.php";  

  $admin  = new Model(); 
?>
    <?php include_once "header.php"; ?>
    <main role="main">
      <section class="container">
        <article class="article">
          <h2 class="display-4">Add New Movie</h2>
        </article>
        <article class="container">
            <div class="row">
              <div class="columns col-lg-12">
                <form  id="frmUpdate" class="form-horizontal">
                  <div class="form-group form-group-md">
                    <label class="col-sm-2 control-label" for="title">Title</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" id="title" name="title" value=""  placeholder="title...">
                    </div>
                  </div>
                  <div class="form-group form-group-md">
                    <label class="col-sm-2 control-label" for="description">Year</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="date" id="showingDate" name="showingDate" value=""  placeholder="date...">
                    </div>
                  </div>
                  <div class="form-group form-group-md">
                    <label class="col-sm-2 control-label" for="description">Trope</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" id="genre" name="genre" value=""  placeholder="genre...">
                    </div>
                  </div>
                  <div class="form-group form-group-md">
                    <label class="col-sm-2 control-label" for="description">Directed By:</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" id="director" name="director" value=""  placeholder="director...">
                    </div>
                  </div>
                  <div class="form-group form-group-md">
                    <label class="col-sm-2 control-label" for="description">Summary</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="description" id="description" placeholder="description"></textarea>
                    </div>
                  </div>
                </form>
                <div class="form-group form-group-md">
                  <label class="col-sm-2 control-label" for="description">Upload Pic</label>
                  <div class="col-sm-10">
                    <div class="row jumbotron">
                      <div id="filedrag">
                        <form class="form-horizontal" role="form" id="addAttachment_form" method="post" action="process.php">
                          <div class="columns col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                              <div class="columns col-lg-12 col-md-12 col-sm-12">
                                <div class="columns col-lg-12 col-md-12 col-sm-12">
                                  <h1>Drag and Drop files here</h1>
                                  <p class="lead">
                                    Upload/Drag&Drop a html file first to add a new record.
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="columns col-lg-12 col-md-12 col-sm-12">
                                <div class="active-drag">
                                  <div id="progress"></div>
                                  <div class="form-group hide-label">
                                      <input type="file" id="fileselect" name="fileselect[]" multiple="multiple">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="row">
                      <div class="columns col-lg-12 col-md-12 col-sm-12">
                        <div id="messages"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group form-group-md">
                  <input type="submit" value="save" id="saveSlide" class="btn   btn-success">
                </div>
              </div>
            </div>
        </article>
      </section>
    </main>

    <!-- MODALS -->
    <div id="info" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <br>
          </div>
          <div class="modal-body">
             <div class="alert alert-success" role="alert">You have succesfully saved the slideshow</div>
              <div class="alert alert-warning" role="alert">You have to upload a picture before saving..</div>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <?php include_once "footer.php"; ?>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slide.js"></script>
    <script type="text/javascript">
      (function($){
        var slideShow = {
          __init : function(){
            this.__listen();
          },
          __listen : function(){
            $("#saveSlide").on("click", function(e){
              var title = $("#title").val();
              var desc = $("#description").val();
              var id = $("#addAttachment_form").data("id");
              var genre = $("#genre").val();
              var showing = $("#showingDate").val();
              var director = $("#director").val();

              if(id == null){
                // alert()

                $(".alert-success").hide();
                $(".alert-warning").show();
                $("#info").modal("show");
                return false;
              }
              $.ajax({
                url   : 'process.php',
                data  : {
                    title:title, 
                    genre:genre, 
                    director:director, 
                    showing:showing, 
                    description:desc, 
                    id:id, 
                    addSlider:true
                  },
                type  : 'POST',
                dataType : 'JSON',
                success : function(res){
                  $(".alert-success").show();
                  $(".alert-warning").hide();
                  $("#info").modal("show");
                },
                error   : function(){

                }
              });

              e.preventDefault();
            });
          }

        }
        slideShow.__init();
      })(jQuery)
    </script>
  </body>
</html>