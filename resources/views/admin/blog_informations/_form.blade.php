<div class="container">
    <div class="col-md-8">
        
        <div class="mb-3">
            <label for="name">Name Blog: </label>
            
            <div>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name',$blog_information->name) }}" placeholder="Enter New Title">
                @error('name')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>


        <div class="mb-3">
            <label for="image">Blog Logo : </label>

            <img src="{{ $blog_information->image_url }}" alt="" width="100">

            <div>
                <input type="file" class="form-control @error('image') is-invalid @enderror" width="100" id="image" name="image" placeholder="New Image">
                @error('image')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">{{ $btn_submit ?? 'Save' }}</button>
    </div>
</div>