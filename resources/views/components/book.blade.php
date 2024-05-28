<div class="card">

    <div class="card-body">
        <h4 class="m-0">
            {{__('Добавить книгу')}}
        </h4>
    </div>
    <div class="card-body">
        <form action="{{route('library.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="required">{{__('Автор')}}</label>
                <input type="text" name="author" class="form-control" value="{{ old('author') }}" autofocus>
            </div>

            <div class="mb-3">
                <label class="required">{{__('Название')}}</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>

            <div class="mb-3">
                <label class="required">{{__('Жанр')}}</label>
                <input type="text" name="genre" class="form-control" value="{{ old('genre') }}">
            </div>

            <div class="mb-3">
                <label class="required">{{__('Язык')}}</label>
                <input type="text" name="language" class="form-control" value="{{ old('language') }}">
            </div>

            <div class="mb-3">
                <label class="required">{{__('Год')}}</label>
                <input type="text" name="year" class="form-control" value="{{ old('year') }}">
            </div>

            <button type="submit" class="btn btn-primary">
                {{__('Создать')}}
            </button>
        </form>
        @if($errors->any())
            <div class="alert alert-danger mt-3">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
    </div>

</div>
