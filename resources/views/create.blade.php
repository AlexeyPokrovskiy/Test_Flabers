@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Создать</h2>
            </div>

            <div id="RequestLog"></div>
            <form action="#" class="form-gorizontal" id="createRequest">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <label for="">Имя клиента</label>
                <input type="text" class="form-control" name="firstname" placeholder="Имя клиента" value="">
                <label for="">Фамилия клиента</label>
                <input type="text" class="form-control" name="secondname" placeholder="Фамилия клиента" value="">
                <label for="">Номер телефона</label>
                <input type="tel" class="form-control" name="tel" placeholder="Номер телефона" value="">
                <label for="">Эл.почта</label>
                <input type="email" class="form-control" name="email" placeholder="Эл.почта" value="">
                <label for="">Город</label>
                <input type="text" class="form-control" name="city" placeholder="Город" value="">
                <label for="">Сумма</label>
                <input type="text" class="form-control" name="cost" placeholder="Сумма" value="" style="width: 20%;">

                <br>
                <input id="createRequestButton" value="Отправить" class="btn btn-success">
                <input class="btn btn-default" type='reset' value='Очистить' name='reset'>
            </form>
        </div>
    </div>
@endsection