@extends('admin.layouts.layout')
@section('main')
    <div class="container">
        <div class="row">
            <h1 class="">Test page</h1>
            <ul>
                <li><a href="{{route('categories.index')}}">Index Category</a></li>
                <li><a href="{{route('categories.create')}}">Create Category</a></li>
                <li><a href="">{{asset('/')}}</a></li>
            </ul>
        </div>

        <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog"
             id="modalSheet">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header border-bottom-0">
                        <h1 class="modal-title fs-5">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-0">
                        <p>This is a modal sheet, a variation of the modal that docs itself to the bottom of the
                            viewport like the newer share sheets in iOS.</p>
                    </div>
                    <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
                        <button type="button" class="btn btn-lg btn-primary">Save changes</button>
                        <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
