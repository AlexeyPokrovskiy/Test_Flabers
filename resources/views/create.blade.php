@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Создать</h2>
            </div>


            <form action="" class="form-gorizontal">
                <label for="">Имя клиента</label>
                <input type="text" class="form-control" name="first-name" placeholder="Имя клиента" value="">
                <label for="">Фамилия клиента</label>
                <input type="text" class="form-control" name="second-name" placeholder="Фамилия клиента" value="">
                <label for="">Номер телефона</label>
                <input type="tel" class="form-control" name="tel" placeholder="Номер телефона" value="">
                <label for="">Эл.почта</label>
                <input type="email" class="form-control" name="email" placeholder="Эл.почта" value="">
                <label for="">Город</label>
                <input type="text" class="form-control" name="city" placeholder="Город" value="">
                <label for="">Сумма</label>
                <input type="text" class="form-control" name="cost" placeholder="Сумма" value="" style="width: 20%;">

                <br>
                <div class="btn btn-success">Отправить</div>
                <input class="btn btn-default" type='reset' value='Очистить' name='reset'>
            </form>
        </div>
    </div>
@endsection