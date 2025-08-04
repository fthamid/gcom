<div>
    <ul>
    @foreach($users as $user)   
        <li>{{ $user->email }} {{ $user ->name }} {{ $user->is_admin }}</li>
    @endforeach
    </ul>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
</div>
