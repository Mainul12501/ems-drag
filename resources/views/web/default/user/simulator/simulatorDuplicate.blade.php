<!DOCTYPE html>
<html>

  <head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/ui-lightness/jquery-ui.css" />
    <link rel="stylesheet" href="style.css" />
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="script.js"></script>
    
  </head>
<style>
/* Styles go here */

.box-container {
	height: 200px;
}

.box-item {
	width: 100%;
	z-index: 100
}
</style>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h1 class="panel-title">Mixed</h1>
            </div>
            <div id="container1" class="panel-body box-container">
              <div itemid="itm-1" class="btn btn-default box-item">archive document</div>
              <div itemid="itm-2" class="btn btn-default box-item">Authorize project</div>
              <div itemid="itm-3" class="btn btn-default box-item">develop schedule</div>
              <div itemid="itm-4" class="btn btn-default box-item">manage risks</div>
              <div itemid="itm-5" class="btn btn-default box-item">validate scope</div>
            </div>
          </div>
        </div>
        <div class="col-xs-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h1 class="panel-title">Initiating</h1>
            </div>
            <div id="container2" class="panel-body box-container"></div>
          </div>
        </div>
        <div class="col-xs-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h1 class="panel-title">Planning</h1>
            </div>
            <div id="container3" class="panel-body box-container">
              
            </div>
          </div>
        </div>
        <div class="col-xs-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h1 class="panel-title">Executing</h1>
            </div>
            <div id="container4" class="panel-body box-container">
          
            </div>
          </div>
        </div>
        <center><input type=button onClick="self.close();" value="submit"></center>
        
      </div>
    </div>
  </body>
<script>
$(document).ready(function() {

$('.box-item').draggable({
  cursor: 'move',
  helper: "clone"
});

$("#container1").droppable({
  drop: function(event, ui) {
    var itemid = $(event.originalEvent.toElement).attr("itemid");
    $('.box-item').each(function() {
      if ($(this).attr("itemid") === itemid) {
        $(this).appendTo("#container1");
      }
    });
  }
});

$("#container2").droppable({
  drop: function(event, ui) {
    var itemid = $(event.originalEvent.toElement).attr("itemid");
    $('.box-item').each(function() {
      if ($(this).attr("itemid") === itemid) {
        $(this).appendTo("#container2");
      }
    });
  }
});
$("#container3").droppable({
  drop: function(event, ui) {
    var itemid = $(event.originalEvent.toElement).attr("itemid");
    $('.box-item').each(function() {
      if ($(this).attr("itemid") === itemid) {
        $(this).appendTo("#container3");
      }
    });
  }
});
$("#container4").droppable({
  drop: function(event, ui) {
    var itemid = $(event.originalEvent.toElement).attr("itemid");
    $('.box-item').each(function() {
      if ($(this).attr("itemid") === itemid) {
        $(this).appendTo("#container4");
      }
    });
  }
});



});

</script>
</html>
