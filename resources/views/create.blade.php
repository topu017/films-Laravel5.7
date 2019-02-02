@include('templates.header')
<div class="container_fluid">
    <div class="create_container">
        <div class="form_container">
            <h1>Enter Film Details</h1>
            <div class="col-md-10 offset-md-1">
                <form name="film_create_form" action="{{ route('storeFilm') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Name" required>
                            <label for="slug">Slug</label>
                            <input name="slug" type="text" class="form-control" id="slug" placeholder="Slug" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description" placeholder="Description" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="release_date">Release Date</label>
                            <input name="release_date" type="text" class="form-control" id="release_date" placeholder="mm/dd/yy" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="ticket_price">Ticket Price</label>
                            <input name="ticket_price" type="text" class="form-control" id="ticket_price" placeholder="$" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="country">Country</label>
                            <select name="country" id="country" class="form-control" required>
                                <option selected>Country</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                                <option value="France">France</option>
                                <option value="UK">UK</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="genre">Genre</label>
                            <select name="genre" id="genre" class="form-control" required>
                                <option selected>Genre</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Tragedy">Tragedy</option>
                                <option value="Action">Action</option>
                                <option value="Horror">Horror</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="image">Image</label>
                            <input name="image" type="file" class="form-control-file" id="image" required>
                        </div>
                    </div>
                    <button name="submit" type="submit" class="btn btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('templates.footer')