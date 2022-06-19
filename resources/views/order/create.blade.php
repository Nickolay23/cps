@extends('layouts.app')

@section('title', __('Placing order'))

@section('content')
    <table class="table">
        <thead class="table-secondary">
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('Name')}}</th>
            <th scope="col">{{__('Amount')}}</th>
            <th scope="col">{{__('Price')}}</th>
            <th scope="col">{{__('Cost')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order->spareparts as $sparepart)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$sparepart->name}}</td>
                <td class="d-inline-flex w-75">
                    {{$sparepart->pivot->amount}}
                </td>
                <td>{{$sparepart->price}} &#8381;</td>
                <td>
                    {{$sparepart->sparepartCost()}} &#8381;
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <td></td>
            <td>{{__('Total') . ':'}}</td>
            <td>{{$order->getTotalAmount()}}</td>
            <td></td>
            <td>{{$order->getTotalCost()}} &#8381;</td>
        </tr>
        </tfoot>
    </table>
    <form action="{{route('order-confirm')}}" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="address" class="col-sm-2 col-form-label">{{__('Delivery address')}}</label>
            <div class="col-sm-10">
                @error('address')
                    <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <textarea name="address" class="form-control" id="address">{{old('address')}}</textarea>
            </div>
        </div>
        <div class="mb-4 d-flex justify-content-end">
            <button type="submit" class="btn btn-dark">{{__('Confirm')}}</button>
        </div>
    </form>
@endsection

