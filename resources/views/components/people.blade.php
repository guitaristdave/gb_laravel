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
                <label class="required">{{__('Имя')}}</label>
                <input type="text" name="firstname" class="form-control" autofocus>
            </div>

            <div class="mb-3">
                <label class="required">{{__('Фамилия')}}</label>
                <input type="text" name="lastname" class="form-control">
            </div>

            <div class="mb-3">
                <label class="required">{{__('E-mail')}}</label>
                <input type="email" name="email" class="form-control" >
            </div>
            <div class="mb-3">
                <label class="required">{{__('Пароль')}}</label>
                <input type="password" name="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">
                {{__('Создать')}}
            </button>
        </form>
    </div>

</div>
