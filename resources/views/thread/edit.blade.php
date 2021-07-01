@extends('layouts.main')

@section('content')
    <form id="thread-create-form">
        @csrf
        <input type="hidden" name="user_id" value="1">
        <div class="modal-header d-flex align-items-center bg-secondary text-white">
            <h6 class="modal-title mb-0" id="threadModalLabel">New Discussion</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="ForumTitle">Voeg hier uw Titel</label>
                <input type="text" class="form-control" id="TitleForum" placeholder="Titel" name="title" autofocus>
            </div>

            <div class="form-group">
                <label for="ForumText">Voeg hier Uw tekst</label>
                <textarea class="form-control" id="TextForum" rows="3" name="description"></textarea>
            </div>

            <div class="custom-file form-control-sm mt-3" style="max-width: 300px;">
                <input type="file" class="custom-file-input" id="customFile" multiple="" />
                <label class="custom-file-label" for="customFile" disabled>Attachment</label>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-secondary" onclick="handleForm()">Post</button>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        let form = document.querySelector('#thread-create-form')
        window.onload = function (){
            form.addEventListener('submit', handleForm)
        }

        async function handleForm(event){
            event.preventDefault();
            await fetch('http://127.0.0.1:8000/api/thread/create',
                {
                    method: 'POST',
                    body: new FormData(form),
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            )
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.log(error))
        }
    </script>
@endsection
