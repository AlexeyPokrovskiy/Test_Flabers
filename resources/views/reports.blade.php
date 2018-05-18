@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Отчет о заказах</h2>
            </div>


            <form action="" class="form-inline" id="ListReport">
                <label for="">№ заказа</label>
                <input type="text" class="form-control" id="orderId" name="id" placeholder="№ заказа" value="" style="width: 20%;">
                <label for="">Город</label>
                <input type="text" class="form-control" name="city" placeholder="Город" value="" style="width: 20%;">
                <label for="">Сумма заказа</label>
                <select name="cost" id="" class="form-control" style="width: 20%;">
                    <option value="0" selected></option>
                    <option value="100">До 100</option>
                    <option value="500">До 500</option>
                    <option value="1000">До 1000</option>
                    <option value="5000">До 5000</option>
                </select>


                <br>
                <br>
                <div id="ButtonListReport" class="btn btn-success">Найти</div>

            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h2> Найдено <span id="TotalItem">{{count($reports)}}</span></h2>
            <p>На сумму
                <span id="TotalCost">

                    @foreach($reports as $report)
                    @php
                        $sum+=$report->cost;
                    @endphp
                    @endforeach
                    {{$sum}}
                </span>
                гривен или $<span id="TotalCostDollar"></span></p>

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
                    <tbody id="RequestTable">
                    @foreach($reports as $report)
                        <tr>
                            <th scope="row">{{$report->id}}</th>
                            <td>{{$report->firstname}}</td>
                            <td>{{$report->secondname}}</td>
                            <td>{{$report->tel}}</td>
                            <td>{{$report->email}}</td>
                            <td>{{$report->city}}</td>
                            <td>{{$report->cost}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <tr>
                    <td colspan="3">
                        <ul class="pagination pull-center">
                            {{$reports->links()}}
                        </ul>

                    </td>
                </tr>
            </div>
        </div>
    </div>
@endsection