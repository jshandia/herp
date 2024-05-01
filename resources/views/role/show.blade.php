{{Form::open(array('url'=>'roles.show','method'=>'get'))}}
<div class="modal-body">
    <div class="row">
        <table>
            <tbody>
                <td class="Permission">
                    @foreach ($role->permissions()->pluck('name') as $permissionName)
                    <span class="badge rounded p-2 m-1 px-3 bg-primary">{{ $permissionName }}
                        
                    </span>
                    @endforeach
                </td>
            </tbody>
        </table>
        
    </div>
</div>
<div class="modal-footer">
    <input type="button" value="{{__('Close')}}" class="btn  btn-light" data-bs-dismiss="modal">
</div>
{{Form::close()}}