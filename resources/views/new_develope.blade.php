
<div class="modal" id="new_request" tabindex="-1" role="dialog"  >
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class='col-md-10'>
                    <h5 class="modal-title" id="exampleModalLabel">New Request</h5>
                </div>
                <div class='col-md-2'>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <form method='post' action='new-developer' onsubmit='show();'  enctype="multipart/form-data" >
                <div class="modal-body">
                    {{-- {{ csrf_field() }} --}}
                    <div class='col-md-12'>
                        Image :
                        <input type="file" class="form-control-sm form-control " accept="image/png, image/gif, image/jpeg"  name="image" required/>
                     </div>
                    <div class='col-md-12'>
                        Name :
                        <input type="text" class="form-control-sm form-control "   name="name" required/>
                     </div>
                    <div class='col-md-12'>
                        Role :
                        <input type="text" class="form-control-sm form-control "   name="role" required/>
                     </div>
                    <div class='col-md-12'>
                        facebook Link (optional):
                        <input type="text" class="form-control-sm form-control "   name="facebook" />
                     </div>
                    <div class='col-md-12'>
                        Instragram Link (optional):
                        <input type="text" class="form-control-sm form-control "   name="instagram" />
                     </div>
                    <div class='col-md-12'>
                        Linked In (optional):
                        <input type="text" class="form-control-sm form-control "   name="linkedIn" />
                     </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type='submit'  class="btn btn-primary" >Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
