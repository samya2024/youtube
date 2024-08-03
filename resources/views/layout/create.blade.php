<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <div class="card">
    <h3> add categories
      <a href="{{url('Categories') }}" class="btn btn-primary float-end">Back</a>
    </h3>

  </div>

  <div class="card-body">
    <form action="/categories/create" method="post" enctype="multipart/form-data">

      @csrf

      <div class="mb-3">
        <label class="form-label">name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}" />
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
      </div>

      <div class="mb-3">
        <label for="formFileMultiple" class="form-label">description</label>
        <textarea type="description" name="description" rows="3" class="form-control" value={{ old('description') }}></textarea>
        @error('description')<span class="text-danger">{{ $message }}</span> @enderror
      </div>


      <div class="mb-3">
        <label class="form-label">In Active</label>
        <input name="is_active" type="checkbox" value="true" name="is_active" {{ old('is_active') == true ? 'checked' : ''}}>
        @error('is_active')<span class="text-danger">{{ $message }}</span> @enderror
      </div>

      <div>
        <label class="form-label">upload file/image</label>
        <input type="file" name=" image" class="form-control">
      </div>

      <div class="mb-3">
        <button type="submit" class="btn btn-primary">save</button>
      </div>

  </div>
  </form>
</body>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
  integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</html>