<div class="card">

    <div class="card-body">
        <h4 class="m-0">
            {{__('Регистрация')}}
        </h4>
    </div>
    <div class="card-body">
        <form action="{{route('register.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="required">{{__('Имя')}}</label>
                <input type="text" name="name" class="form-control" autofocus>
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
                <label class="required">{{__('Пароль еще раз')}}</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" value="1" name="persData" id="persData" class="form-check-input">
                    <label for="persData" class="form-check-label">{{__('Я согласен на ОПД')}}</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                {{__('Регистрация')}}
            </button>
        </form>
    </div>

</div>
