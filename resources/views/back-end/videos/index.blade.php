@extends('back-end.layout.app')
 @php $row_num = 1;   $pageTitle = "الفديوهات" @endphp  
@section('title')
   {{"لوحة التحكم - " . $pageTitle }}
@endsection

@section('content')

    @component('back-end.layout.header')
        @slot('nav_title')
        {{$pageTitle}} 
         <a href="{{ route($routeName.'.create') }}">  
            <button class="alert-success"> <i class="fa fa-plus"></i> </button>
         </a>
        @endslot
    @endcomponent
    @component('back-end.shared.table' )
                    @if (session()->get('action') )
                        <div class="alert alert-success">
                            <strong>{{session()->get('action')}}</strong>
                        </div>
                    @endif
                    <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                        <thead>
                            <tr>
                            <th>#</th>
                                <th>اسم الفديو</th>
                                <th>اسم الفديو بالانجليزية</th>
                                <th>الفديو</th>
                                <th>المستخدم</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $item)
                                 <tr>
                                    <td> {{$row_num++}}</td>
                                    <td>{{$item->ar_name}}</td>
                                    <td>{{$item->name}}</td>                                   
                                    <td>
                                        <iframe width="560" height="315"
                                             src="https://www.youtube.com/embed/{{$item->path}}">
                                        </iframe>         
                                    </td>      
                                   <td>{{ isset($item->user) ? $item->user->user_name : '' }}</td>
                                    <td>
                                        @include('back-end.shared.buttons.delete')
                                   
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
    @endcomponent
@endsection
