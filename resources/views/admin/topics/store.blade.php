<div class="modal fade" id="topicStore" tabindex="-1" aria-labelledby="topicStoreLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="topicStoreLabel">Topic Details</h5>
                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('admin.topics.store') }}" id="updateDataForm">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" class="">
                    <div class="mb-3 row">
                        <div class="mb-3 col-lg-6 col-sm-12">
                            <label class="form-label" for="subject">Subject</label>
                            <select class="form-control" name="subject_id" id="subject" onchange="updateBooks()">
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-lg-6 col-sm-12">
                            <label class="form-label" for="book">Book</label>
                            <select class="form-control" name="book_id" id="book">
                                @foreach ($subjects[0]->books as $book)
                                    <option value="{{ $book->id }}">{{ $book->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" placeholder="Name" name="name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
