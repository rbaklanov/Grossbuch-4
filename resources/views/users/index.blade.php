@extends('adminlte::layouts.app')
@section('htmlheader_title')
@endsection

@section('main-content')
   <div class="container-fluid">
       <div class="row">
           @include('partials.alerts');
       </div>
       <div class="row btn-aligned-bottom">
           <div class="col-sm-6 m-t">
               <ol class="breadcrumb" style="background-color: #ecf0f5;">
                   <li><a href="/home"><i class="fa fa-home" aria-hidden="true">&nbsp;</i>{{ @Lang::get('common.home') }}</a></li>
                   <li><i class="fa fa-gears" aria-hidden="true">&nbsp;</i>{{ @Lang::get('users.settings') }}</li>
                   <li class="active"><a href="/users"><i class="fa fa-users" aria-hidden="true">&nbsp;</i>{{ @Lang::get('users.all_users') }}</a></li>
               </ol>
           </div>
           <div class="col-sm-6 m-t">
               <a href="{{ route('users.create') }}" class="btn btn-primary m-r pull-right margin-bottom">{{ Lang::get('users.create_new') }}</a>
           </div>
       </div>
       <div class="col-sm-12">
           <hr>
       </div>
       <div class="row">
           <div class="col-sm-12">
               <table class="table table-hover table-condensed">
                   <thead>
                   <th class="text-center">#</th>
                   <th>{{ Lang::get('users.name') }}</th>
                   <th>{{ Lang::get('users.email') }}</th>
                   <th>{{ Lang::get('users.client') }}</th>
                   <th>{{ Lang::get('users.department') }}</th>
                   <th>{{ Lang::get('users.position') }}</th>
                   <th></th>
                   </thead>
                   <tbody>
                       @foreach($users as $user)
                           <tr>
                               <th class="text-center">{{ $user->id }} </th>
                               <td> {{ $user->name }} </td>
                               <td> {{ $user->email }} </td>
                               <td> {{ $user->client_id }} </td>
                               <td> {{ $user->department->department_name }} </td>
                               <td> {{ $user->position->position_name }} </td>
                               <td class="text-center" style="">
                                   @if ($user->hasAccessTo('user', 'edit', 0))
                                       <a href="{{ route('users.edit', $user->id) }}" id="user_edit" class="table-action-link m-r"><i class='fa fa-pencil'></i></a>
                                   @endif
                                   @if ($user->hasAccessTo('partner', 'delete', 0))
                                       {!! Form::open(['route' => ['users.destroy', $user->id], 'id' => 'form'.$user->id, 'style' => 'max-width: 32px; margin:0; display: inline-block; float: none;', 'method' => 'DELETE']) !!}
                                           <a href="javascript: submitform('#form{{$user->id}}')" class="table-action-link"><i class='fa fa-trash-o'></i></a>
                                       {!! Form::close() !!}
                                   @endif
                               </td>
                           </tr>
                       @endforeach
                   </tbody>
               </table>
               <div class="text-center">
                   {!! $users->render() !!}
               </div>
           </div>
       </div>
   </div>
@endsection

<script>
   function submitform(form_id){
       $(form_id).submit();
   }
</script>
