

        <form action="{{route('tag.store')}}" method="post">
            @csrf
            <div class="card-body">
                <label for="name">Tag</label>
                <input type="text" name="name" class="form-control file-border"  required>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Create Tag
                    </button>
                </div>
            </div>
        </form>
