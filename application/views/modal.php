<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Member</h4></center>
            </div>
            <div class="modal-body">
                        <div class="container-fluid">
                        <form id="addForm" enctype="multipart/form-data">
                                <div class="row">
                                        <div class="col-md-3">
                                                <label class="control-label" style="position:relative; top:7px;">Email:</label>
                                        </div>
                                        <div class="col-md-9">
                                                <input type="email" class="form-control" name="email" autocomplete="off" required>
                                        </div>
                                </div>
                                <div style="height:10px;"></div>
                                <div class="row">
                                        <div class="col-md-3">
                                                <label class="control-label" style="position:relative; top:7px;">Password:</label>
                                        </div>
                                        <div class="col-md-9">
                                                <input type="password" class="form-control" name="password" autocomplete="off" required>
                                        </div>
                                </div>
                                <div style="height:10px;"></div>
                                <div class="row">
                                        <div class="col-md-3">
                                                <label class="control-label" style="position:relative; top:7px;">Full Name:</label>
                                        </div>
                                        <div class="col-md-9">
                                                <input type="text" class="form-control" name="fname" autocomplete="off" required>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-3">
                                                <label class="control-label" style="position:relative; top:7px;">Profile Image:</label>
                                        </div>
                                        <div class="col-md-9">
                                                <input type="file" class="form-control" name="image" size='20' required>
                                        </div>
                                </div>
            </div>
                        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
                        </form>
            </div>
                       
        </div>
    </div>
</div>
 
<!-- Edit -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
                        <div class="container-fluid">
                        <form id="editForm">
                                <div class="row">
                                        <div class="col-md-3">
                                                <label class="control-label" style="position:relative; top:7px;">Email:</label>
                                        </div>
                                        <div class="col-md-9">
                                                <input type="text" class="form-control" name="email" id="email">
                                        </div>
                                </div>
                                <div style="height:10px;"></div>
                                <div class="row">
                                        <div class="col-md-3">
                                                <label class="control-label" style="position:relative; top:7px;">Password:</label>
                                        </div>
                                        <div class="col-md-9">
                                                <input type="text" class="form-control" name="password" id="password">
                                        </div>
                                </div>
                                <div style="height:10px;"></div>
                                <div class="row">
                                        <div class="col-md-3">
                                                <label class="control-label" style="position:relative; top:7px;">Full Name:</label>
                                        </div>
                                        <div class="col-md-9">
                                                <input type="text" class="form-control" name="fname" id="fname">
                                        </div>
                                </div>
                                <input type="hidden" name="id" id="userid">
            </div>
                        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Update</a>
                        </form>
            </div>
                       
        </div>
    </div>
</div>
 
<!-- Delete -->
<div class="modal fade" id="delmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
            </div>
            <div class="modal-body">
                                <h4 class="text-center">Are you sure you want to delete</h4>
                                <h2 id="delfname" class="text-center"></h2>
                        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="button" id="delid" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</button>
            </div>
                       
        </div>
    </div>
</div>