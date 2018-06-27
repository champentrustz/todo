@extends('layouts.app')

@section('content')
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
@if ($errors->has('notsuccess'))
<div class="row">
    <div class="col-xs-12">
        <div class="bg-danger"
            style="margin-bottom: 24px;padding: 24px; border-radius: 5px;">
            {{ $errors->first('notsuccess') }}
        </div>
    </div>
</div>
@endif

@if ($errors->has('success'))
<div class="row">
    <div class="col-xs-12">
        <div class="bg-success"
            style="margin-bottom: 24px;padding: 24px; border-radius: 5px;">
            {{ $errors->first('success') }}
        </div>
    </div>
</div>
@endif

@if ($errors->has('notsuccessclear'))
<div class="row">
    <div class="col-xs-12">
        <div class="bg-danger"
            style="margin-bottom: 24px;padding: 24px; border-radius: 5px;">
            {{ $errors->first('notsuccessclear') }}
        </div>
    </div>
</div>
@endif
<div class="row">
  <div class="col-sm-11">
    <div class="row">
    <div class="col-md-3 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="list-group-item">
            <a href="{{ url('/home')}}"><h4><img src="https://www.img.in.th/images/4dbde50c500ffd502a014a85d8b10901.png" width="25" height="25"> Todolist :  All</h4></a>
            </div>
          </div>
          <div class="panel-body">
            <div class="list-group-item">
            <a href="{{ url('/today')}}"><h4><img src="https://www.img.in.th/images/4dbde50c500ffd502a014a85d8b10901.png" width="25" height="25"> Todolist :  Today</h4></a>
          </div>
          </div>
        </div>
          <div class="list-group">
         <a class="list-group-item active">
           Project
         </a>

         @foreach ($projects as $project)

        @if ($project->user_id == Auth::id())

        <div class="list-group-item">
          <a href="{{ url('/sortproject/'.$project->id)}}">{{$project->title}}
            <a href="{{ url('/deleteproject/'.$project->id)}}"><button class="remove-item btn btn-default btn-xs pull-right"><img src="https://www.img.in.th/images/ce6e8c2ca1c93087db792a0e7a1a1700.png" width="10" height="10"></button></a></a>
</div>
          @endif

            @endforeach

       </div>

       <div class="col-xs-6 col-sm-7">
         <form action="{{ url('/createproject/'.$project->id) }}" method="POST">
           {{ csrf_field() }}
         <input type="text" class="form-control add-todo" placeholder="Add project" name="addproject">
       </div>
       <div class="col-xs-6 col-sm-5">
         <button type="submit" class="btn btn-block btn-primary">Add Title</button>
       </div>
     </form>
      </div>

      <div class="col-xs-4 col-sm-8">
          <div class="panel panel-default">
            <div class="panel-body">
            <div class="todolist not-done">
             <h1>Add Todo-list</h1>
                          <form action="{{ url('/createcontent/'.$project->id) }}" method="POST">
                   {{ csrf_field() }}
              <div class="col-xs-4 col-sm-12">

                 <div class="col-xs-4 col-sm-12">

                 Add todolist<input type="text" class="form-control add-todo"  name="add">
                 <br>

               </div>
               <div class="col-xs-2 col-sm-6">
             <div class="input-group input-daterange">

                 Add date<input type="text" class="form-control"  name="date">
             </div>
             <br>
           </div>

                <div class="col-xs-2 col-sm-6">
                  Add time<input type="time" class="form-control add-todo" name="time">
                </div>
                  <br>

              <div class="col-xs-2 col-sm-10">
                Type<br>
                <form action="action_page.php">
                    <select name="list">
                        @foreach($projects as $project)
                          @if ($project->user_id == Auth::id())
                        <option value="{{$project->id}}">{{$project->title}}</option>
                          @endif
                        @endforeach
                      </select>
                      <br>
                    </form>

      </div>
</form>
      <div class="col-xs-2 col-sm-4">
        <br>
          <button type="submit" class="btn btn-primary" name="btnadd">Add todolist</button>
      </div>
          </div>
              </form>
            </div>

            <br>
          <br>


        </div>
      </div>

        <div class="panel panel-default">
          <div class="panel-body">
            <div class="todolist">
             <h1>Todo-list</h1>
             <br>
                <ul id="done-items" class="list-unstyled">
                  <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">Title</th>
                                <th class="text-center">Type</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Time</th>
                  </tr>
                  </thead>
                  <tbody>

                  @foreach($contents as $content)
                  <form action="{{ url('/deletecontent/'.$content->id) }}" method="POST">
                    {{ csrf_field() }}


                                <tr>
                  @if ($content->user_id == Auth::id())
                    @if( $content->date == date('Y-n-d'))

                  <td class="text-center">{{$content->body}}</td>
                  <td class="text-center">{{$content->project->title}}</td>
                  <td class="text-center">{{$content->date}}</td>
                  <td class="text-center">{{$content->time}}</td>
                  <td class="text-center"><button class="remove-item btn btn-default btn-xs pull-right"><img src="https://www.img.in.th/images/ce6e8c2ca1c93087db792a0e7a1a1700.png" width="10" height="10"></button></td>

                        @endif

                  @endif
                                <tr>
                  </form>
                  @endforeach

                </tbody>
                </table>
                </div>
                </ul>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  </div>


@endsection
@push('script')

    <script>
        $('.input-daterange').datepicker({
            'format': 'yyyy-mm-dd',
        });
    </script>

@endpush
