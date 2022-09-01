<div class="modal fade" id="delete{{$teacher->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title" id="modalDelete"><b>Confir delete</b></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('teachers.destroy', $teacher->id)}}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Are you sure you want to delete {{$teacher->name}}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn col-auto bg-danger text-white">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
