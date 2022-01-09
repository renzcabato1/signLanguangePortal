
<div class="modal" id="image{{$team->id}}" tabindex="-1" role="dialog"  >
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class='col-md-10'>
                    <h5 class="modal-title" id="exampleModalLabel">Image</h5>
                </div>
                <div class='col-md-2'>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            {{-- <form method='post' action='new-developer' onsubmit='show();'  enctype="multipart/form-data" > --}}
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class='col-md-12'>
                        <img src="{{asset(".$team->image.")}}" class="img-fluid" alt="">
                     </div>
                 
                </div>
               
            {{-- </form> --}}
        </div>
    </div>
</div>
