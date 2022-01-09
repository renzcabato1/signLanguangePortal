
<div class="modal" id="new_account" tabindex="-1" role="dialog"  >
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class='col-md-10'>
                    <h5 class="modal-title" id="exampleModalLabel">New</h5>
                </div>
                <div class='col-md-2'>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <form method='post' action='new-account' onsubmit='show();'  enctype="multipart/form-data" >
                <div class="modal-body">
                    {{ csrf_field() }}
                   
                    <div class='col-md-12'>
                        Name :
                        <input type="text" class="form-control-sm form-control "  value="{{ old('name') }}"  name="name" required/>
                     </div>
                    <div class='col-md-12'>
                        Email :
                        <input type="email" class="form-control-sm form-control "  value="{{ old('email') }}"  name="email" required/>
                     </div>
                    <div class='col-md-12'>
                       Password:
                        <input type="password" class="form-control-sm form-control "   name="password" required/>
                     </div>
                    <div class='col-md-12'>
                        Password Confirmation:
                        <input type="password" class="form-control-sm form-control "   name="password_confirmation" required/>
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
