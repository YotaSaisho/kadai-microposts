<div class="card">
    <div class="card-header">
        <h3 class="card-title">{!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!}</h3>
    </div>
    <div class="card-body">
        <img class="rounded img-fluid" src="{{ Gravatar::src($user->email, 500) }}" alt="">
    </div>
</div>
@include('user_follow.follow_button', ['user' => $user])