<a href="{{route('designer.jobdetail', $notification->data['jobs']['id'])}}" style="text-decoration:none;"">
    <label class="font-weight-bold" for="name">{{$notification->data['user']['name']}} </label><br>

    <small class="ml-2 text-danger" style="color:#523EE8;">Cancel your job W{{$notification->data['jobs']['id']}}
    </small>
    <br>
        <small>{{$notification->created_at->diffForHumans()}}</small>
    <hr>
</a>