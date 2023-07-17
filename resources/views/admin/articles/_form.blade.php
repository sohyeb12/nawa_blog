<div class="container">
    <div class="col-md-8">
        
        <div class="mb-3">
            <label for="title">Title Article: </label>
            
            <div>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title',$article->title) }}" placeholder="Enter New Title">
                @error('name')
                <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="article_text">Article Text:</label>
            <div>
                <textarea class="form-control @error('article_text') is-invalid @enderror" id="article_text" name="article_text" placeholder="New Text:" rows="20">{{ old('article_text',$article->article_text) }}</textarea>

                <div>
                    @error('article_text')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="image">Article Image : </label>

            <img src="{{ $article->image_url }}" alt="" width="100">

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