@extends('layout.master')
@section('content')
@component('layout.components.title')
index page
@endcomponent
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">Name</th>
            <th scope="col" class="">Email</th>
            <th>img</th>
            <th scope="col" class="">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr class="text-center">
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><img src="https://lh3.googleusercontent.com/8-v0Kw09G8rEkzeba9LTh_d66d6gIb85e0mKze24kUDl4CiVAdXmKHTohUFKjFqzSAunyF91WhCaB_tn5oiha6452R7OazyFrouIdIRvH0icLsClTHQjt5ETe94jrPJjkCVi-bNslqF0ddtO8uE5QdP3J1g2IFoignR8adywyRogCoUCvONGl0OnabA5lZYFvZNQUdoXLgaefZu80UuPT4Wo1wGInGOpe9fP9o8reL7xH-5y38z-8r4ZgaMsTB6kpFJR4hirO0v2dpKHWoR6J5GwfA9XHwYpnp3HDhOa1CwV6-JVgqTm_VQcm6zWeX-GCgxbG5sqhyaZsGZWd9DR6RZbiWT423SHmHzesmJTU4IKdJdXQzqMWeVjIYJckHLSTn-G78k1X6I-hr58msxjrxafoDOjUqZa2S8zIsjGfgYbJEi-hivEaEdxcTBjtr2zq-ncYZL0MyGTn9vbdIcXW0-dNY5xhKPRzG4AAvJk5y1h5kcTrA06scgjF_bxY160zAMIQcRp_y52jxzMzIz6vlhSvkL86_KB4qQ6FqPSKNL1xqr2qV7KUSyskr1dC3r658iy0YgR3sAgD0OH_e2dZrYvpbb443vdD08P2aKvYrEOzHcBLOeqWPsRMJXd1KgZ4mRYYllNF0atE_JspctjS5dsey4gtkKj46zZpmV5psw4bbdCEGZt63ENJFhQ=s233-no?authuser=0" alt=""></td>
            <td class="d-flex align-items-center justify-content-around">
              <form action="{{route('users.show',$user->id)}}" method="get">
                <button class="btn btn-sm btn-primary rounded-0">
                  Show
                </button>
              </form>
              <form action="{{route('users.edit',$user->id)}}" method="get">
                <button class="btn btn-sm btn-warning rounded-0">
                  Edit
                </button>
              </form>
              <form action="{{route('users.destroy',$user->id)}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="delete">
                <button class="btn btn-sm btn-danger rounded-0">
                  Delete
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center">{{$users->links()}}</div>
    </div>
  </div>
</div>
@endsection