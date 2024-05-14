<div class="card">

    <div class="card-body">
        <h4 class="m-0">
            {{__('Создать пользователя')}}
        </h4>
    </div>
    <div class="card-body">
        <form action="{{route('people.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="jsonObj">{{__('JSON объект')}}</label>
                <textarea class="form-control" name="jsonObj" id="jsonObj" rows="7"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                {{__('Создать')}}
            </button>
        </form>
    </div>
    <div class="card-body">
        <h5>Пример объекта:</h5>
<pre><p>{
    "firstname": "David",
    "lastname": "Jsonyan",
    "email": "david@davidjan.ru",
    "password": "test"
}</p></pre>
    </div>

</div>
