@extends('base')
@section('main')
<div>
    <a style="margin: 19px;" href="{{ route('contacts.create')}}" class="btn btn-primary">New contact</a>
</div>
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Contacts</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>아이디</td>
          <td>이름</td>
          <td>이메일</td>
          <td>직업</td>
          <td>도시</td>
          <td>나라</td>
          <td colspan=2>수정</td>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts ?? '' as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->first_name}} {{$contact->last_name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->job_title}}</td>
            <td>{{$contact->city}}</td>
            <td>{{$contact->country}}</td>
            <td>
                <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
<div class="col-sm-12">
    @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}
        </div>
    @endif
</div>
@endsection
