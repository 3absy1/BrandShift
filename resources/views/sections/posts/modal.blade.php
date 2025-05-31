<div class="modal fade" id="postModal" tabindex="-1">
    <div class="modal-dialog">
        <form id="postForm">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title">Post</h5></div>
                <div class="modal-body">
                    <input type="hidden" id="postId">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea id="content" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Save</button>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>
