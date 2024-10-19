<div class="d-flex">
    <button class="px-2 py-2 btn btn-link nav-link d-flex align-items-center edit-btn" type="button" title="Edit"
        data-coreui-toggle="modal" data-coreui-target="#standardStore"
        data-update-route="{{ route('admin.standards.store') }}"
        data-row-data="{{ json_encode([$standard->id, $standard->name, $standard->order]) }}">
        <svg class="icon icon-lg text-primary">
            <use xlink:href="{{ url('coreui/vendors/@coreui/icons/svg/free.svg#cil-pencil') }}">
            </use>
        </svg>
    </button>
    <button class="px-2 py-2 btn btn-link nav-link d-flex align-items-center" type="button" title="Delete"
        data-coreui-toggle="modal" data-coreui-target="#deleteModal"
        data-delete-route="{{ route('admin.standards.destroy', $standard->id) }}">
        <svg class="icon icon-lg text-danger">
            <use xlink:href="{{ url('coreui/vendors/@coreui/icons/svg/free.svg#cil-trash') }}">
            </use>
        </svg>
    </button>
</div>
