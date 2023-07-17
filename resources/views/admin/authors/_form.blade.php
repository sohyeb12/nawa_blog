<div class="container">
    <div class="col-md-8">
        
        <div class="mb-3">
            <label for="name">First Name: </label>
            
            <div>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('name',$author->first_name) }}" placeholder="Enter New Title">
                @error('first_name')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="name">Last Name: </label>
            
            <div>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('name',$author->last_name) }}" placeholder="Enter New Title">
                @error('last_name')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>


        <div class="mb-3">
            <label for="name">email: </label>
            
            <div>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('name',$author->email) }}" placeholder="Enter New Title">
                @error('email')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="name">Phone: </label>
            
            <div>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('name',$author->phone) }}" placeholder="Enter New Title">
                @error('phone')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>
        

        <div class="mb-3">
            <label for="image">New Image : </label>

            <img src="{{ $author->image_url }}" alt="" width="100">

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