@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Отчет о заказах</h2>
            </div>


            <form action="" class="form-inline" >
                <label for="">№ заказа</label>
                <input type="text" class="form-control" name="id" placeholder="№ заказа" value="" style="width: 20%;">
                <label for="">Город</label>
                <input type="text" class="form-control" name="city" placeholder="Город" value="" style="width: 20%;">
                <label for="">Сумма заказа</label>
                <select name="cost" id="" class="form-control" style="width: 20%;">
                    <option value="100">До 100</option>
                    <option value="300">До 500</option>
                    <option value="1000">До 1000</option>
                    <option value="5000">До 5000</option>
                </select>


                <br>
                <br>
                <div class="btn btn-success">Найти</div>

            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h2> Найдено 10</h2>
            <p>На сумму 123 456,67 гривен или $4748.33</p>
            <div class="col-xs-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>№ заказа</th>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Телефон</th>
                        <th>Эл.Почта</th>
                        <th>Город</th>
                        <th>Сумма</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Диана</td>
                        <td>Захарова</td>
                        <td>380671234567</td>
                        <td>user@gmail.com</td>
                        <td>Киев</td>
                        <td>321,23</td>

                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection